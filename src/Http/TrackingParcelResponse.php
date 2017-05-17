<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 17:22 ч.
 */

namespace Omniship\Speedy\Http;

use Carbon\Carbon;
use Omniship\Common\Component;
use Omniship\Common\EventBag;
use Omniship\Common\TrackingBag;
use Omniship\Message\AbstractResponse;
use ResultTrackPickingEx;

class TrackingParcelResponse extends AbstractResponse
{
    /**
     * @var \SimpleXMLElement
     */
    protected $xml;

    /**
     * @return TrackingBag
     */
    public function getData()
    {
        $result = new TrackingBag();
        if(!is_null($this->getCode())) {
            return $result;
        }

        if(!empty($this->data)) {
            foreach($this->data AS $row => $track) {
                $track = $this->_getTrackPicking($track);
                $name = implode(' ', array_filter([$track->getSiteType(), $track->getSiteName()]));
                $name = explode('[', !$name && !$row ? $track->getOperationComment() : $name);
                $name = trim(array_shift($name));
                $result->add([
                    'id' => $track->getOperationCode(),
                    'name' => $name,
                    'events' => $this->_getEvents($track),
                    'shipment_date' => Carbon::createFromFormat('Y-m-d\TH:i:sP', $track->getMoment()),
                    'estimated_delivery_date' => $this->_findEstimatedDeliveryDate($this->data[0]),
                    'origin_service_area' => null,
                    'destination_service_area' => $name ? new Component(['id' => md5($name), 'name' => $name]) : null,
                ]);
            }
        }
        return $result;
    }

    /**
     * @return null|string
     */
    public function getMessage()
    {
        if(is_string($this->data)) {
            return $this->data;
        }
        return null;
    }

    /**
     * @return null|string
     */
    public function getCode()
    {
        if(is_string($this->data)) {
            if(preg_match('~\(([a-z0-9]{2,})\)~i', $this->data, $match)) {
                return $match[1];
            }
            return md5($this->data);
        }
        return null;
    }

    /**
     * @param ResultTrackPickingEx $track
     * @return EventBag
     */
    protected function _getEvents(ResultTrackPickingEx $track)
    {
        $result = new EventBag();
        if($event = $track->getOperationComment()) {
            $result->add(new Component([
                'id' => 'comment',
                'name' => trim($event),
            ]));
        }
        if($event = $track->getOperationDescription()) {
            $result->add(new Component([
                'id' => 'description',
                'name' => trim($event),
            ]));
        }
        if($event = $track->getSignatureImage()) {
            $result->add(new Component([
                'id' => 'image',
                'name' => trim($event),
            ]));
        }
        return $result;
    }

    /**
     * @param ResultTrackPickingEx $track
     * @return ResultTrackPickingEx
     */
    protected function _getTrackPicking(ResultTrackPickingEx $track) {
        return $track;
    }

    /**
     * @param ResultTrackPickingEx $track
     * @return null|Carbon
     */
    protected function _findEstimatedDeliveryDate(ResultTrackPickingEx $track) {
        if(preg_match('~\:\s(([\d]{2}).([\d]{2}).([\d]{4}))$~im', $track->getOperationComment(), $match)) {
            return Carbon::createFromFormat('d.m.Y', $match[1], $this->getRequest()->getReceiverTimeZone());
        }
        return null;
    }

}
<?php
/**
 * File for class SpeedyStructSearchClients
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructSearchClients originally named searchClients
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructSearchClients extends SpeedyWsdlClass
{
    /**
     * The sessionId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $sessionId;
    /**
     * The clientQuery
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var SpeedyStructParamClientSearch
     */
    public $clientQuery;
    /**
     * Constructor method for searchClients
     * @see parent::__construct()
     * @param string $_sessionId
     * @param SpeedyStructParamClientSearch $_clientQuery
     * @return SpeedyStructSearchClients
     */
    public function __construct($_sessionId = NULL,$_clientQuery = NULL)
    {
        parent::__construct(array('sessionId'=>$_sessionId,'clientQuery'=>$_clientQuery),false);
    }
    /**
     * Get sessionId value
     * @return string|null
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }
    /**
     * Set sessionId value
     * @param string $_sessionId the sessionId
     * @return string
     */
    public function setSessionId($_sessionId)
    {
        return ($this->sessionId = $_sessionId);
    }
    /**
     * Get clientQuery value
     * @return SpeedyStructParamClientSearch|null
     */
    public function getClientQuery()
    {
        return $this->clientQuery;
    }
    /**
     * Set clientQuery value
     * @param SpeedyStructParamClientSearch $_clientQuery the clientQuery
     * @return SpeedyStructParamClientSearch
     */
    public function setClientQuery($_clientQuery)
    {
        return ($this->clientQuery = $_clientQuery);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructSearchClients
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
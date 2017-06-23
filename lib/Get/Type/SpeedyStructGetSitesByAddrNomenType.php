<?php
/**
 * File for class SpeedyStructGetSitesByAddrNomenType
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructGetSitesByAddrNomenType originally named getSitesByAddrNomenType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructGetSitesByAddrNomenType extends SpeedyWsdlClass
{
    /**
     * The sessionId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $sessionId;
    /**
     * The addrNomen
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var SpeedyEnumAddrNomen
     */
    public $addrNomen;
    /**
     * Constructor method for getSitesByAddrNomenType
     * @see parent::__construct()
     * @param string $_sessionId
     * @param SpeedyEnumAddrNomen $_addrNomen
     * @return SpeedyStructGetSitesByAddrNomenType
     */
    public function __construct($_sessionId = NULL,$_addrNomen = NULL)
    {
        parent::__construct(array('sessionId'=>$_sessionId,'addrNomen'=>$_addrNomen),false);
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
     * Get addrNomen value
     * @return SpeedyEnumAddrNomen|null
     */
    public function getAddrNomen()
    {
        return $this->addrNomen;
    }
    /**
     * Set addrNomen value
     * @uses SpeedyEnumAddrNomen::valueIsValid()
     * @param SpeedyEnumAddrNomen $_addrNomen the addrNomen
     * @return SpeedyEnumAddrNomen
     */
    public function setAddrNomen($_addrNomen)
    {
        if(!SpeedyEnumAddrNomen::valueIsValid($_addrNomen))
        {
            return false;
        }
        return ($this->addrNomen = $_addrNomen);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructGetSitesByAddrNomenType
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
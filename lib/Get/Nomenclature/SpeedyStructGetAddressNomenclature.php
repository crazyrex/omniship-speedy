<?php
/**
 * File for class SpeedyStructGetAddressNomenclature
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructGetAddressNomenclature originally named getAddressNomenclature
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructGetAddressNomenclature extends SpeedyWsdlClass
{
    /**
     * The sessionId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $sessionId;
    /**
     * The nomenType
     * @var int
     */
    public $nomenType;
    /**
     * The countryId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $countryId;
    /**
     * Constructor method for getAddressNomenclature
     * @see parent::__construct()
     * @param string $_sessionId
     * @param int $_nomenType
     * @param long $_countryId
     * @return SpeedyStructGetAddressNomenclature
     */
    public function __construct($_sessionId = NULL,$_nomenType = NULL,$_countryId = NULL)
    {
        parent::__construct(array('sessionId'=>$_sessionId,'nomenType'=>$_nomenType,'countryId'=>$_countryId),false);
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
     * Get nomenType value
     * @return int|null
     */
    public function getNomenType()
    {
        return $this->nomenType;
    }
    /**
     * Set nomenType value
     * @param int $_nomenType the nomenType
     * @return int
     */
    public function setNomenType($_nomenType)
    {
        return ($this->nomenType = $_nomenType);
    }
    /**
     * Get countryId value
     * @return long|null
     */
    public function getCountryId()
    {
        return $this->countryId;
    }
    /**
     * Set countryId value
     * @param long $_countryId the countryId
     * @return long
     */
    public function setCountryId($_countryId)
    {
        return ($this->countryId = $_countryId);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructGetAddressNomenclature
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
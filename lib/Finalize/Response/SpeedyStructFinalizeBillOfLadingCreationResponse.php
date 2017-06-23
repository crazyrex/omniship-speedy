<?php
/**
 * File for class SpeedyStructFinalizeBillOfLadingCreationResponse
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructFinalizeBillOfLadingCreationResponse originally named finalizeBillOfLadingCreationResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructFinalizeBillOfLadingCreationResponse extends SpeedyWsdlClass
{
    /**
     * The return
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var SpeedyStructResultBOL
     */
    public $return;
    /**
     * Constructor method for finalizeBillOfLadingCreationResponse
     * @see parent::__construct()
     * @param SpeedyStructResultBOL $_return
     * @return SpeedyStructFinalizeBillOfLadingCreationResponse
     */
    public function __construct($_return = NULL)
    {
        parent::__construct(array('return'=>$_return),false);
    }
    /**
     * Get return value
     * @return SpeedyStructResultBOL|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param SpeedyStructResultBOL $_return the return
     * @return SpeedyStructResultBOL
     */
    public function setReturn($_return)
    {
        return ($this->return = $_return);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructFinalizeBillOfLadingCreationResponse
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
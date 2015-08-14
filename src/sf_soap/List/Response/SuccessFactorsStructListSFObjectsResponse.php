<?php
/**
 * File for class SuccessFactorsStructListSFObjectsResponse
 * @package SuccessFactors
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
/**
 * This class stands for SuccessFactorsStructListSFObjectsResponse originally named listSFObjectsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.successfactors.eu/sfapi/v1/soap12?wsdl}
 * @package SuccessFactors
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
class SuccessFactorsStructListSFObjectsResponse extends SuccessFactorsWsdlClass
{
	/**
	 * The name
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * @var string
	 */
	public $name;
	/**
	 * Constructor method for listSFObjectsResponse
	 * @see parent::__construct()
	 * @param string $_name
	 * @return SuccessFactorsStructListSFObjectsResponse
	 */
	public function __construct($_name = NULL)
	{
		parent::__construct(array('name'=>$_name));
	}
	/**
	 * Get name value
	 * @return string|null
	 */
	public function getName()
	{
		return $this->name;
	}
	/**
	 * Set name value
	 * @param string $_name the name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SuccessFactorsWsdlClass::__set_state()
	 * @uses SuccessFactorsWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SuccessFactorsStructListSFObjectsResponse
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
?>
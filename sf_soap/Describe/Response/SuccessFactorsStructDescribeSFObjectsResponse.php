<?php
/**
 * File for class SuccessFactorsStructDescribeSFObjectsResponse
 * @package SuccessFactors
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
/**
 * This class stands for SuccessFactorsStructDescribeSFObjectsResponse originally named describeSFObjectsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.successfactors.eu/sfapi/v1/soap12?wsdl}
 * @package SuccessFactors
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
class SuccessFactorsStructDescribeSFObjectsResponse extends SuccessFactorsWsdlClass
{
	/**
	 * The result
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * @var SuccessFactorsStructDescribeResult
	 */
	public $result;
	/**
	 * Constructor method for describeSFObjectsResponse
	 * @see parent::__construct()
	 * @param SuccessFactorsStructDescribeResult $_result
	 * @return SuccessFactorsStructDescribeSFObjectsResponse
	 */
	public function __construct($_result = NULL)
	{
		parent::__construct(array('result'=>$_result));
	}
	/**
	 * Get result value
	 * @return SuccessFactorsStructDescribeResult|null
	 */
	public function getResult()
	{
		return $this->result;
	}
	/**
	 * Set result value
	 * @param SuccessFactorsStructDescribeResult $_result the result
	 * @return SuccessFactorsStructDescribeResult
	 */
	public function setResult($_result)
	{
		return ($this->result = $_result);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SuccessFactorsWsdlClass::__set_state()
	 * @uses SuccessFactorsWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SuccessFactorsStructDescribeSFObjectsResponse
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
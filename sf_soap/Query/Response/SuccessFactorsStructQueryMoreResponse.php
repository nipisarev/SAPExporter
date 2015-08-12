<?php
/**
 * File for class SuccessFactorsStructQueryMoreResponse
 * @package SuccessFactors
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
/**
 * This class stands for SuccessFactorsStructQueryMoreResponse originally named queryMoreResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.successfactors.eu/sfapi/v1/soap12?wsdl}
 * @package SuccessFactors
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
class SuccessFactorsStructQueryMoreResponse extends SuccessFactorsWsdlClass
{
	/**
	 * The result
	 * @var SuccessFactorsStructQueryResult
	 */
	public $result;
	/**
	 * Constructor method for queryMoreResponse
	 * @see parent::__construct()
	 * @param SuccessFactorsStructQueryResult $_result
	 * @return SuccessFactorsStructQueryMoreResponse
	 */
	public function __construct($_result = NULL)
	{
		parent::__construct(array('result'=>$_result));
	}
	/**
	 * Get result value
	 * @return SuccessFactorsStructQueryResult|null
	 */
	public function getResult()
	{
		return $this->result;
	}
	/**
	 * Set result value
	 * @param SuccessFactorsStructQueryResult $_result the result
	 * @return SuccessFactorsStructQueryResult
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
	 * @return SuccessFactorsStructQueryMoreResponse
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
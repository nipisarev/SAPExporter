<?php
/**
 * File for class SuccessFactorsStructGetJobResultMTOMRS
 * @package SuccessFactors
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
/**
 * This class stands for SuccessFactorsStructGetJobResultMTOMRS originally named getJobResultMTOMRS
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.successfactors.eu/sfapi/v1/soap12?wsdl}
 * @package SuccessFactors
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
class SuccessFactorsStructGetJobResultMTOMRS extends SuccessFactorsWsdlClass
{
	/**
	 * The result
	 * Meta informations extracted from the WSDL
	 * - xmime:expectedContentTypes : application/octet-stream
	 * @var base64Binary
	 */
	public $result;
	/**
	 * Constructor method for getJobResultMTOMRS
	 * @see parent::__construct()
	 * @param base64Binary $_result
	 * @return SuccessFactorsStructGetJobResultMTOMRS
	 */
	public function __construct($_result = NULL)
	{
		parent::__construct(array('result'=>$_result));
	}
	/**
	 * Get result value
	 * @return base64Binary|null
	 */
	public function getResult()
	{
		return $this->result;
	}
	/**
	 * Set result value
	 * @param base64Binary $_result the result
	 * @return base64Binary
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
	 * @return SuccessFactorsStructGetJobResultMTOMRS
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
<?php
/**
 * File for class SuccessFactorsStructSFWebServiceFaultException
 * @package SuccessFactors
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
/**
 * This class stands for SuccessFactorsStructSFWebServiceFaultException originally named SFWebServiceFaultException
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.successfactors.eu/sfapi/v1/soap12?wsdl}
 * @package SuccessFactors
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
class SuccessFactorsStructSFWebServiceFaultException extends SuccessFactorsWsdlClass
{
	/**
	 * The errorCode
	 * @var string
	 */
	public $errorCode;
	/**
	 * The errorMessage
	 * @var string
	 */
	public $errorMessage;
	/**
	 * Constructor method for SFWebServiceFaultException
	 * @see parent::__construct()
	 * @param string $_errorCode
	 * @param string $_errorMessage
	 * @return SuccessFactorsStructSFWebServiceFaultException
	 */
	public function __construct($_errorCode = NULL,$_errorMessage = NULL)
	{
		parent::__construct(array('errorCode'=>$_errorCode,'errorMessage'=>$_errorMessage));
	}
	/**
	 * Get errorCode value
	 * @return string|null
	 */
	public function getErrorCode()
	{
		return $this->errorCode;
	}
	/**
	 * Set errorCode value
	 * @param string $_errorCode the errorCode
	 * @return string
	 */
	public function setErrorCode($_errorCode)
	{
		return ($this->errorCode = $_errorCode);
	}
	/**
	 * Get errorMessage value
	 * @return string|null
	 */
	public function getErrorMessage()
	{
		return $this->errorMessage;
	}
	/**
	 * Set errorMessage value
	 * @param string $_errorMessage the errorMessage
	 * @return string
	 */
	public function setErrorMessage($_errorMessage)
	{
		return ($this->errorMessage = $_errorMessage);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SuccessFactorsWsdlClass::__set_state()
	 * @uses SuccessFactorsWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SuccessFactorsStructSFWebServiceFaultException
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
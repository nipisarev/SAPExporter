<?php
/**
 * File for class SuccessFactorsStructLogin
 * @package SuccessFactors
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
/**
 * This class stands for SuccessFactorsStructLogin originally named login
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.successfactors.eu/sfapi/v1/soap12?wsdl}
 * @package SuccessFactors
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
class SuccessFactorsStructLogin extends SuccessFactorsWsdlClass
{
	/**
	 * The credential
	 * @var SuccessFactorsStructSFCredential
	 */
	public $credential;
	/**
	 * The param
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var SuccessFactorsStructSFParameter
	 */
	public $param;
	/**
	 * Constructor method for login
	 * @see parent::__construct()
	 * @param SuccessFactorsStructSFCredential $_credential
	 * @param SuccessFactorsStructSFParameter $_param
	 * @return SuccessFactorsStructLogin
	 */
	public function __construct($_credential = NULL,$_param = NULL)
	{
		parent::__construct(array('credential'=>$_credential,'param'=>$_param));
	}
	/**
	 * Get credential value
	 * @return SuccessFactorsStructSFCredential|null
	 */
	public function getCredential()
	{
		return $this->credential;
	}
	/**
	 * Set credential value
	 * @param SuccessFactorsStructSFCredential $_credential the credential
	 * @return SuccessFactorsStructSFCredential
	 */
	public function setCredential($_credential)
	{
		return ($this->credential = $_credential);
	}
	/**
	 * Get param value
	 * @return SuccessFactorsStructSFParameter|null
	 */
	public function getParam()
	{
		return $this->param;
	}
	/**
	 * Set param value
	 * @param SuccessFactorsStructSFParameter $_param the param
	 * @return SuccessFactorsStructSFParameter
	 */
	public function setParam($_param)
	{
		return ($this->param = $_param);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SuccessFactorsWsdlClass::__set_state()
	 * @uses SuccessFactorsWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SuccessFactorsStructLogin
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
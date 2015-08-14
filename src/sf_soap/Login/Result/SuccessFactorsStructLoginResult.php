<?php
/**
 * File for class SuccessFactorsStructLoginResult
 * @package SuccessFactors
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
/**
 * This class stands for SuccessFactorsStructLoginResult originally named LoginResult
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.successfactors.eu/sfapi/v1/soap12?wsdl}
 * @package SuccessFactors
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
class SuccessFactorsStructLoginResult extends SuccessFactorsWsdlClass
{
	/**
	 * The sessionId
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $sessionId;
	/**
	 * The msUntilPwdExpiration
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var long
	 */
	public $msUntilPwdExpiration;
	/**
	 * The error
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * - nillable : true
	 * @var SuccessFactorsStructError
	 */
	public $error;
	/**
	 * Constructor method for LoginResult
	 * @see parent::__construct()
	 * @param string $_sessionId
	 * @param long $_msUntilPwdExpiration
	 * @param SuccessFactorsStructError $_error
	 * @return SuccessFactorsStructLoginResult
	 */
	public function __construct($_sessionId = NULL,$_msUntilPwdExpiration = NULL,$_error = NULL)
	{
		parent::__construct(array('sessionId'=>$_sessionId,'msUntilPwdExpiration'=>$_msUntilPwdExpiration,'error'=>$_error));
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
	 * Get msUntilPwdExpiration value
	 * @return long|null
	 */
	public function getMsUntilPwdExpiration()
	{
		return $this->msUntilPwdExpiration;
	}
	/**
	 * Set msUntilPwdExpiration value
	 * @param long $_msUntilPwdExpiration the msUntilPwdExpiration
	 * @return long
	 */
	public function setMsUntilPwdExpiration($_msUntilPwdExpiration)
	{
		return ($this->msUntilPwdExpiration = $_msUntilPwdExpiration);
	}
	/**
	 * Get error value
	 * @return SuccessFactorsStructError|null
	 */
	public function getError()
	{
		return $this->error;
	}
	/**
	 * Set error value
	 * @param SuccessFactorsStructError $_error the error
	 * @return SuccessFactorsStructError
	 */
	public function setError($_error)
	{
		return ($this->error = $_error);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SuccessFactorsWsdlClass::__set_state()
	 * @uses SuccessFactorsWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SuccessFactorsStructLoginResult
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
<?php
/**
 * File for class SuccessFactorsServiceLogin
 * @package SuccessFactors
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
/**
 * This class stands for SuccessFactorsServiceLogin originally named Login
 * @package SuccessFactors
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
class SuccessFactorsServiceLogin extends SuccessFactorsWsdlClass
{
	/**
	 * Method to call the operation originally named login
	 * @uses SuccessFactorsWsdlClass::getSoapClient()
	 * @uses SuccessFactorsWsdlClass::setResult()
	 * @uses SuccessFactorsWsdlClass::getResult()
	 * @uses SuccessFactorsWsdlClass::saveLastError()
	 * @uses SuccessFactorsStructLogin::getCredential()
	 * @uses SuccessFactorsStructLogin::getParam()
	 * @param SuccessFactorsStructLogin $_successFactorsStructLogin
	 * @return SuccessFactorsStructLoginResponse
	 */
	public function login(SuccessFactorsStructLogin $_successFactorsStructLogin)
	{
		try
		{
			$this->setResult(new SuccessFactorsStructLoginResponse(self::getSoapClient()->login(array('credential'=>$_successFactorsStructLogin->getCredential(),'param'=>$_successFactorsStructLogin->getParam()))));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Returns the result
	 * @see SuccessFactorsWsdlClass::getResult()
	 * @return SuccessFactorsStructLoginResponse
	 */
	public function getResult()
	{
		return parent::getResult();
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
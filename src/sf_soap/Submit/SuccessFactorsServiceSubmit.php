<?php
/**
 * File for class SuccessFactorsServiceSubmit
 * @package SuccessFactors
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
/**
 * This class stands for SuccessFactorsServiceSubmit originally named Submit
 * @package SuccessFactors
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
class SuccessFactorsServiceSubmit extends SuccessFactorsWsdlClass
{
	/**
	 * Method to call the operation originally named submitQueryJob
	 * @uses SuccessFactorsWsdlClass::getSoapClient()
	 * @uses SuccessFactorsWsdlClass::setResult()
	 * @uses SuccessFactorsWsdlClass::getResult()
	 * @uses SuccessFactorsWsdlClass::saveLastError()
	 * @uses SuccessFactorsStructSubmitQueryJob::getQueryString()
	 * @uses SuccessFactorsStructSubmitQueryJob::getParam()
	 * @param SuccessFactorsStructSubmitQueryJob $_successFactorsStructSubmitQueryJob
	 * @return SuccessFactorsStructSubmitQueryJobResponse
	 */
	public function submitQueryJob(SuccessFactorsStructSubmitQueryJob $_successFactorsStructSubmitQueryJob)
	{
		try
		{
			$this->setResult(new SuccessFactorsStructSubmitQueryJobResponse(self::getSoapClient()->submitQueryJob(array('queryString'=>$_successFactorsStructSubmitQueryJob->getQueryString(),'param'=>$_successFactorsStructSubmitQueryJob->getParam()))));
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
	 * @return SuccessFactorsStructSubmitQueryJobResponse
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
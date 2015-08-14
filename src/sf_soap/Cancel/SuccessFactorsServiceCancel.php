<?php
/**
 * File for class SuccessFactorsServiceCancel
 * @package SuccessFactors
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
/**
 * This class stands for SuccessFactorsServiceCancel originally named Cancel
 * @package SuccessFactors
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
class SuccessFactorsServiceCancel extends SuccessFactorsWsdlClass
{
	/**
	 * Method to call the operation originally named cancelJob
	 * @uses SuccessFactorsWsdlClass::getSoapClient()
	 * @uses SuccessFactorsWsdlClass::setResult()
	 * @uses SuccessFactorsWsdlClass::getResult()
	 * @uses SuccessFactorsWsdlClass::saveLastError()
	 * @uses SuccessFactorsStructCancelJob::getTaskId()
	 * @param SuccessFactorsStructCancelJob $_successFactorsStructCancelJob
	 * @return SuccessFactorsStructCancelJobResponse
	 */
	public function cancelJob(SuccessFactorsStructCancelJob $_successFactorsStructCancelJob)
	{
		try
		{
			$this->setResult(new SuccessFactorsStructCancelJobResponse(self::getSoapClient()->cancelJob(array('taskId'=>$_successFactorsStructCancelJob->getTaskId()))));
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
	 * @return SuccessFactorsStructCancelJobResponse
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
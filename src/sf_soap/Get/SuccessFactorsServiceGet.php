<?php
/**
 * File for class SuccessFactorsServiceGet
 * @package SuccessFactors
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
/**
 * This class stands for SuccessFactorsServiceGet originally named Get
 * @package SuccessFactors
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
class SuccessFactorsServiceGet extends SuccessFactorsWsdlClass
{
	/**
	 * Method to call the operation originally named getJobResult
	 * @uses SuccessFactorsWsdlClass::getSoapClient()
	 * @uses SuccessFactorsWsdlClass::setResult()
	 * @uses SuccessFactorsWsdlClass::getResult()
	 * @uses SuccessFactorsWsdlClass::saveLastError()
	 * @uses SuccessFactorsStructGetJobResult::getTaskId()
	 * @uses SuccessFactorsStructGetJobResult::getFormat()
	 * @param SuccessFactorsStructGetJobResult $_successFactorsStructGetJobResult
	 * @return base64Binary
	 */
	public function getJobResult(SuccessFactorsStructGetJobResult $_successFactorsStructGetJobResult)
	{
		try
		{
			$this->setResult(self::getSoapClient()->getJobResult(array('taskId'=>$_successFactorsStructGetJobResult->getTaskId(),'format'=>$_successFactorsStructGetJobResult->getFormat())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named getJobResultEmbedded
	 * @uses SuccessFactorsWsdlClass::getSoapClient()
	 * @uses SuccessFactorsWsdlClass::setResult()
	 * @uses SuccessFactorsWsdlClass::getResult()
	 * @uses SuccessFactorsWsdlClass::saveLastError()
	 * @uses SuccessFactorsStructGetJobResultEmbedded::getTaskId()
	 * @param SuccessFactorsStructGetJobResultEmbedded $_successFactorsStructGetJobResultEmbedded
	 * @return base64Binary
	 */
	public function getJobResultEmbedded(SuccessFactorsStructGetJobResultEmbedded $_successFactorsStructGetJobResultEmbedded)
	{
		try
		{
			$this->setResult(self::getSoapClient()->getJobResultEmbedded(array('taskId'=>$_successFactorsStructGetJobResultEmbedded->getTaskId())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named getJobStatus
	 * @uses SuccessFactorsWsdlClass::getSoapClient()
	 * @uses SuccessFactorsWsdlClass::setResult()
	 * @uses SuccessFactorsWsdlClass::getResult()
	 * @uses SuccessFactorsWsdlClass::saveLastError()
	 * @uses SuccessFactorsStructGetJobStatus::getTaskId()
	 * @param SuccessFactorsStructGetJobStatus $_successFactorsStructGetJobStatus
	 * @return SuccessFactorsStructGetJobStatusResponse
	 */
	public function getJobStatus(SuccessFactorsStructGetJobStatus $_successFactorsStructGetJobStatus)
	{
		try
		{
			$this->setResult(new SuccessFactorsStructGetJobStatusResponse(self::getSoapClient()->getJobStatus(array('taskId'=>$_successFactorsStructGetJobStatus->getTaskId()))));
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
	 * @return base64Binary|SuccessFactorsStructGetJobStatusResponse
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
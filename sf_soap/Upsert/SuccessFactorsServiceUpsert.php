<?php
/**
 * File for class SuccessFactorsServiceUpsert
 * @package SuccessFactors
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
/**
 * This class stands for SuccessFactorsServiceUpsert originally named Upsert
 * @package SuccessFactors
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
class SuccessFactorsServiceUpsert extends SuccessFactorsWsdlClass
{
	/**
	 * Method to call the operation originally named upsert
	 * @uses SuccessFactorsWsdlClass::getSoapClient()
	 * @uses SuccessFactorsWsdlClass::setResult()
	 * @uses SuccessFactorsWsdlClass::getResult()
	 * @uses SuccessFactorsWsdlClass::saveLastError()
	 * @uses SuccessFactorsStructUpsert::getType()
	 * @uses SuccessFactorsStructUpsert::getSfobject()
	 * @uses SuccessFactorsStructUpsert::getProcessingParam()
	 * @param SuccessFactorsStructUpsert $_successFactorsStructUpsert
	 * @return SuccessFactorsStructUpsertResponse
	 */
	public function upsert(SuccessFactorsStructUpsert $_successFactorsStructUpsert)
	{
		try
		{
			$this->setResult(new SuccessFactorsStructUpsertResponse(self::getSoapClient()->upsert(array('type'=>$_successFactorsStructUpsert->getType(),'sfobject'=>$_successFactorsStructUpsert->getSfobject(),'processingParam'=>$_successFactorsStructUpsert->getProcessingParam()))));
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
	 * @return SuccessFactorsStructUpsertResponse
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
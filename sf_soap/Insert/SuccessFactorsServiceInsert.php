<?php
/**
 * File for class SuccessFactorsServiceInsert
 * @package SuccessFactors
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
/**
 * This class stands for SuccessFactorsServiceInsert originally named Insert
 * @package SuccessFactors
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
class SuccessFactorsServiceInsert extends SuccessFactorsWsdlClass
{
	/**
	 * Method to call the operation originally named insert
	 * @uses SuccessFactorsWsdlClass::getSoapClient()
	 * @uses SuccessFactorsWsdlClass::setResult()
	 * @uses SuccessFactorsWsdlClass::getResult()
	 * @uses SuccessFactorsWsdlClass::saveLastError()
	 * @uses SuccessFactorsStructInsert::getType()
	 * @uses SuccessFactorsStructInsert::getSfobject()
	 * @uses SuccessFactorsStructInsert::getProcessingParam()
	 * @param SuccessFactorsStructInsert $_successFactorsStructInsert
	 * @return SuccessFactorsStructInsertResponse
	 */
	public function insert(SuccessFactorsStructInsert $_successFactorsStructInsert)
	{
		try
		{
			$this->setResult(new SuccessFactorsStructInsertResponse(self::getSoapClient()->insert(array('type'=>$_successFactorsStructInsert->getType(),'sfobject'=>$_successFactorsStructInsert->getSfobject(),'processingParam'=>$_successFactorsStructInsert->getProcessingParam()))));
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
	 * @return SuccessFactorsStructInsertResponse
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
<?php
/**
 * File for class SuccessFactorsServiceDelete
 * @package SuccessFactors
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
/**
 * This class stands for SuccessFactorsServiceDelete originally named Delete
 * @package SuccessFactors
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
class SuccessFactorsServiceDelete extends SuccessFactorsWsdlClass
{
	/**
	 * Method to call the operation originally named delete
	 * @uses SuccessFactorsWsdlClass::getSoapClient()
	 * @uses SuccessFactorsWsdlClass::setResult()
	 * @uses SuccessFactorsWsdlClass::getResult()
	 * @uses SuccessFactorsWsdlClass::saveLastError()
	 * @uses SuccessFactorsStructDelete::getType()
	 * @uses SuccessFactorsStructDelete::getSfobject()
	 * @uses SuccessFactorsStructDelete::getProcessingParam()
	 * @param SuccessFactorsStructDelete $_successFactorsStructDelete
	 * @return SuccessFactorsStructDeleteResponse
	 */
	public function delete(SuccessFactorsStructDelete $_successFactorsStructDelete)
	{
		try
		{
			$this->setResult(new SuccessFactorsStructDeleteResponse(self::getSoapClient()->delete(array('type'=>$_successFactorsStructDelete->getType(),'sfobject'=>$_successFactorsStructDelete->getSfobject(),'processingParam'=>$_successFactorsStructDelete->getProcessingParam()))));
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
	 * @return SuccessFactorsStructDeleteResponse
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
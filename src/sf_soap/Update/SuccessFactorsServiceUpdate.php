<?php
/**
 * File for class SuccessFactorsServiceUpdate
 * @package SuccessFactors
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
/**
 * This class stands for SuccessFactorsServiceUpdate originally named Update
 * @package SuccessFactors
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
class SuccessFactorsServiceUpdate extends SuccessFactorsWsdlClass
{
	/**
	 * Method to call the operation originally named update
	 * @uses SuccessFactorsWsdlClass::getSoapClient()
	 * @uses SuccessFactorsWsdlClass::setResult()
	 * @uses SuccessFactorsWsdlClass::getResult()
	 * @uses SuccessFactorsWsdlClass::saveLastError()
	 * @uses SuccessFactorsStructUpdate::getType()
	 * @uses SuccessFactorsStructUpdate::getSfobject()
	 * @uses SuccessFactorsStructUpdate::getProcessingParam()
	 * @param SuccessFactorsStructUpdate $_successFactorsStructUpdate
	 * @return SuccessFactorsStructUpdateResponse
	 */
	public function update(SuccessFactorsStructUpdate $_successFactorsStructUpdate)
	{
		try
		{
			$this->setResult(new SuccessFactorsStructUpdateResponse(self::getSoapClient()->update(array('type'=>$_successFactorsStructUpdate->getType(),'sfobject'=>$_successFactorsStructUpdate->getSfobject(),'processingParam'=>$_successFactorsStructUpdate->getProcessingParam()))));
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
	 * @return SuccessFactorsStructUpdateResponse
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
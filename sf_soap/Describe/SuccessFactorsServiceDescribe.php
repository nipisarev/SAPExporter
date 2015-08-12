<?php
/**
 * File for class SuccessFactorsServiceDescribe
 * @package SuccessFactors
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
/**
 * This class stands for SuccessFactorsServiceDescribe originally named Describe
 * @package SuccessFactors
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
class SuccessFactorsServiceDescribe extends SuccessFactorsWsdlClass
{
	/**
	 * Method to call the operation originally named describe
	 * @uses SuccessFactorsWsdlClass::getSoapClient()
	 * @uses SuccessFactorsWsdlClass::setResult()
	 * @uses SuccessFactorsWsdlClass::getResult()
	 * @uses SuccessFactorsWsdlClass::saveLastError()
	 * @uses SuccessFactorsStructDescribeSFObjects::getType()
	 * @uses SuccessFactorsStructDescribeSFObjects::getParam()
	 * @param SuccessFactorsStructDescribeSFObjects $_successFactorsStructDescribeSFObjects
	 * @return SuccessFactorsStructDescribeSFObjectsResponse
	 */
	public function describe(SuccessFactorsStructDescribeSFObjects $_successFactorsStructDescribeSFObjects)
	{
		try
		{
			$this->setResult(new SuccessFactorsStructDescribeSFObjectsResponse(self::getSoapClient()->describe(array('type'=>$_successFactorsStructDescribeSFObjects->getType(),'param'=>$_successFactorsStructDescribeSFObjects->getParam()))));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named describeEx
	 * @uses SuccessFactorsWsdlClass::getSoapClient()
	 * @uses SuccessFactorsWsdlClass::setResult()
	 * @uses SuccessFactorsWsdlClass::getResult()
	 * @uses SuccessFactorsWsdlClass::saveLastError()
	 * @uses SuccessFactorsStructDescribeSFObjectsEx::getType()
	 * @uses SuccessFactorsStructDescribeSFObjectsEx::getParam()
	 * @param SuccessFactorsStructDescribeSFObjectsEx $_successFactorsStructDescribeSFObjectsEx
	 * @return SuccessFactorsStructDescribeSFObjectsExResponse
	 */
	public function describeEx(SuccessFactorsStructDescribeSFObjectsEx $_successFactorsStructDescribeSFObjectsEx)
	{
		try
		{
			$this->setResult(new SuccessFactorsStructDescribeSFObjectsExResponse(self::getSoapClient()->describeEx(array('type'=>$_successFactorsStructDescribeSFObjectsEx->getType(),'param'=>$_successFactorsStructDescribeSFObjectsEx->getParam()))));
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
	 * @return SuccessFactorsStructDescribeSFObjectsExResponse|SuccessFactorsStructDescribeSFObjectsResponse
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
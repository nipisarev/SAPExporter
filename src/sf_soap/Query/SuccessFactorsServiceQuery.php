<?php
/**
 * File for class SuccessFactorsServiceQuery
 * @package SuccessFactors
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
/**
 * This class stands for SuccessFactorsServiceQuery originally named Query
 * @package SuccessFactors
 * @subpackage Services
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
class SuccessFactorsServiceQuery extends SuccessFactorsWsdlClass
{
	/**
	 * Method to call the operation originally named query
	 * @uses SuccessFactorsWsdlClass::getSoapClient()
	 * @uses SuccessFactorsWsdlClass::setResult()
	 * @uses SuccessFactorsWsdlClass::getResult()
	 * @uses SuccessFactorsWsdlClass::saveLastError()
	 * @uses SuccessFactorsStructQuery::getQueryString()
	 * @uses SuccessFactorsStructQuery::getParam()
	 * @param SuccessFactorsStructQuery $_successFactorsStructQuery
	 * @return SuccessFactorsStructQueryResponse
	 */
	public function query(SuccessFactorsStructQuery $_successFactorsStructQuery)
	{
		try
		{
			$this->setResult(new SuccessFactorsStructQueryResponse(self::getSoapClient()->query(array('queryString'=>$_successFactorsStructQuery->getQueryString(),'param'=>$_successFactorsStructQuery->getParam()))));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named queryMore
	 * @uses SuccessFactorsWsdlClass::getSoapClient()
	 * @uses SuccessFactorsWsdlClass::setResult()
	 * @uses SuccessFactorsWsdlClass::getResult()
	 * @uses SuccessFactorsWsdlClass::saveLastError()
	 * @uses SuccessFactorsStructQueryMore::getQuerySessionId()
	 * @param SuccessFactorsStructQueryMore $_successFactorsStructQueryMore
	 * @return SuccessFactorsStructQueryMoreResponse
	 */
	public function queryMore(SuccessFactorsStructQueryMore $_successFactorsStructQueryMore)
	{
		try
		{
			$this->setResult(new SuccessFactorsStructQueryMoreResponse(self::getSoapClient()->queryMore(array('querySessionId'=>$_successFactorsStructQueryMore->getQuerySessionId()))));
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
	 * @return SuccessFactorsStructQueryMoreResponse|SuccessFactorsStructQueryResponse
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
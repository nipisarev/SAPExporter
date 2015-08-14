<?php
/**
 * File for class SuccessFactorsEnumTaskResultStatusEnum
 * @package SuccessFactors
 * @subpackage Enumerations
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
/**
 * This class stands for SuccessFactorsEnumTaskResultStatusEnum originally named TaskResultStatusEnum
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.successfactors.eu/sfapi/v1/soap12?wsdl}
 * @package SuccessFactors
 * @subpackage Enumerations
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
class SuccessFactorsEnumTaskResultStatusEnum extends SuccessFactorsWsdlClass
{
	/**
	 * Constant for value 'running'
	 * @return string 'running'
	 */
	const VALUE_RUNNING = 'running';
	/**
	 * Constant for value 'finished'
	 * @return string 'finished'
	 */
	const VALUE_FINISHED = 'finished';
	/**
	 * Constant for value 'failed'
	 * @return string 'failed'
	 */
	const VALUE_FAILED = 'failed';
	/**
	 * Return true if value is allowed
	 * @uses SuccessFactorsEnumTaskResultStatusEnum::VALUE_RUNNING
	 * @uses SuccessFactorsEnumTaskResultStatusEnum::VALUE_FINISHED
	 * @uses SuccessFactorsEnumTaskResultStatusEnum::VALUE_FAILED
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(SuccessFactorsEnumTaskResultStatusEnum::VALUE_RUNNING,SuccessFactorsEnumTaskResultStatusEnum::VALUE_FINISHED,SuccessFactorsEnumTaskResultStatusEnum::VALUE_FAILED));
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
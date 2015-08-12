<?php
/**
 * File for class SuccessFactorsEnumTaskStatusEnum
 * @package SuccessFactors
 * @subpackage Enumerations
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
/**
 * This class stands for SuccessFactorsEnumTaskStatusEnum originally named TaskStatusEnum
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.successfactors.eu/sfapi/v1/soap12?wsdl}
 * @package SuccessFactors
 * @subpackage Enumerations
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
class SuccessFactorsEnumTaskStatusEnum extends SuccessFactorsWsdlClass
{
	/**
	 * Constant for value 'unsubmitted'
	 * @return string 'unsubmitted'
	 */
	const VALUE_UNSUBMITTED = 'unsubmitted';
	/**
	 * Constant for value 'submitted'
	 * @return string 'submitted'
	 */
	const VALUE_SUBMITTED = 'submitted';
	/**
	 * Constant for value 'processing'
	 * @return string 'processing'
	 */
	const VALUE_PROCESSING = 'processing';
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
	 * Constant for value 'undefined'
	 * @return string 'undefined'
	 */
	const VALUE_UNDEFINED = 'undefined';
	/**
	 * Constant for value 'cancelled'
	 * @return string 'cancelled'
	 */
	const VALUE_CANCELLED = 'cancelled';
	/**
	 * Constant for value 'deleted'
	 * @return string 'deleted'
	 */
	const VALUE_DELETED = 'deleted';
	/**
	 * Return true if value is allowed
	 * @uses SuccessFactorsEnumTaskStatusEnum::VALUE_UNSUBMITTED
	 * @uses SuccessFactorsEnumTaskStatusEnum::VALUE_SUBMITTED
	 * @uses SuccessFactorsEnumTaskStatusEnum::VALUE_PROCESSING
	 * @uses SuccessFactorsEnumTaskStatusEnum::VALUE_FINISHED
	 * @uses SuccessFactorsEnumTaskStatusEnum::VALUE_FAILED
	 * @uses SuccessFactorsEnumTaskStatusEnum::VALUE_UNDEFINED
	 * @uses SuccessFactorsEnumTaskStatusEnum::VALUE_CANCELLED
	 * @uses SuccessFactorsEnumTaskStatusEnum::VALUE_DELETED
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(SuccessFactorsEnumTaskStatusEnum::VALUE_UNSUBMITTED,SuccessFactorsEnumTaskStatusEnum::VALUE_SUBMITTED,SuccessFactorsEnumTaskStatusEnum::VALUE_PROCESSING,SuccessFactorsEnumTaskStatusEnum::VALUE_FINISHED,SuccessFactorsEnumTaskStatusEnum::VALUE_FAILED,SuccessFactorsEnumTaskStatusEnum::VALUE_UNDEFINED,SuccessFactorsEnumTaskStatusEnum::VALUE_CANCELLED,SuccessFactorsEnumTaskStatusEnum::VALUE_DELETED));
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
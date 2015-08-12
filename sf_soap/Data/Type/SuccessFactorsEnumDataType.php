<?php
/**
 * File for class SuccessFactorsEnumDataType
 * @package SuccessFactors
 * @subpackage Enumerations
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
/**
 * This class stands for SuccessFactorsEnumDataType originally named dataType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.successfactors.eu/sfapi/v1/soap12?wsdl}
 * @package SuccessFactors
 * @subpackage Enumerations
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
class SuccessFactorsEnumDataType extends SuccessFactorsWsdlClass
{
	/**
	 * Constant for value 'string'
	 * @return string 'string'
	 */
	const VALUE_STRING = 'string';
	/**
	 * Constant for value 'date'
	 * @return string 'date'
	 */
	const VALUE_DATE = 'date';
	/**
	 * Constant for value 'datetime'
	 * @return string 'datetime'
	 */
	const VALUE_DATETIME = 'datetime';
	/**
	 * Constant for value 'int'
	 * @return string 'int'
	 */
	const VALUE_INT = 'int';
	/**
	 * Constant for value 'long'
	 * @return string 'long'
	 */
	const VALUE_LONG = 'long';
	/**
	 * Constant for value 'float'
	 * @return string 'float'
	 */
	const VALUE_FLOAT = 'float';
	/**
	 * Constant for value 'double'
	 * @return string 'double'
	 */
	const VALUE_DOUBLE = 'double';
	/**
	 * Constant for value 'boolean'
	 * @return string 'boolean'
	 */
	const VALUE_BOOLEAN = 'boolean';
	/**
	 * Constant for value 'binary'
	 * @return string 'binary'
	 */
	const VALUE_BINARY = 'binary';
	/**
	 * Return true if value is allowed
	 * @uses SuccessFactorsEnumDataType::VALUE_STRING
	 * @uses SuccessFactorsEnumDataType::VALUE_DATE
	 * @uses SuccessFactorsEnumDataType::VALUE_DATETIME
	 * @uses SuccessFactorsEnumDataType::VALUE_INT
	 * @uses SuccessFactorsEnumDataType::VALUE_LONG
	 * @uses SuccessFactorsEnumDataType::VALUE_FLOAT
	 * @uses SuccessFactorsEnumDataType::VALUE_DOUBLE
	 * @uses SuccessFactorsEnumDataType::VALUE_BOOLEAN
	 * @uses SuccessFactorsEnumDataType::VALUE_BINARY
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(SuccessFactorsEnumDataType::VALUE_STRING,SuccessFactorsEnumDataType::VALUE_DATE,SuccessFactorsEnumDataType::VALUE_DATETIME,SuccessFactorsEnumDataType::VALUE_INT,SuccessFactorsEnumDataType::VALUE_LONG,SuccessFactorsEnumDataType::VALUE_FLOAT,SuccessFactorsEnumDataType::VALUE_DOUBLE,SuccessFactorsEnumDataType::VALUE_BOOLEAN,SuccessFactorsEnumDataType::VALUE_BINARY));
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
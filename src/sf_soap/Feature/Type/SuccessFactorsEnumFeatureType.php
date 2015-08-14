<?php
/**
 * File for class SuccessFactorsEnumFeatureType
 * @package SuccessFactors
 * @subpackage Enumerations
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
/**
 * This class stands for SuccessFactorsEnumFeatureType originally named featureType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.successfactors.eu/sfapi/v1/soap12?wsdl}
 * @package SuccessFactors
 * @subpackage Enumerations
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
class SuccessFactorsEnumFeatureType extends SuccessFactorsWsdlClass
{
	/**
	 * Constant for value 'insert'
	 * @return string 'insert'
	 */
	const VALUE_INSERT = 'insert';
	/**
	 * Constant for value 'update'
	 * @return string 'update'
	 */
	const VALUE_UPDATE = 'update';
	/**
	 * Constant for value 'upsert'
	 * @return string 'upsert'
	 */
	const VALUE_UPSERT = 'upsert';
	/**
	 * Constant for value 'delete'
	 * @return string 'delete'
	 */
	const VALUE_DELETE = 'delete';
	/**
	 * Constant for value 'query'
	 * @return string 'query'
	 */
	const VALUE_QUERY = 'query';
	/**
	 * Constant for value 'queryMore'
	 * @return string 'queryMore'
	 */
	const VALUE_QUERYMORE = 'queryMore';
	/**
	 * Return true if value is allowed
	 * @uses SuccessFactorsEnumFeatureType::VALUE_INSERT
	 * @uses SuccessFactorsEnumFeatureType::VALUE_UPDATE
	 * @uses SuccessFactorsEnumFeatureType::VALUE_UPSERT
	 * @uses SuccessFactorsEnumFeatureType::VALUE_DELETE
	 * @uses SuccessFactorsEnumFeatureType::VALUE_QUERY
	 * @uses SuccessFactorsEnumFeatureType::VALUE_QUERYMORE
	 * @param mixed $_value value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(SuccessFactorsEnumFeatureType::VALUE_INSERT,SuccessFactorsEnumFeatureType::VALUE_UPDATE,SuccessFactorsEnumFeatureType::VALUE_UPSERT,SuccessFactorsEnumFeatureType::VALUE_DELETE,SuccessFactorsEnumFeatureType::VALUE_QUERY,SuccessFactorsEnumFeatureType::VALUE_QUERYMORE));
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
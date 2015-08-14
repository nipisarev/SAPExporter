<?php
/**
 * File for class SuccessFactorsStructDescribeResult
 * @package SuccessFactors
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
/**
 * This class stands for SuccessFactorsStructDescribeResult originally named DescribeResult
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.successfactors.eu/sfapi/v1/soap12?wsdl}
 * @package SuccessFactors
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
class SuccessFactorsStructDescribeResult extends SuccessFactorsWsdlClass
{
	/**
	 * The type
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $type;
	/**
	 * The field
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - nillable : true
	 * @var SuccessFactorsStructField
	 */
	public $field;
	/**
	 * The feature
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var SuccessFactorsEnumFeatureType
	 */
	public $feature;
	/**
	 * The error
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * - nillable : true
	 * @var SuccessFactorsStructError
	 */
	public $error;
	/**
	 * Constructor method for DescribeResult
	 * @see parent::__construct()
	 * @param string $_type
	 * @param SuccessFactorsStructField $_field
	 * @param SuccessFactorsEnumFeatureType $_feature
	 * @param SuccessFactorsStructError $_error
	 * @return SuccessFactorsStructDescribeResult
	 */
	public function __construct($_type = NULL,$_field = NULL,$_feature = NULL,$_error = NULL)
	{
		parent::__construct(array('type'=>$_type,'field'=>$_field,'feature'=>$_feature,'error'=>$_error));
	}
	/**
	 * Get type value
	 * @return string|null
	 */
	public function getType()
	{
		return $this->type;
	}
	/**
	 * Set type value
	 * @param string $_type the type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Get field value
	 * @return SuccessFactorsStructField|null
	 */
	public function getField()
	{
		return $this->field;
	}
	/**
	 * Set field value
	 * @param SuccessFactorsStructField $_field the field
	 * @return SuccessFactorsStructField
	 */
	public function setField($_field)
	{
		return ($this->field = $_field);
	}
	/**
	 * Get feature value
	 * @return SuccessFactorsEnumFeatureType|null
	 */
	public function getFeature()
	{
		return $this->feature;
	}
	/**
	 * Set feature value
	 * @uses SuccessFactorsEnumFeatureType::valueIsValid()
	 * @param SuccessFactorsEnumFeatureType $_feature the feature
	 * @return SuccessFactorsEnumFeatureType
	 */
	public function setFeature($_feature)
	{
		if(!SuccessFactorsEnumFeatureType::valueIsValid($_feature))
		{
			return false;
		}
		return ($this->feature = $_feature);
	}
	/**
	 * Get error value
	 * @return SuccessFactorsStructError|null
	 */
	public function getError()
	{
		return $this->error;
	}
	/**
	 * Set error value
	 * @param SuccessFactorsStructError $_error the error
	 * @return SuccessFactorsStructError
	 */
	public function setError($_error)
	{
		return ($this->error = $_error);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SuccessFactorsWsdlClass::__set_state()
	 * @uses SuccessFactorsWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SuccessFactorsStructDescribeResult
	 */
	public static function __set_state(array $_array,$_className = __CLASS__)
	{
		return parent::__set_state($_array,$_className);
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
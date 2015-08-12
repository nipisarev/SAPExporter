<?php
/**
 * File for class SuccessFactorsStructDescribeExResult
 * @package SuccessFactors
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
/**
 * This class stands for SuccessFactorsStructDescribeExResult originally named DescribeExResult
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.successfactors.eu/sfapi/v1/soap12?wsdl}
 * @package SuccessFactors
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
class SuccessFactorsStructDescribeExResult extends SuccessFactorsWsdlClass
{
	/**
	 * The type
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $type;
	/**
	 * The entityInfo
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var SuccessFactorsStructEntityInfo
	 */
	public $entityInfo;
	/**
	 * The field
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - nillable : true
	 * @var SuccessFactorsStructFieldEx
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
	 * Constructor method for DescribeExResult
	 * @see parent::__construct()
	 * @param string $_type
	 * @param SuccessFactorsStructEntityInfo $_entityInfo
	 * @param SuccessFactorsStructFieldEx $_field
	 * @param SuccessFactorsEnumFeatureType $_feature
	 * @param SuccessFactorsStructError $_error
	 * @return SuccessFactorsStructDescribeExResult
	 */
	public function __construct($_type = NULL,$_entityInfo = NULL,$_field = NULL,$_feature = NULL,$_error = NULL)
	{
		parent::__construct(array('type'=>$_type,'entityInfo'=>$_entityInfo,'field'=>$_field,'feature'=>$_feature,'error'=>$_error));
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
	 * Get entityInfo value
	 * @return SuccessFactorsStructEntityInfo|null
	 */
	public function getEntityInfo()
	{
		return $this->entityInfo;
	}
	/**
	 * Set entityInfo value
	 * @param SuccessFactorsStructEntityInfo $_entityInfo the entityInfo
	 * @return SuccessFactorsStructEntityInfo
	 */
	public function setEntityInfo($_entityInfo)
	{
		return ($this->entityInfo = $_entityInfo);
	}
	/**
	 * Get field value
	 * @return SuccessFactorsStructFieldEx|null
	 */
	public function getField()
	{
		return $this->field;
	}
	/**
	 * Set field value
	 * @param SuccessFactorsStructFieldEx $_field the field
	 * @return SuccessFactorsStructFieldEx
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
	 * @return SuccessFactorsStructDescribeExResult
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
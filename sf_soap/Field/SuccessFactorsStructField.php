<?php
/**
 * File for class SuccessFactorsStructField
 * @package SuccessFactors
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
/**
 * This class stands for SuccessFactorsStructField originally named Field
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.successfactors.eu/sfapi/v1/soap12?wsdl}
 * @package SuccessFactors
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
class SuccessFactorsStructField extends SuccessFactorsWsdlClass
{
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The dataType
	 * @var SuccessFactorsEnumDataType
	 */
	public $dataType;
	/**
	 * The picklist
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var SuccessFactorsStructPicklist
	 */
	public $picklist;
	/**
	 * The label
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var SuccessFactorsStructLabel
	 */
	public $label;
	/**
	 * The maxlength
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var int
	 */
	public $maxlength;
	/**
	 * The required
	 * @var boolean
	 */
	public $required;
	/**
	 * Constructor method for Field
	 * @see parent::__construct()
	 * @param string $_name
	 * @param SuccessFactorsEnumDataType $_dataType
	 * @param SuccessFactorsStructPicklist $_picklist
	 * @param SuccessFactorsStructLabel $_label
	 * @param int $_maxlength
	 * @param boolean $_required
	 * @return SuccessFactorsStructField
	 */
	public function __construct($_name = NULL,$_dataType = NULL,$_picklist = NULL,$_label = NULL,$_maxlength = NULL,$_required = NULL)
	{
		parent::__construct(array('name'=>$_name,'dataType'=>$_dataType,'picklist'=>$_picklist,'label'=>$_label,'maxlength'=>$_maxlength,'required'=>$_required));
	}
	/**
	 * Get name value
	 * @return string|null
	 */
	public function getName()
	{
		return $this->name;
	}
	/**
	 * Set name value
	 * @param string $_name the name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get dataType value
	 * @return SuccessFactorsEnumDataType|null
	 */
	public function getDataType()
	{
		return $this->dataType;
	}
	/**
	 * Set dataType value
	 * @uses SuccessFactorsEnumDataType::valueIsValid()
	 * @param SuccessFactorsEnumDataType $_dataType the dataType
	 * @return SuccessFactorsEnumDataType
	 */
	public function setDataType($_dataType)
	{
		if(!SuccessFactorsEnumDataType::valueIsValid($_dataType))
		{
			return false;
		}
		return ($this->dataType = $_dataType);
	}
	/**
	 * Get picklist value
	 * @return SuccessFactorsStructPicklist|null
	 */
	public function getPicklist()
	{
		return $this->picklist;
	}
	/**
	 * Set picklist value
	 * @param SuccessFactorsStructPicklist $_picklist the picklist
	 * @return SuccessFactorsStructPicklist
	 */
	public function setPicklist($_picklist)
	{
		return ($this->picklist = $_picklist);
	}
	/**
	 * Get label value
	 * @return SuccessFactorsStructLabel|null
	 */
	public function getLabel()
	{
		return $this->label;
	}
	/**
	 * Set label value
	 * @param SuccessFactorsStructLabel $_label the label
	 * @return SuccessFactorsStructLabel
	 */
	public function setLabel($_label)
	{
		return ($this->label = $_label);
	}
	/**
	 * Get maxlength value
	 * @return int|null
	 */
	public function getMaxlength()
	{
		return $this->maxlength;
	}
	/**
	 * Set maxlength value
	 * @param int $_maxlength the maxlength
	 * @return int
	 */
	public function setMaxlength($_maxlength)
	{
		return ($this->maxlength = $_maxlength);
	}
	/**
	 * Get required value
	 * @return boolean|null
	 */
	public function getRequired()
	{
		return $this->required;
	}
	/**
	 * Set required value
	 * @param boolean $_required the required
	 * @return boolean
	 */
	public function setRequired($_required)
	{
		return ($this->required = $_required);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SuccessFactorsWsdlClass::__set_state()
	 * @uses SuccessFactorsWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SuccessFactorsStructField
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
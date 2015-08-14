<?php
/**
 * File for class SuccessFactorsStructPicklistOption
 * @package SuccessFactors
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
/**
 * This class stands for SuccessFactorsStructPicklistOption originally named PicklistOption
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.successfactors.eu/sfapi/v1/soap12?wsdl}
 * @package SuccessFactors
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
class SuccessFactorsStructPicklistOption extends SuccessFactorsWsdlClass
{
	/**
	 * The id
	 * @var long
	 */
	public $id;
	/**
	 * The label
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var SuccessFactorsStructLabel
	 */
	public $label;
	/**
	 * The status
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $status;
	/**
	 * The value
	 * @var double
	 */
	public $value;
	/**
	 * The externalCode
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $externalCode;
	/**
	 * Constructor method for PicklistOption
	 * @see parent::__construct()
	 * @param long $_id
	 * @param SuccessFactorsStructLabel $_label
	 * @param string $_status
	 * @param double $_value
	 * @param string $_externalCode
	 * @return SuccessFactorsStructPicklistOption
	 */
	public function __construct($_id = NULL,$_label = NULL,$_status = NULL,$_value = NULL,$_externalCode = NULL)
	{
		parent::__construct(array('id'=>$_id,'label'=>$_label,'status'=>$_status,'value'=>$_value,'externalCode'=>$_externalCode));
	}
	/**
	 * Get id value
	 * @return long|null
	 */
	public function getId()
	{
		return $this->id;
	}
	/**
	 * Set id value
	 * @param long $_id the id
	 * @return long
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
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
	 * Get status value
	 * @return string|null
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set status value
	 * @param string $_status the status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get value value
	 * @return double|null
	 */
	public function getValue()
	{
		return $this->value;
	}
	/**
	 * Set value value
	 * @param double $_value the value
	 * @return double
	 */
	public function setValue($_value)
	{
		return ($this->value = $_value);
	}
	/**
	 * Get externalCode value
	 * @return string|null
	 */
	public function getExternalCode()
	{
		return $this->externalCode;
	}
	/**
	 * Set externalCode value
	 * @param string $_externalCode the externalCode
	 * @return string
	 */
	public function setExternalCode($_externalCode)
	{
		return ($this->externalCode = $_externalCode);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SuccessFactorsWsdlClass::__set_state()
	 * @uses SuccessFactorsWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SuccessFactorsStructPicklistOption
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
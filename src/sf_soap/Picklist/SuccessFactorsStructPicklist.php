<?php
/**
 * File for class SuccessFactorsStructPicklist
 * @package SuccessFactors
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
/**
 * This class stands for SuccessFactorsStructPicklist originally named Picklist
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.successfactors.eu/sfapi/v1/soap12?wsdl}
 * @package SuccessFactors
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
class SuccessFactorsStructPicklist extends SuccessFactorsWsdlClass
{
	/**
	 * The id
	 * @var string
	 */
	public $id;
	/**
	 * The source
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $source;
	/**
	 * The picklistOption
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var SuccessFactorsStructPicklistOption
	 */
	public $picklistOption;
	/**
	 * Constructor method for Picklist
	 * @see parent::__construct()
	 * @param string $_id
	 * @param string $_source
	 * @param SuccessFactorsStructPicklistOption $_picklistOption
	 * @return SuccessFactorsStructPicklist
	 */
	public function __construct($_id = NULL,$_source = NULL,$_picklistOption = NULL)
	{
		parent::__construct(array('id'=>$_id,'source'=>$_source,'picklistOption'=>$_picklistOption));
	}
	/**
	 * Get id value
	 * @return string|null
	 */
	public function getId()
	{
		return $this->id;
	}
	/**
	 * Set id value
	 * @param string $_id the id
	 * @return string
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get source value
	 * @return string|null
	 */
	public function getSource()
	{
		return $this->source;
	}
	/**
	 * Set source value
	 * @param string $_source the source
	 * @return string
	 */
	public function setSource($_source)
	{
		return ($this->source = $_source);
	}
	/**
	 * Get picklistOption value
	 * @return SuccessFactorsStructPicklistOption|null
	 */
	public function getPicklistOption()
	{
		return $this->picklistOption;
	}
	/**
	 * Set picklistOption value
	 * @param SuccessFactorsStructPicklistOption $_picklistOption the picklistOption
	 * @return SuccessFactorsStructPicklistOption
	 */
	public function setPicklistOption($_picklistOption)
	{
		return ($this->picklistOption = $_picklistOption);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SuccessFactorsWsdlClass::__set_state()
	 * @uses SuccessFactorsWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SuccessFactorsStructPicklist
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
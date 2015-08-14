<?php
/**
 * File for class SuccessFactorsStructDescribeSFObjects
 * @package SuccessFactors
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
/**
 * This class stands for SuccessFactorsStructDescribeSFObjects originally named describeSFObjects
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.successfactors.eu/sfapi/v1/soap12?wsdl}
 * @package SuccessFactors
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
class SuccessFactorsStructDescribeSFObjects extends SuccessFactorsWsdlClass
{
	/**
	 * The type
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * @var string
	 */
	public $type;
	/**
	 * The param
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var SuccessFactorsStructSFParameter
	 */
	public $param;
	/**
	 * Constructor method for describeSFObjects
	 * @see parent::__construct()
	 * @param string $_type
	 * @param SuccessFactorsStructSFParameter $_param
	 * @return SuccessFactorsStructDescribeSFObjects
	 */
	public function __construct($_type = NULL,$_param = NULL)
	{
		parent::__construct(array('type'=>$_type,'param'=>$_param));
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
	 * Get param value
	 * @return SuccessFactorsStructSFParameter|null
	 */
	public function getParam()
	{
		return $this->param;
	}
	/**
	 * Set param value
	 * @param SuccessFactorsStructSFParameter $_param the param
	 * @return SuccessFactorsStructSFParameter
	 */
	public function setParam($_param)
	{
		return ($this->param = $_param);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SuccessFactorsWsdlClass::__set_state()
	 * @uses SuccessFactorsWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SuccessFactorsStructDescribeSFObjects
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
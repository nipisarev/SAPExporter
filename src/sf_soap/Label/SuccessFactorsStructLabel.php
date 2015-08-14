<?php
/**
 * File for class SuccessFactorsStructLabel
 * @package SuccessFactors
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
/**
 * This class stands for SuccessFactorsStructLabel originally named Label
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.successfactors.eu/sfapi/v1/soap12?wsdl}
 * @package SuccessFactors
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
class SuccessFactorsStructLabel extends SuccessFactorsWsdlClass
{
	/**
	 * The value
	 * @var string
	 */
	public $value;
	/**
	 * The locale
	 * @var string
	 */
	public $locale;
	/**
	 * The mime-type
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $mime_type;
	/**
	 * Constructor method for Label
	 * @see parent::__construct()
	 * @param string $_value
	 * @param string $_locale
	 * @param string $_mime_type
	 * @return SuccessFactorsStructLabel
	 */
	public function __construct($_value = NULL,$_locale = NULL,$_mime_type = NULL)
	{
		parent::__construct(array('value'=>$_value,'locale'=>$_locale,'mime_type'=>$_mime_type));
	}
	/**
	 * Get value value
	 * @return string|null
	 */
	public function getValue()
	{
		return $this->value;
	}
	/**
	 * Set value value
	 * @param string $_value the value
	 * @return string
	 */
	public function setValue($_value)
	{
		return ($this->value = $_value);
	}
	/**
	 * Get locale value
	 * @return string|null
	 */
	public function getLocale()
	{
		return $this->locale;
	}
	/**
	 * Set locale value
	 * @param string $_locale the locale
	 * @return string
	 */
	public function setLocale($_locale)
	{
		return ($this->locale = $_locale);
	}
	/**
	 * Get mime-type value
	 * @return string|null
	 */
	public function getMime_type()
	{
		return $this->{'mime-type'};
	}
	/**
	 * Set mime-type value
	 * @param string $_mime_type the mime-type
	 * @return string
	 */
	public function setMime_type($_mime_type)
	{
		return ($this->mime_type = $this->{'mime-type'} = $_mime_type);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SuccessFactorsWsdlClass::__set_state()
	 * @uses SuccessFactorsWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SuccessFactorsStructLabel
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
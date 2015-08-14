<?php
/**
 * File for class SuccessFactorsStructQuery
 * @package SuccessFactors
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
/**
 * This class stands for SuccessFactorsStructQuery originally named query
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.successfactors.eu/sfapi/v1/soap12?wsdl}
 * @package SuccessFactors
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
class SuccessFactorsStructQuery extends SuccessFactorsWsdlClass
{
	/**
	 * The queryString
	 * @var string
	 */
	public $queryString;
	/**
	 * The param
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var SuccessFactorsStructSFParameter
	 */
	public $param;
	/**
	 * Constructor method for query
	 * @see parent::__construct()
	 * @param string $_queryString
	 * @param SuccessFactorsStructSFParameter $_param
	 * @return SuccessFactorsStructQuery
	 */
	public function __construct($_queryString = NULL,$_param = NULL)
	{
		parent::__construct(array('queryString'=>$_queryString,'param'=>$_param));
	}
	/**
	 * Get queryString value
	 * @return string|null
	 */
	public function getQueryString()
	{
		return $this->queryString;
	}
	/**
	 * Set queryString value
	 * @param string $_queryString the queryString
	 * @return string
	 */
	public function setQueryString($_queryString)
	{
		return ($this->queryString = $_queryString);
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
	 * @return SuccessFactorsStructQuery
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
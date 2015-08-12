<?php
/**
 * File for class SuccessFactorsStructInsert
 * @package SuccessFactors
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
/**
 * This class stands for SuccessFactorsStructInsert originally named insert
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.successfactors.eu/sfapi/v1/soap12?wsdl}
 * @package SuccessFactors
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
class SuccessFactorsStructInsert extends SuccessFactorsWsdlClass
{
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The sfobject
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * @var SuccessFactorsStructSFObject
	 */
	public $sfobject;
	/**
	 * The processingParam
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var SuccessFactorsStructSFParameter
	 */
	public $processingParam;
	/**
	 * Constructor method for insert
	 * @see parent::__construct()
	 * @param string $_type
	 * @param SuccessFactorsStructSFObject $_sfobject
	 * @param SuccessFactorsStructSFParameter $_processingParam
	 * @return SuccessFactorsStructInsert
	 */
	public function __construct($_type = NULL,$_sfobject = NULL,$_processingParam = NULL)
	{
		parent::__construct(array('type'=>$_type,'sfobject'=>$_sfobject,'processingParam'=>$_processingParam));
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
	 * Get sfobject value
	 * @return SuccessFactorsStructSFObject|null
	 */
	public function getSfobject()
	{
		return $this->sfobject;
	}
	/**
	 * Set sfobject value
	 * @param SuccessFactorsStructSFObject $_sfobject the sfobject
	 * @return SuccessFactorsStructSFObject
	 */
	public function setSfobject($_sfobject)
	{
		return ($this->sfobject = $_sfobject);
	}
	/**
	 * Get processingParam value
	 * @return SuccessFactorsStructSFParameter|null
	 */
	public function getProcessingParam()
	{
		return $this->processingParam;
	}
	/**
	 * Set processingParam value
	 * @param SuccessFactorsStructSFParameter $_processingParam the processingParam
	 * @return SuccessFactorsStructSFParameter
	 */
	public function setProcessingParam($_processingParam)
	{
		return ($this->processingParam = $_processingParam);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SuccessFactorsWsdlClass::__set_state()
	 * @uses SuccessFactorsWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SuccessFactorsStructInsert
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
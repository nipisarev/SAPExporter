<?php
/**
 * File for class SuccessFactorsStructObjectEditResult
 * @package SuccessFactors
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
/**
 * This class stands for SuccessFactorsStructObjectEditResult originally named ObjectEditResult
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.successfactors.eu/sfapi/v1/soap12?wsdl}
 * @package SuccessFactors
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
class SuccessFactorsStructObjectEditResult extends SuccessFactorsWsdlClass
{
	/**
	 * The id
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $id;
	/**
	 * The errorStatus
	 * @var string
	 */
	public $errorStatus;
	/**
	 * The editStatus
	 * @var string
	 */
	public $editStatus;
	/**
	 * The index
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $index;
	/**
	 * The message
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $message;
	/**
	 * Constructor method for ObjectEditResult
	 * @see parent::__construct()
	 * @param string $_id
	 * @param string $_errorStatus
	 * @param string $_editStatus
	 * @param int $_index
	 * @param string $_message
	 * @return SuccessFactorsStructObjectEditResult
	 */
	public function __construct($_id = NULL,$_errorStatus = NULL,$_editStatus = NULL,$_index = NULL,$_message = NULL)
	{
		parent::__construct(array('id'=>$_id,'errorStatus'=>$_errorStatus,'editStatus'=>$_editStatus,'index'=>$_index,'message'=>$_message));
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
	 * Get errorStatus value
	 * @return string|null
	 */
	public function getErrorStatus()
	{
		return $this->errorStatus;
	}
	/**
	 * Set errorStatus value
	 * @param string $_errorStatus the errorStatus
	 * @return string
	 */
	public function setErrorStatus($_errorStatus)
	{
		return ($this->errorStatus = $_errorStatus);
	}
	/**
	 * Get editStatus value
	 * @return string|null
	 */
	public function getEditStatus()
	{
		return $this->editStatus;
	}
	/**
	 * Set editStatus value
	 * @param string $_editStatus the editStatus
	 * @return string
	 */
	public function setEditStatus($_editStatus)
	{
		return ($this->editStatus = $_editStatus);
	}
	/**
	 * Get index value
	 * @return int|null
	 */
	public function getIndex()
	{
		return $this->index;
	}
	/**
	 * Set index value
	 * @param int $_index the index
	 * @return int
	 */
	public function setIndex($_index)
	{
		return ($this->index = $_index);
	}
	/**
	 * Get message value
	 * @return string|null
	 */
	public function getMessage()
	{
		return $this->message;
	}
	/**
	 * Set message value
	 * @param string $_message the message
	 * @return string
	 */
	public function setMessage($_message)
	{
		return ($this->message = $_message);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SuccessFactorsWsdlClass::__set_state()
	 * @uses SuccessFactorsWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SuccessFactorsStructObjectEditResult
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
<?php
/**
 * File for class SuccessFactorsStructInsertResult
 * @package SuccessFactors
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
/**
 * This class stands for SuccessFactorsStructInsertResult originally named InsertResult
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.successfactors.eu/sfapi/v1/soap12?wsdl}
 * @package SuccessFactors
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
class SuccessFactorsStructInsertResult extends SuccessFactorsWsdlClass
{
	/**
	 * The jobStatus
	 * @var string
	 */
	public $jobStatus;
	/**
	 * The message
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $message;
	/**
	 * The objectEditResult
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * - nillable : true
	 * @var SuccessFactorsStructObjectEditResult
	 */
	public $objectEditResult;
	/**
	 * Constructor method for InsertResult
	 * @see parent::__construct()
	 * @param string $_jobStatus
	 * @param string $_message
	 * @param SuccessFactorsStructObjectEditResult $_objectEditResult
	 * @return SuccessFactorsStructInsertResult
	 */
	public function __construct($_jobStatus = NULL,$_message = NULL,$_objectEditResult = NULL)
	{
		parent::__construct(array('jobStatus'=>$_jobStatus,'message'=>$_message,'objectEditResult'=>$_objectEditResult));
	}
	/**
	 * Get jobStatus value
	 * @return string|null
	 */
	public function getJobStatus()
	{
		return $this->jobStatus;
	}
	/**
	 * Set jobStatus value
	 * @param string $_jobStatus the jobStatus
	 * @return string
	 */
	public function setJobStatus($_jobStatus)
	{
		return ($this->jobStatus = $_jobStatus);
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
	 * Get objectEditResult value
	 * @return SuccessFactorsStructObjectEditResult|null
	 */
	public function getObjectEditResult()
	{
		return $this->objectEditResult;
	}
	/**
	 * Set objectEditResult value
	 * @param SuccessFactorsStructObjectEditResult $_objectEditResult the objectEditResult
	 * @return SuccessFactorsStructObjectEditResult
	 */
	public function setObjectEditResult($_objectEditResult)
	{
		return ($this->objectEditResult = $_objectEditResult);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SuccessFactorsWsdlClass::__set_state()
	 * @uses SuccessFactorsWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SuccessFactorsStructInsertResult
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
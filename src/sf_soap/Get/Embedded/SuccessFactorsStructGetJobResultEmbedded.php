<?php
/**
 * File for class SuccessFactorsStructGetJobResultEmbedded
 * @package SuccessFactors
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
/**
 * This class stands for SuccessFactorsStructGetJobResultEmbedded originally named getJobResultEmbedded
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.successfactors.eu/sfapi/v1/soap12?wsdl}
 * @package SuccessFactors
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
class SuccessFactorsStructGetJobResultEmbedded extends SuccessFactorsWsdlClass
{
	/**
	 * The taskId
	 * @var string
	 */
	public $taskId;
	/**
	 * Constructor method for getJobResultEmbedded
	 * @see parent::__construct()
	 * @param string $_taskId
	 * @return SuccessFactorsStructGetJobResultEmbedded
	 */
	public function __construct($_taskId = NULL)
	{
		parent::__construct(array('taskId'=>$_taskId));
	}
	/**
	 * Get taskId value
	 * @return string|null
	 */
	public function getTaskId()
	{
		return $this->taskId;
	}
	/**
	 * Set taskId value
	 * @param string $_taskId the taskId
	 * @return string
	 */
	public function setTaskId($_taskId)
	{
		return ($this->taskId = $_taskId);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SuccessFactorsWsdlClass::__set_state()
	 * @uses SuccessFactorsWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SuccessFactorsStructGetJobResultEmbedded
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
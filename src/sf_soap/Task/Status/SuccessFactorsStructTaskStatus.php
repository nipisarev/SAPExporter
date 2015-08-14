<?php
/**
 * File for class SuccessFactorsStructTaskStatus
 * @package SuccessFactors
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
/**
 * This class stands for SuccessFactorsStructTaskStatus originally named TaskStatus
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.successfactors.eu/sfapi/v1/soap12?wsdl}
 * @package SuccessFactors
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
class SuccessFactorsStructTaskStatus extends SuccessFactorsWsdlClass
{
	/**
	 * The taskId
	 * @var string
	 */
	public $taskId;
	/**
	 * The taskName
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $taskName;
	/**
	 * The createDate
	 * @var string
	 */
	public $createDate;
	/**
	 * The status
	 * @var SuccessFactorsEnumTaskStatusEnum
	 */
	public $status;
	/**
	 * The taskResult
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var SuccessFactorsStructTaskResultStatus
	 */
	public $taskResult;
	/**
	 * Constructor method for TaskStatus
	 * @see parent::__construct()
	 * @param string $_taskId
	 * @param string $_taskName
	 * @param string $_createDate
	 * @param SuccessFactorsEnumTaskStatusEnum $_status
	 * @param SuccessFactorsStructTaskResultStatus $_taskResult
	 * @return SuccessFactorsStructTaskStatus
	 */
	public function __construct($_taskId = NULL,$_taskName = NULL,$_createDate = NULL,$_status = NULL,$_taskResult = NULL)
	{
		parent::__construct(array('taskId'=>$_taskId,'taskName'=>$_taskName,'createDate'=>$_createDate,'status'=>$_status,'taskResult'=>$_taskResult));
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
	 * Get taskName value
	 * @return string|null
	 */
	public function getTaskName()
	{
		return $this->taskName;
	}
	/**
	 * Set taskName value
	 * @param string $_taskName the taskName
	 * @return string
	 */
	public function setTaskName($_taskName)
	{
		return ($this->taskName = $_taskName);
	}
	/**
	 * Get createDate value
	 * @return string|null
	 */
	public function getCreateDate()
	{
		return $this->createDate;
	}
	/**
	 * Set createDate value
	 * @param string $_createDate the createDate
	 * @return string
	 */
	public function setCreateDate($_createDate)
	{
		return ($this->createDate = $_createDate);
	}
	/**
	 * Get status value
	 * @return SuccessFactorsEnumTaskStatusEnum|null
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set status value
	 * @uses SuccessFactorsEnumTaskStatusEnum::valueIsValid()
	 * @param SuccessFactorsEnumTaskStatusEnum $_status the status
	 * @return SuccessFactorsEnumTaskStatusEnum
	 */
	public function setStatus($_status)
	{
		if(!SuccessFactorsEnumTaskStatusEnum::valueIsValid($_status))
		{
			return false;
		}
		return ($this->status = $_status);
	}
	/**
	 * Get taskResult value
	 * @return SuccessFactorsStructTaskResultStatus|null
	 */
	public function getTaskResult()
	{
		return $this->taskResult;
	}
	/**
	 * Set taskResult value
	 * @param SuccessFactorsStructTaskResultStatus $_taskResult the taskResult
	 * @return SuccessFactorsStructTaskResultStatus
	 */
	public function setTaskResult($_taskResult)
	{
		return ($this->taskResult = $_taskResult);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SuccessFactorsWsdlClass::__set_state()
	 * @uses SuccessFactorsWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SuccessFactorsStructTaskStatus
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
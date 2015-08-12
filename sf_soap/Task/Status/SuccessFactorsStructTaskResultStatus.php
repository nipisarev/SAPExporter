<?php
/**
 * File for class SuccessFactorsStructTaskResultStatus
 * @package SuccessFactors
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
/**
 * This class stands for SuccessFactorsStructTaskResultStatus originally named TaskResultStatus
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.successfactors.eu/sfapi/v1/soap12?wsdl}
 * @package SuccessFactors
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
class SuccessFactorsStructTaskResultStatus extends SuccessFactorsWsdlClass
{
	/**
	 * The taskResultId
	 * @var string
	 */
	public $taskResultId;
	/**
	 * The lastFinishTime
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $lastFinishTime;
	/**
	 * The lastStartTime
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $lastStartTime;
	/**
	 * The validUntil
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $validUntil;
	/**
	 * The errorCode
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $errorCode;
	/**
	 * The message
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $message;
	/**
	 * The status
	 * @var SuccessFactorsEnumTaskResultStatusEnum
	 */
	public $status;
	/**
	 * Constructor method for TaskResultStatus
	 * @see parent::__construct()
	 * @param string $_taskResultId
	 * @param string $_lastFinishTime
	 * @param string $_lastStartTime
	 * @param string $_validUntil
	 * @param string $_errorCode
	 * @param string $_message
	 * @param SuccessFactorsEnumTaskResultStatusEnum $_status
	 * @return SuccessFactorsStructTaskResultStatus
	 */
	public function __construct($_taskResultId = NULL,$_lastFinishTime = NULL,$_lastStartTime = NULL,$_validUntil = NULL,$_errorCode = NULL,$_message = NULL,$_status = NULL)
	{
		parent::__construct(array('taskResultId'=>$_taskResultId,'lastFinishTime'=>$_lastFinishTime,'lastStartTime'=>$_lastStartTime,'validUntil'=>$_validUntil,'errorCode'=>$_errorCode,'message'=>$_message,'status'=>$_status));
	}
	/**
	 * Get taskResultId value
	 * @return string|null
	 */
	public function getTaskResultId()
	{
		return $this->taskResultId;
	}
	/**
	 * Set taskResultId value
	 * @param string $_taskResultId the taskResultId
	 * @return string
	 */
	public function setTaskResultId($_taskResultId)
	{
		return ($this->taskResultId = $_taskResultId);
	}
	/**
	 * Get lastFinishTime value
	 * @return string|null
	 */
	public function getLastFinishTime()
	{
		return $this->lastFinishTime;
	}
	/**
	 * Set lastFinishTime value
	 * @param string $_lastFinishTime the lastFinishTime
	 * @return string
	 */
	public function setLastFinishTime($_lastFinishTime)
	{
		return ($this->lastFinishTime = $_lastFinishTime);
	}
	/**
	 * Get lastStartTime value
	 * @return string|null
	 */
	public function getLastStartTime()
	{
		return $this->lastStartTime;
	}
	/**
	 * Set lastStartTime value
	 * @param string $_lastStartTime the lastStartTime
	 * @return string
	 */
	public function setLastStartTime($_lastStartTime)
	{
		return ($this->lastStartTime = $_lastStartTime);
	}
	/**
	 * Get validUntil value
	 * @return string|null
	 */
	public function getValidUntil()
	{
		return $this->validUntil;
	}
	/**
	 * Set validUntil value
	 * @param string $_validUntil the validUntil
	 * @return string
	 */
	public function setValidUntil($_validUntil)
	{
		return ($this->validUntil = $_validUntil);
	}
	/**
	 * Get errorCode value
	 * @return string|null
	 */
	public function getErrorCode()
	{
		return $this->errorCode;
	}
	/**
	 * Set errorCode value
	 * @param string $_errorCode the errorCode
	 * @return string
	 */
	public function setErrorCode($_errorCode)
	{
		return ($this->errorCode = $_errorCode);
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
	 * Get status value
	 * @return SuccessFactorsEnumTaskResultStatusEnum|null
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set status value
	 * @uses SuccessFactorsEnumTaskResultStatusEnum::valueIsValid()
	 * @param SuccessFactorsEnumTaskResultStatusEnum $_status the status
	 * @return SuccessFactorsEnumTaskResultStatusEnum
	 */
	public function setStatus($_status)
	{
		if(!SuccessFactorsEnumTaskResultStatusEnum::valueIsValid($_status))
		{
			return false;
		}
		return ($this->status = $_status);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SuccessFactorsWsdlClass::__set_state()
	 * @uses SuccessFactorsWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SuccessFactorsStructTaskResultStatus
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
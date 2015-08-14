<?php
/**
 * File for class SuccessFactorsStructSFCredential
 * @package SuccessFactors
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
/**
 * This class stands for SuccessFactorsStructSFCredential originally named SFCredential
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.successfactors.eu/sfapi/v1/soap12?wsdl}
 * @package SuccessFactors
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
class SuccessFactorsStructSFCredential extends SuccessFactorsWsdlClass
{
	/**
	 * The companyId
	 * @var string
	 */
	public $companyId;
	/**
	 * The username
	 * @var string
	 */
	public $username;
	/**
	 * The password
	 * @var string
	 */
	public $password;
	/**
	 * The developerKey
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var string
	 */
	public $developerKey;
	/**
	 * Constructor method for SFCredential
	 * @see parent::__construct()
	 * @param string $_companyId
	 * @param string $_username
	 * @param string $_password
	 * @param string $_developerKey
	 * @return SuccessFactorsStructSFCredential
	 */
	public function __construct($_companyId = NULL,$_username = NULL,$_password = NULL,$_developerKey = NULL)
	{
		parent::__construct(array('companyId'=>$_companyId,'username'=>$_username,'password'=>$_password,'developerKey'=>$_developerKey));
	}
	/**
	 * Get companyId value
	 * @return string|null
	 */
	public function getCompanyId()
	{
		return $this->companyId;
	}
	/**
	 * Set companyId value
	 * @param string $_companyId the companyId
	 * @return string
	 */
	public function setCompanyId($_companyId)
	{
		return ($this->companyId = $_companyId);
	}
	/**
	 * Get username value
	 * @return string|null
	 */
	public function getUsername()
	{
		return $this->username;
	}
	/**
	 * Set username value
	 * @param string $_username the username
	 * @return string
	 */
	public function setUsername($_username)
	{
		return ($this->username = $_username);
	}
	/**
	 * Get password value
	 * @return string|null
	 */
	public function getPassword()
	{
		return $this->password;
	}
	/**
	 * Set password value
	 * @param string $_password the password
	 * @return string
	 */
	public function setPassword($_password)
	{
		return ($this->password = $_password);
	}
	/**
	 * Get developerKey value
	 * @return string|null
	 */
	public function getDeveloperKey()
	{
		return $this->developerKey;
	}
	/**
	 * Set developerKey value
	 * @param string $_developerKey the developerKey
	 * @return string
	 */
	public function setDeveloperKey($_developerKey)
	{
		return ($this->developerKey = $_developerKey);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SuccessFactorsWsdlClass::__set_state()
	 * @uses SuccessFactorsWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SuccessFactorsStructSFCredential
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
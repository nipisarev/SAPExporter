<?php
/**
 * File for class SuccessFactorsStructQueryResult
 * @package SuccessFactors
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
/**
 * This class stands for SuccessFactorsStructQueryResult originally named QueryResult
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.successfactors.eu/sfapi/v1/soap12?wsdl}
 * @package SuccessFactors
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
class SuccessFactorsStructQueryResult extends SuccessFactorsWsdlClass
{
	/**
	 * The sfobject
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : unbounded
	 * - minOccurs : 0
	 * @var SuccessFactorsStructSFObject
	 */
	public $sfobject;
	/**
	 * The numResults
	 * @var int
	 */
	public $numResults;
	/**
	 * The hasMore
	 * @var boolean
	 */
	public $hasMore;
	/**
	 * The querySessionId
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $querySessionId;
	/**
	 * Constructor method for QueryResult
	 * @see parent::__construct()
	 * @param SuccessFactorsStructSFObject $_sfobject
	 * @param int $_numResults
	 * @param boolean $_hasMore
	 * @param string $_querySessionId
	 * @return SuccessFactorsStructQueryResult
	 */
	public function __construct($_sfobject = NULL,$_numResults = NULL,$_hasMore = NULL,$_querySessionId = NULL)
	{
		parent::__construct(array('sfobject'=>$_sfobject,'numResults'=>$_numResults,'hasMore'=>$_hasMore,'querySessionId'=>$_querySessionId));
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
	 * Get numResults value
	 * @return int|null
	 */
	public function getNumResults()
	{
		return $this->numResults;
	}
	/**
	 * Set numResults value
	 * @param int $_numResults the numResults
	 * @return int
	 */
	public function setNumResults($_numResults)
	{
		return ($this->numResults = $_numResults);
	}
	/**
	 * Get hasMore value
	 * @return boolean|null
	 */
	public function getHasMore()
	{
		return $this->hasMore;
	}
	/**
	 * Set hasMore value
	 * @param boolean $_hasMore the hasMore
	 * @return boolean
	 */
	public function setHasMore($_hasMore)
	{
		return ($this->hasMore = $_hasMore);
	}
	/**
	 * Get querySessionId value
	 * @return string|null
	 */
	public function getQuerySessionId()
	{
		return $this->querySessionId;
	}
	/**
	 * Set querySessionId value
	 * @param string $_querySessionId the querySessionId
	 * @return string
	 */
	public function setQuerySessionId($_querySessionId)
	{
		return ($this->querySessionId = $_querySessionId);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SuccessFactorsWsdlClass::__set_state()
	 * @uses SuccessFactorsWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SuccessFactorsStructQueryResult
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
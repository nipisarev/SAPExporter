<?php
/**
 * File for class SuccessFactorsStructSFObject
 * @package SuccessFactors
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
/**
 * This class stands for SuccessFactorsStructSFObject originally named SFObject
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://api.successfactors.eu/sfapi/v1/soap12?wsdl}
 * @package SuccessFactors
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
class SuccessFactorsStructSFObject extends SuccessFactorsWsdlClass
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
	 * The businessKeys
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 0
	 * @var SuccessFactorsStructBusinessKeys
	 */
	public $businessKeys;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor method for SFObject
	 * @see parent::__construct()
	 * @param string $_id
	 * @param SuccessFactorsStructBusinessKeys $_businessKeys
	 * @param string $_type
	 * @param DOMDocument $_any
	 * @return SuccessFactorsStructSFObject
	 */
	public function __construct($_id = NULL,$_businessKeys = NULL,$_type = NULL,$_any = NULL)
	{
		parent::__construct(array('id'=>$_id,'businessKeys'=>$_businessKeys,'type'=>$_type,'any'=>$_any));
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
	 * Get businessKeys value
	 * @return SuccessFactorsStructBusinessKeys|null
	 */
	public function getBusinessKeys()
	{
		return $this->businessKeys;
	}
	/**
	 * Set businessKeys value
	 * @param SuccessFactorsStructBusinessKeys $_businessKeys the businessKeys
	 * @return SuccessFactorsStructBusinessKeys
	 */
	public function setBusinessKeys($_businessKeys)
	{
		return ($this->businessKeys = $_businessKeys);
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
	 * Get any value
	 * @uses DOMDocument::loadXML()
	 * @uses DOMDocument::hasChildNodes()
	 * @uses DOMDocument::saveXML()
	 * @uses DOMNode::item()
	 * @uses SuccessFactorsStructSFObject::setAny()
	 * @param bool true or false whether to return XML value as string or as DOMDocument
	 * @return DOMDocument|null
	 */
	public function getAny($_asString = true)
	{
		if(!empty($this->any) && !($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			if($dom->loadXML($this->any))
			{
				$this->setAny($dom);
			}
			unset($dom);
		}
		return ($_asString && ($this->any instanceof DOMDocument) && $this->any->hasChildNodes())?$this->any->saveXML($this->any->childNodes->item(0)):$this->any;
	}
	/**
	 * Set any value
	 * @param DOMDocument $_any the any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see SuccessFactorsWsdlClass::__set_state()
	 * @uses SuccessFactorsWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return SuccessFactorsStructSFObject
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
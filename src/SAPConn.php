<?php
/**
 * Created by PhpStorm.
 * User: n.pisarev
 */

class SAPConn {

    private $credential = [];
    private $wsdl = [];

    /**
     * @param $companyId
     * @param $username
     * @param $password
     * @param $link
     */
    public function __construct($companyId, $username, $password, $link){

        $this->credential['companyId'] = $companyId;
        $this->credential['username']  = $username;
        $this->credential['password']  = $password;
        $this->credential['link']      = $link;


        $this->wsdl[SuccessFactorsWsdlClass::WSDL_URL]            = $this->credential['link'];
        $this->wsdl[SuccessFactorsWsdlClass::WSDL_CACHE_WSDL]     = WSDL_CACHE_NONE;
        $this->wsdl[SuccessFactorsWsdlClass::WSDL_TRACE]          = true;
        $this->wsdl[SuccessFactorsWsdlClass::WSDL_LOGIN]          = $this->credential['username'];
        $this->wsdl[SuccessFactorsWsdlClass::WSDL_PASSWD]         = $this->credential['password'];
        $this->wsdl[SuccessFactorsWsdlClass::WSDL_SOAP_VERSION]   = 'SOAP_1_1';

    }

    public function get( $property ){

        if (property_exists( $this, $property )) {
            return $this->$property;
        } else {
            return "not found this $property";
        }

    }
}
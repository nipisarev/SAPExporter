<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 15.08.2015
 * Time: 16:15
 */
require_once 'src/Exporter.php';
require_once 'vendor/autoload.php';

class SAPConnTest extends PHPUnit_Framework_TestCase {

    private $connector;

    public function setUp(){
        $this->connector = new SAPConn('C00****9T1', 'sfadmin', 'sfpass', 'https://api.successfactors.eu/sfapi/v1/soap?wsdl');
    }

    public function tearDown(){
    }

    public function testGetObject(){
        $wsdl = $this->connector->get('wsdl');
        $this->assertEquals($wsdl['wsdl_url'], 'https://api.successfactors.eu/sfapi/v1/soap?wsdl');
        $this->assertEquals($wsdl['wsdl_login'], 'sfadmin');
        $this->assertEquals($wsdl['wsdl_password'], 'sfpass');
    }

}
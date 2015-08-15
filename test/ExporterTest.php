<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 15.08.2015
 * Time: 16:15
 */
require_once 'src/Exporter.php';
require_once 'vendor/autoload.php';

class ExporterTest extends PHPUnit_Framework_TestCase {
    private $connector;
    private $user;
    private $sfObj;

    public function setUp(){
        date_default_timezone_set( 'Europe/Moscow' );
        $today = date('Y-m-d');

        $this->connector  = new SAPConn('C00****9T1', 'sfadmin', 'sfpass', 'https://api.successfactors.eu/sfapi/v1/soap?wsdl');
        $this->user       = new SAPUser('1', 'Ivan', 'Petrov', 'Andreevich', 'nipisarev@mail.ru', '18.07.1985', '10801');
        $this->sfObj      = new SAPObj($this->user, 'ivanov', 'petrov', 'sidorov', $today);
    }

    public function tearDown(){
    }

    public function testInitConnect(){
        $this->setExpectedException('Exception');
        Exporter::pull($this->sfObj->build(), $this->connector);
    }
}
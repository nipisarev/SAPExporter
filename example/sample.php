<?php require_once('../src/Exporter.php');

date_default_timezone_set( 'Europe/Moscow' );
$today = date('Y-m-d');
$log = array();

ini_set( 'memory_limit'   , '512M' );
ini_set( 'display_errors' , true );
error_reporting(-1);

$connector  = new SAPConn('C00****9T1', 'sfadmin', 'sfpass', 'https://api.successfactors.eu/sfapi/v1/soap?wsdl');
$user       = new SAPUser('1', 'Ivan', 'Petrov', 'Andreevich', 'nipisarev@mail.ru', '18.07.1985', '10801');
$sfObj      = new SAPObj($user, 'ivanov', 'petrov', 'sidorov', $today);

var_dump( Exporter::pull($sfObj->build(),$connector) );
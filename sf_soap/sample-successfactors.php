<?php
/**
 * Test with SuccessFactors
 * @package SuccessFactors
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
ini_set('memory_limit','512M');
ini_set('display_errors', true);
error_reporting(1);
/**
 * Load autoload
 */
require_once dirname(__FILE__) . '/SuccessFactorsAutoload.php';
/**
 * SuccessFactors Informations
 */
define('SUCCESSFACTORS_WSDL_URL','https://api012.successfactors.eu/sfapi/v1/soap?wsdl');
/**
 * Wsdl instanciation infos
 */
$wsdl = array();
$wsdl[SuccessFactorsWsdlClass::WSDL_URL] = SUCCESSFACTORS_WSDL_URL;
$wsdl[SuccessFactorsWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
$wsdl[SuccessFactorsWsdlClass::WSDL_TRACE] = true;


$credential =  array('companyId'=>'C0019685199T1',
                          'username'=>'SFADMIN',
                          'password'=>'SFADMIN123');


$sfobject = array('type' => 'user',
				'externalId' => 'test@email.ru',
				'status' => 'ACTIVE',
				'username' => 'test@email.ru',
				'firstName' => 'test',
				'lastName' => 'test',
				'middleName' => 'test',
				'email' => 'test@email.ru',
				'managerExternalId' => 'NO_MANAGER',
				'hrExternalId' => 'NO_HR',
				'hireDate' => '2001-01-01',
				'country' => '3174',
				'state' => 'N/A ',
				'city' => 'N/A',
				'defaultLocale' => 'ru_RU',
				'custom03' => '2896',
				'custom04' => 'N/A',
				'custom05' => 'N/A',
				'custom06' => 'N/A',
				'custom08' => 'N/A',
				'custom09' => '3261');


/****************************************
 * Example for SuccessFactorsServiceLogin
 */
$successFactorsServiceLogin = new SuccessFactorsServiceLogin($wsdl);
// sample call for SuccessFactorsServiceLogin::login()
if($successFactorsServiceLogin->login(new SuccessFactorsStructLogin($credential))){
	echo '<pre>';
	print_r($successFactorsServiceLogin->getResult());
	echo '</pre>';

	
} else {	
	echo '<pre>';
	print_r($successFactorsServiceLogin->getLastError());
	echo '</pre>';
}


/*****************************************
 * Example for SuccessFactorsServiceUpsert
 */
$successFactorsServiceUpsert = new SuccessFactorsServiceUpsert($wsdl);
// sample call for SuccessFactorsServiceUpsert::upsert()
if($successFactorsServiceUpsert->upsert(new SuccessFactorsStructUpsert('user', $sfobject))) {
	echo '<pre>';
	print_r($successFactorsServiceUpsert->getResult());
	echo '</pre>';
} else {
	echo '<pre>';
	print_r($successFactorsServiceUpsert->getLastError());
	echo '</pre>';
}

<?php
/**
 * Created by PhpStorm.
 * User: n.pisarev
 */
require_once 'sf_soap/SuccessFactorsAutoload.php';
require_once 'SAPUser.php';
require_once 'SAPConn.php';
require_once 'SAPObj.php';

class Exporter {

    private static $log;

    /**
     * Статитеческий метод экспорта Export::pull( SFObject, Connector)
     *  последовательно:
     *  - логинимся
     *  - передаем пользователя
     *  - разлогиниваемся
     *
     * @param SuccessFactorsStructSFObject $SFObject
     * @param SAPConn $conn
     * @return mixed
     */
    public static function pull( SuccessFactorsStructSFObject $SFObject, SAPConn $conn){

        //login
        $successFactorsServiceLogin = new SuccessFactorsServiceLogin( $conn->get('wsdl') );

        if( !( $successFactorsServiceLogin->login( new SuccessFactorsStructLogin( $conn->get('credential') ) ) ) )
            self::$log = $successFactorsServiceLogin->getLastError();

        //export
        $successFactorsServiceUpsert = new SuccessFactorsServiceUpsert( $conn->get('credential') );

        if( $successFactorsServiceUpsert->upsert( new SuccessFactorsStructUpsert( 'user', $SFObject ) ) ) {
            self::$log = $successFactorsServiceUpsert->getResult();
        } else {
            self::$log = $successFactorsServiceUpsert->getLastError();
        }

        //logout
        $successFactorsServiceLogout = new SuccessFactorsServiceLogout( $conn->get('credential') );

        if( !( $successFactorsServiceLogout->logout() ) )
            self::$log = $successFactorsServiceLogout->getLastError();

        return self::$log;
    }

    /**
     * TODO
     *  Создать метод оповещения to email/print/file
     *  - о статусе операции
     *  - информацию о созданном пользователе
     */

    
}
<?php
/**
 * Created by PhpStorm.
 * User: n.pisarev
 */

class SAPUser {

    private $id;
    private $firstName;
    private $lastName;
    private $middleName;
    private $email;
    private $DOB;
    private $subject;

    /**
     * @param $user_id
     * @param $firstname
     * @param $lastname
     * @param $middleName
     * @param $email
     * @param $dob
     * @param $subject
     */
    public function __construct( $user_id, $firstname, $lastname, $middleName, $email, $dob, $subject ){

        $this->id         = $user_id;
        $this->firstName  = $firstname;
        $this->lastName   = $lastname;
        $this->middleName = $middleName;
        $this->email      = $email;
        $this->DOB        = $dob;
        $this->subject    = $subject;

    }

    /**
     * @param $property
     * @return string
     */
    public function get( $property ){

        if (property_exists( $this, $property )) {
            return $this->$property;
        } else {
            return "not found this $property";
        }

    }

}
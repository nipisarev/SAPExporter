<?php require_once ROOT_PATH.'/sf_soap/SuccessFactorsAutoload.php';

class UserInf {

    private $userId;
    private $userFirstName;
    private $userLastName;
    private $userMiName;
    private $userEmail;
    private $userDOB;
    private $userTema;

    public function __constructor( $user_id, $firstname, $fullname, $patronymic, $email, $dob, $tema ){

        $this->userId         = $user_id;
        $this->userFirstName  = $firstname;
        $this->userLastName   = $fullname;
        $this->userMiName     = $patronymic;
        $this->userEmail      = $email;
        $this->userDOB        = $dob;
        $this->userTema       = $tema;

    }

    public function __get( $property ){

        if (property_exists( $this, $property )) {
            return $this->$property;
        } else {
            return "not found this $property";
        }

    }

}
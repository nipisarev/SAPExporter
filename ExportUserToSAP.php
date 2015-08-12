<?php require_once ROOT_PATH.'/sf_soap/UserInf.php';

class ExportUserToSAP {

    private $hr;
    private $manager;
    private $credential;
    private $date_reg;
    private $matrixManager;
    private $wsdl;

    public function __constructor( $credential, $user, $hr, $manager, $matrixManager, $date_reg, $wsdl )
    {
        $this->credential     = $credential;
        $this->hr             = $hr;
        $this->manager        = $manager;
        $this->matrixManager  = $matrixManager;
        $this->date_reg       = $date_reg;
        $this->wsdl           = $wsdl;

        /**
         * [$body - create xml-code for $SFObject]
         *
         * @var string
         */
        $body  = "<externalId>".$user->get('userEmail')."</externalId>";
        $body .= "<status>ACTIVE</status>";
        $body .= "<username>".$user->get('userEmail')."</username>";
        $body .= "<dateOfBirth>".$user->get('userDOB')."</dateOfBirth>";
        $body .= "<firstName>".$user->get('userFirstNam')e."</firstName>";
        $body .= "<lastName>".$user->get('userLastName')."</lastName>";
        $body .= "<mi>".$user->get('userMiName')."</mi>";
        $body .= "<email>".$user->get('userEmail')."</email>";
        $body .= "<managerExternalId>".$this->manager."</managerExternalId>";
        $body .= "<hrExternalId>".$this->hr."</hrExternalId>";
        $body .= "<newToPosition>false</newToPosition>";
        $body .= "<hireDate>".$this->date_reg."</hireDate>";
        $body .= "<country>3174</country>"; //russia
        $body .= "<state>N/A</state>";
        $body .= "<city>N/A</city>";
        $body .= "<defaultLocale>ru_RU</defaultLocale>";
        $body .= "<companyExitDate>9999-12-31</companyExitDate>"; //temporary fix
        $body .= "<custom03>".$user->get('userTema')."</custom03>";
        $body .= "<custom04>N/A</custom04>";
        $body .= "<custom05>N/A</custom05>";
        $body .= "<custom06>N/A</custom06>";
        $body .= "<custom07>N/A</custom07>";
        $body .= "<custom08>N/A</custom08>";
        $body .= "<custom09>3261</custom09>";
        $body .= "<matrixManagerExternalIds>".$this->matrixManager."</matrixManagerExternalIds>";

        //initialize SFObject - set type and
        $SFObject = new SuccessFactorsStructSFObject();
        $SFObject->setType( 'user' );
        $SFObject->setAny( $body );

        return $SFObject;

    }


    
}
<?php

class SAPObj
{
    private $data = [
        'hr',
        'manager',
        'date_reg',
        'matrixManager',
    ];
    private $body;

    /**
     * @param SAPUser $user
     * @param $hr
     * @param $manager
     * @param $matrixManager
     * @param $date_reg
     */
    public function __construct(SAPUser $user, $hr, $manager, $matrixManager, $date_reg)
    {
        $this->data['hr'] = $hr;
        $this->data['manager'] = $manager;
        $this->data['matrixManager'] = $matrixManager;
        $this->data['date_reg'] = $date_reg;

        $attr = [
            'externalId' => $user->get('id'),
            'status' => 'ACTIVE',
            'username' => $user->get('email'),
            'dateOfBirth' => $user->get('DOB'),
            'firstName' => $user->get('firstName'),
            'lastName' => $user->get('lastName'),
            'mi' => $user->get('middleName'),
            'email' => $user->get('email'),
            'managerExternalId' => $this->data['manager'],
            'hrExternalId' => $this->data['hr'],
            'newToPosition' => 'false',
            'hireDate' => $this->data['date_reg'],
            'country' => '3174',
            'state' => 'N/A',
            'city' => 'N/A',
            'defaultLocale' => 'ru_RU',
            'companyExitDate' => '2038-12-31', // fix date
            'custom03' => $user->get('subject'),
            'custom04' => 'N/A',
            'custom05' => 'N/A',
            'custom06' => 'N/A',
            'custom07' => 'N/A',
            'custom08' => 'N/A',
            'custom09' => '3261', // fix
            'matrixManagerExternalIds' => $this->data['matrixManager'],
        ];

        foreach ($attr as $key => $value) {
            $xml = new xmlWriter();
            $xml->openMemory();
            $xml->startElement($key);
            $xml->text($value);
            $xml->endElement();
            $this->body .= $xml->outputMemory(true);
        }

    }

    public function build(){

        //create SFObject - set type and body
        $SFObject = new SuccessFactorsStructSFObject();
        $SFObject->setType('user');
        $SFObject->setAny($this->body);

        return $SFObject;
    }
}
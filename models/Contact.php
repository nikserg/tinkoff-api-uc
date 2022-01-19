<?php

namespace nikserg\tinkoffApiUc\models;

/**
 * "contact": {
"firstName": "Дмитрий",
"lastName": "Иванов",
"middleName": "Валерьевич",
"email": "ivanov@gmail.com",
"phoneNumber": "+79123456789",
"inn": "123456654321",
"snils": "12345678912",
"gender": "M",
"document": {
"series": "1234",
"number": "123654",
"issuerName": "ОВД Измайлово",
"issuerCode": "770-051",
"issueDate": "2007-12-03",
"birthDate": "1991-09-23",
"birthPlace": "П ИЗМАЙЛОВО МОСКОВСКОЙ ОБЛ"
}
},
 */
class Contact implements Sanitizeable
{
    public $firstName;
    public $lastName;
    public $middleName;
    public $email;
    public $phoneNumber;
    public $inn;
    public $snils;
    public $gender;
    /**
     * @var \nikserg\tinkoffApiUc\models\Document
     */
    public $document;

    function sanitize()
    {
        $return = (array)$this;
        $return['phoneNumber'] = str_replace(' ', '', $return['phoneNumber']);
        $return['phoneNumber'] = str_replace('(', '', $return['phoneNumber']);
        $return['phoneNumber'] = str_replace('-', '', $return['phoneNumber']);
        $return['phoneNumber'] = str_replace(')', '', $return['phoneNumber']);

        $return['snils'] = str_replace(' ', '', $return['snils']);
        $return['snils'] = str_replace('-', '', $return['snils']);
        return $return;
    }
}
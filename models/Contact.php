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
class Contact
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

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * @param mixed $middleName
     */
    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param mixed $phoneNumber
     */
    public function setPhoneNumber($phoneNumber)
    {

        $phoneNumber = str_replace(' ', '', $phoneNumber);
        $phoneNumber = str_replace('(', '', $phoneNumber);
        $phoneNumber = str_replace('-', '', $phoneNumber);
        $phoneNumber = str_replace(')', '', $phoneNumber);
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return mixed
     */
    public function getInn()
    {
        return $this->inn;
    }

    /**
     * @param mixed $inn
     */
    public function setInn($inn)
    {
        $this->inn = $inn;
    }

    /**
     * @return mixed
     */
    public function getSnils()
    {
        return $this->snils;
    }

    /**
     * @param mixed $snils
     */
    public function setSnils($snils)
    {
        $snils = str_replace(' ', '', $snils);
        $snils = str_replace('-', '', $snils);
        $this->snils = $snils;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return \nikserg\tinkoffApiUc\models\Document
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * @param \nikserg\tinkoffApiUc\models\Document $document
     */
    public function setDocument($document)
    {
        $this->document = $document;
    }

}
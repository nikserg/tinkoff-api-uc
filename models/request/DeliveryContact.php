<?php

namespace nikserg\tinkoffApiUc\models\request;

/**
 * {
 * "id": "39df83a3-edc7-4c83-ba53-9eaae38c225f",
 * "role": "Риэлтор",
 * "firstName": "Иван",
 * "lastName": "Иванов",
 * "middleName": "Иванович",
 * "birthDate": "1990-05-05",
 * "phones": [
 * {
 * "type": "MOBILE",
 * "number": "+79546523687"
 * }
 * ],
 * "documents": [
 * {
 * "type": "PASSPORT",
 * "number": "123467",
 * "series": "3456",
 * "divisionName": "УВД Раменского района",
 * "issueDate": "1990-05-05"
 * }
 * ]
 * }
 */
class DeliveryContact
{
    public $id;
    public $role;
    public $firstName;
    public $lastName;
    public $middleName;
    public $birthDate;

    /**
     * @var \nikserg\tinkoffApiUc\models\request\DeliveryContactPhone[]
     */
    public $phones;
    /**
     * @var \nikserg\tinkoffApiUc\models\request\DeliveryContactDocument[]
     */
    public $documents;


    /**
     * @param \DateTime $birthDate
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate->format('Y-m-d');
    }
}
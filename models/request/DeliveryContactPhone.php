<?php

namespace nikserg\tinkoffApiUc\models\request;

/**
 *
 * {
 * "type": "MOBILE",
 * "number": "+79546523687"
 * }
 */
class DeliveryContactPhone
{
    const TYPE_MOBILE = "MOBILE";
    public $type;
    public $number;

    /**
     * @param mixed $phoneNumber
     */
    public function setPhoneNumber($phoneNumber)
    {

        $phoneNumber = str_replace(' ', '', $phoneNumber);
        $phoneNumber = str_replace('(', '', $phoneNumber);
        $phoneNumber = str_replace('-', '', $phoneNumber);
        $phoneNumber = str_replace(')', '', $phoneNumber);
        $this->number = $phoneNumber;
    }
}
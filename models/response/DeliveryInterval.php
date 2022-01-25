<?php

namespace nikserg\tinkoffApiUc\models\response;

/**
 * {
 * "startInterval": "2021-10-19T10:00",
 * "endInterval": "2021-10-19T12:00"
 * }
 */
class DeliveryInterval extends Response
{
    /**
     * @var string
     */
    public $startInterval;
    /**
     * @var string
     */
    public $endInterval;


}
<?php

namespace nikserg\tinkoffApiUc\models\response;

/**
 * {
 * "appointmentId": "39df83a3-edc7-4c83-ba53-9eaae38c225f",
 * "timeOffset": "+03:00",
 * "intervals": [
 * {
 * "startInterval": "2021-10-19T10:00",
 * "endInterval": "2021-10-19T12:00"
 * }
 * ]
 * }
 */
class DeliveryIntervalsResponse extends Response
{
    /**
     * @var string GUID
     */
    public $appointmentId;

    public $timeOffset;
    /**
     * @var \nikserg\tinkoffApiUc\models\response\DeliveryInterval[]
     */
    public $intervals;

}
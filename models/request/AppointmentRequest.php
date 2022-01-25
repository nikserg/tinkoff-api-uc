<?php

namespace nikserg\tinkoffApiUc\models\request;

/**
 * {
 * "appointmentId": "39df83a3-edc7-4c83-ba53-9eaae38c225f",
 * "intervalStartTime": "2020-11-23T10:00",
 * "intervalEndTime": "2020-11-23T10:00",
 * "commentForAgent": "Test comment"
 * }
 */
class AppointmentRequest
{
    public $appointmentId;
    public $intervalStartTime;
    public $intervalEndTime;
    public $commentForAgent;

}
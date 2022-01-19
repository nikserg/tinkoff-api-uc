<?php

namespace nikserg\tinkoffApiUc\models;

class IdResponse
{
    /**
     * @var string GUID
     */
    public $issueRequestId;

    public function __construct($json)
    {
        $decoded = \GuzzleHttp\json_decode($json, true);
        $this->issueRequestId = $decoded['issueRequestId'];
    }

}
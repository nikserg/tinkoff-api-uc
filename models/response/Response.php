<?php

namespace nikserg\tinkoffApiUc\models\response;

abstract class Response
{

    public function __construct($json)
    {
        $decoded = \GuzzleHttp\json_decode($json, true);
        foreach ($decoded as $key => $value) {
            $this->{$key} = $value;
        }
    }

}
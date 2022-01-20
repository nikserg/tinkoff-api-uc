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

    protected function setFieldAsClass($fieldName, $className)
    {
        $data = $this->{$fieldName};
        if ($data) {
            $this->{$fieldName} = new $className();
            foreach ($data as $key => $value) {
                $this->{$fieldName}->{$key} = $value;
            }
        }
    }
}
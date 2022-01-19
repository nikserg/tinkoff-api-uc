<?php

namespace nikserg\tinkoffApiUc\models;

abstract class Request
{
    /**
     * @return array
     */
    public function prepare()
    {
        $return = [];
        foreach ($this as $key => $value) {
            if ($value instanceof Sanitizeable) {
                $return[$key] = $value->sanitize();
            } else {
                $return[$key] = $value;
            }
        }
        return $return;
    }
}
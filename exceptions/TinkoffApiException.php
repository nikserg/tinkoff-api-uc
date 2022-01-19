<?php

namespace nikserg\tinkoffApiUc\exceptions;


class TinkoffApiException extends \Exception {
    public $tinkoffErrorId;
    public $tinkoffErrorCode;
    public $tinkoffErrorMessage;
    public $tinkoffErrorDetails;
    public function __construct($json, $httpCode, $previous = null)
    {
        $decoded = @\GuzzleHttp\json_decode($json, true);
        if (isset($decoded['errorCode'])) {
            $this->tinkoffErrorCode = $decoded['errorCode'];
        }
        if (isset($decoded['errorId'])) {
            $this->tinkoffErrorId = $decoded['errorId'];
        }
        if (isset($decoded['errorMessage'])) {
            $this->tinkoffErrorMessage = $decoded['errorMessage'];
        }
        if (isset($decoded['errorDetails'])) {
            $this->tinkoffErrorDetails = $decoded['errorDetails'];
        }
        parent::__construct('#'.$this->tinkoffErrorId.' '.$this->tinkoffErrorCode.': '.$this->tinkoffErrorMessage . ' '.print_r($this->tinkoffErrorDetails, true), $httpCode, $previous);
    }
}
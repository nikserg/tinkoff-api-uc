<?php

namespace nikserg\tinkoffApiUc;

class Client
{
    protected $guzzle;

    /**
     * @param string $certFile Путь к файлу ключа в формате PEM
     */
    public function __construct($certFile, $certPassword = '')
    {
        $cert = [$certFile];
        if ($certPassword) {
            $cert[] = $certPassword;
        }
        $this->guzzle = new \GuzzleHttp\Client([
            'base_uri' => 'https://secured-openapi.business.tinkoff.ru/',
            'timeout'  => 5,
            'cert'     => $cert,
            'ssl_key'  => $cert,
        ]);
    }

    /**
     * @param $request
     * @return void
     */
    private function send($request) {
        $json = \GuzzleHttp\json_encode($request);
        $request = $this->guzzle->post('api/v1/qualified-digital-signature/issue', ['body' => $json]);
        print_r($request);
        exit;
    }

    /**
     * @see https://business.tinkoff.ru/openapi/docs/#operation/postApiV1Qualified-digital-signatureIssue
     * @param \nikserg\tinkoffApiUc\models\KepRequest $request
     */
    public function requestKep($request)
    {
        return $this->send($request);
    }


}
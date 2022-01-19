<?php

namespace nikserg\tinkoffApiUc;

use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\RequestOptions;
use nikserg\tinkoffApiUc\exceptions\TinkoffApiException;
use nikserg\tinkoffApiUc\exceptions\TinkoffUnauthorizedApiException;
use nikserg\tinkoffApiUc\models\IdResponse;

class Client
{
    protected $guzzle;

    /**
     * @param string $certFile Путь к файлу сертификата в формате *.pem
     * @param string $keyFile Путь к файлу ключа в формате *.key
     * @param string $token Токен авторизации
     */
    public function __construct($certFile, $keyFile, $token)
    {
        $this->guzzle = new \GuzzleHttp\Client([
            'base_uri' => 'https://secured-openapi.business.tinkoff.ru/',
            'timeout'  => 5,
            'cert'     => $certFile,
            'ssl_key'  => $keyFile,
            'headers'  => [
                'Authorization' => 'Bearer ' . $token,
            ],
        ]);
    }

    /**
     * @param \nikserg\tinkoffApiUc\models\KepRequest $request
     * @return \nikserg\tinkoffApiUc\models\IdResponse
     * @throws \nikserg\tinkoffApiUc\exceptions\TinkoffUnauthorizedApiException
     */
    private function send($request)
    {
        try {
            $request = $this->guzzle->post('api/v1/qualified-digital-signature/issue', [RequestOptions::JSON => $request]);
        } catch (ClientException $exception) {
            if (in_array($exception->getResponse()->getStatusCode(), [401, 400])) {
                $response = $exception->getResponse()->getBody()->getContents();
                throw new TinkoffUnauthorizedApiException($response, $exception->getResponse()->getStatusCode());
            } else {
                throw $exception;
            }
        }
        $response = $request->getBody()->getContents();
        return new IdResponse($response);
    }

    /**
     * @param \nikserg\tinkoffApiUc\models\KepRequest $request
     * @return string GUID
     * @throws \nikserg\tinkoffApiUc\exceptions\TinkoffUnauthorizedApiException
     */
    public function requestKep($request)
    {
        $response = $this->send($request);
        return $response->issueRequestId;
    }


}
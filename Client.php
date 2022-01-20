<?php

namespace nikserg\tinkoffApiUc;

use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\RequestOptions;
use nikserg\tinkoffApiUc\exceptions\TinkoffUnauthorizedApiException;
use nikserg\tinkoffApiUc\models\response\IdResponse;
use nikserg\tinkoffApiUc\models\response\StatusResponse;

class Client
{
    const CREATE_ISSUE = 'api/v1/qualified-digital-signature/issue';
    const ISSUE_INFO = 'api/v1/qualified-digital-signature/issue';

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
     * @param string                                          $url
     * @param string                                          $method `post`, `get`, `put`
     * @param \nikserg\tinkoffApiUc\models\request\KepRequest $request
     * @return string JSON ответа
     * @throws \nikserg\tinkoffApiUc\exceptions\TinkoffUnauthorizedApiException
     */
    private function send($url, $method, $request = null)
    {
        try {
            $options = [];
            if ($request) {
                $options = [RequestOptions::JSON => $request];
            }
            $request = $this->guzzle->{$method}($url, $options);
        } catch (ClientException $exception) {
            if (in_array($exception->getResponse()->getStatusCode(), [401, 400])) {
                $response = $exception->getResponse()->getBody()->getContents();
                throw new TinkoffUnauthorizedApiException($response, $exception->getResponse()->getStatusCode());
            } else {
                throw $exception;
            }
        }

        return $request->getBody()->getContents();
    }

    /**
     * @param \nikserg\tinkoffApiUc\models\request\KepRequest $request
     * @return string GUID
     * @throws \nikserg\tinkoffApiUc\exceptions\TinkoffUnauthorizedApiException
     */
    public function requestKep($request)
    {
        return (new IdResponse($this->send(self::CREATE_ISSUE, 'post', $request)))->issueRequestId;
    }

    /**
     * @param string $guid
     * @return \nikserg\tinkoffApiUc\models\response\StatusResponse
     * @throws \nikserg\tinkoffApiUc\exceptions\TinkoffUnauthorizedApiException
     */
    public function getKepStatus($guid)
    {
        return (new StatusResponse($this->send(self::ISSUE_INFO . '/' . $guid . '/status', 'get')));
    }


}
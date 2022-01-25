<?php

namespace nikserg\tinkoffApiUc;

use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\RequestOptions;
use nikserg\tinkoffApiUc\exceptions\TinkoffUnauthorizedApiException;
use nikserg\tinkoffApiUc\models\response\IdResponse;
use nikserg\tinkoffApiUc\models\response\IssueRequestIdResponse;
use nikserg\tinkoffApiUc\models\response\StatusResponse;

class Client
{
    const ISSUE = 'api/v1/qualified-digital-signature/issue';
    const DELIVERY = 'api/v1/delivery/tasks';

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
            //'debug'    => 1,
        ]);
    }

    /**
     * @param string                                          $url
     * @param string                                          $method `post`, `get`, `put`
     * @param \nikserg\tinkoffApiUc\models\request\KepRequest $request
     * @param string                                          $bodyFormat Формат тела запроса, по умолчанию json
     * @return string JSON ответа
     * @throws \nikserg\tinkoffApiUc\exceptions\TinkoffUnauthorizedApiException
     */
    private function send($url, $method, $request = null, $bodyFormat = RequestOptions::JSON)
    {
        try {
            $options = [];
            if ($request) {
                $options = [$bodyFormat => $request];
            }
            $request = $this->guzzle->{$method}($url, $options);
        } catch (ClientException $exception) {
            if (in_array($exception->getResponse()->getStatusCode(), [401, 400, 422])) {
                $response = $exception->getResponse()->getBody()->getContents();
                throw new TinkoffUnauthorizedApiException($response, $exception->getResponse()->getStatusCode());
            } else {
                throw $exception;
            }
        }

        return $request->getBody()->getContents();
    }

    /**
     * Создать новый запрос на выпуск сертификата
     *
     *
     * @param \nikserg\tinkoffApiUc\models\request\KepRequest $request
     * @return string GUID
     * @throws \nikserg\tinkoffApiUc\exceptions\TinkoffUnauthorizedApiException
     */
    public function requestKep($request)
    {
        return (new IssueRequestIdResponse($this->send(self::ISSUE, 'post', $request)))->issueRequestId;
    }

    /**
     * Статус запроса на выпуск сертификата
     *
     *
     * @param string $guid
     * @return \nikserg\tinkoffApiUc\models\response\StatusResponse
     * @throws \nikserg\tinkoffApiUc\exceptions\TinkoffUnauthorizedApiException
     */
    public function getKepStatus($guid)
    {
        return (new StatusResponse($this->send(self::ISSUE . '/' . $guid . '/status', 'get')));
    }


    /**
     * Загрузить файл запроса
     *
     *
     * @param $guid
     * @param $reqFileContent
     * @return void
     * @throws \nikserg\tinkoffApiUc\exceptions\TinkoffUnauthorizedApiException
     */
    public function uploadReqFile($guid, $reqFileContent)
    {
        $reqFileContent = "-----BEGIN NEW CERTIFICATE REQUEST-----\n" . $reqFileContent . "\n-----END NEW CERTIFICATE REQUEST-----";
        $this->send(self::ISSUE . '/' . $guid . '/certificate-request', 'put', $reqFileContent,
            RequestOptions::BODY);
    }

    /**
     * Создать задание на доставку
     *
     * @param $request
     * @return string
     * @throws \nikserg\tinkoffApiUc\exceptions\TinkoffUnauthorizedApiException
     */
    public function createDeliveryTask($request)
    {
        return (new IdResponse($this->send(self::DELIVERY, 'post', $request)))->id;
    }

}
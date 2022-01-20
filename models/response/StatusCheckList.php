<?php

namespace nikserg\tinkoffApiUc\models\response;

/**
 * "statusChecklist": {
 * "deliveryStatus": "NOT_READY",
 * "certificateRequest": "READY"
 * },
 * @see https://business.tinkoff.ru/openapi/docs/#operation/getApiV1Qualified-digital-signatureIssueIssuerequestidStatus
 */
class StatusCheckList
{
    const DELIVERY_STATUS_NOT_READY = 'NOT_READY';
    const DELIVERY_STATUS_REQUIRED = 'REQUIRED';
    const DELIVERY_STATUS_READY = 'READY';

    const DELIVERY_STATUS_NAMES = [
        self::DELIVERY_STATUS_NOT_READY => 'Заявка еще не прошла проверку СМЭВ',
        self::DELIVERY_STATUS_REQUIRED  => 'Требуется задать место и время встречи с представителем',
        self::DELIVERY_STATUS_READY     => 'Встреча с представителем назначена',
    ];


    const CERTIFICATE_REQUEST_REQUIRED = 'REQUIRED';
    const CERTIFICATE_REQUEST_READY = 'READY';

    const CERTIFICATE_REQUEST_NAMES = [
        self::CERTIFICATE_REQUEST_REQUIRED => 'Требуется загрузить файл запроса на сертификат (CSR)',
        self::CERTIFICATE_REQUEST_READY    => 'Запрос на сертификат загружен',
    ];

    public $deliveryStatus;
    public $certificateRequest;

}
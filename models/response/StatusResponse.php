<?php

namespace nikserg\tinkoffApiUc\models\response;

/**
 * {
 * "status": "MEETING_PREPARATION",
 * "statusChecklist": {
 * "deliveryStatus": "NOT_READY",
 * "certificateRequest": "READY"
 * },
 * "partnerDeliveryId": "f22e798e-4ea9-11ec-81d3-0242ac130003",
 * "certRequestExpectedSubject": "1.2.643.100.4=5862093762, 1.2.643.3.131.1.1=144656727119, 1.2.643.100.3=90266090390,
 * 1.2.643.100.1=7473344045684, 1.2.840.113549.1.9.1=petrov@mail.ru, 2.5.4.12=\"ДИРЕКТОР, ГЕНЕРАЛЬНЫЙ\", 2.5.4.10=\"ООО
 * \"\"Организация, запятая и кавычки\"\"\", 2.5.4.9=\"УЛИЦА ФИЛЕВСКАЯ 3-Я, 10, 6\", 2.5.4.7=МОСКВА, 2.5.4.8=77 Москва,
 * 2.5.4.6=RU, 2.5.4.42=ПЕТР, 2.5.4.4=ПЕТРОВ, 2.5.4.3=\"ООО \"\"Организация, запятая и кавычки\"\"\"",
 * "ownerCheckExpiresAt": "2021-12-10T12:16:27+03:00",
 * "createdAt": "2021-11-26T11:08:31Z",
 * "updatedAt": "2021-11-26T11:08:31Z"
 * }
 *
 * @see https://business.tinkoff.ru/openapi/docs/#operation/getApiV1Qualified-digital-signatureIssueIssuerequestidStatus
 */
class StatusResponse extends Response
{
    const STATUS_SMEV_CHECK_IN_PROGRESS = 'SMEV_CHECK_IN_PROGRESS';
    const STATUS_SMEV_CHECK_FAILED = 'SMEV_CHECK_FAILED';
    const STATUS_MEETING_PREPARATION = 'MEETING_PREPARATION';
    const STATUS_MEETING_IN_PROGRESS = 'MEETING_IN_PROGRESS';
    const STATUS_MEETING_FAILED = 'MEETING_FAILED';
    const STATUS_CERT_ISSUE_IN_PROGRESS = 'CERT_ISSUE_IN_PROGRESS';
    const STATUS_CERT_ISSUE_FAILED = 'CERT_ISSUE_FAILED';
    const STATUS_ESIA_IN_PROGRESS = 'ESIA_IN_PROGRESS';
    const STATUS_ESIA_FAILED = 'ESIA_FAILED';
    const STATUS_SUCCESS = 'SUCCESS';

    const STATUS_NAMES = [
        self::STATUS_SMEV_CHECK_IN_PROGRESS => 'Выполняется проверка данных СМЭВ',
        self::STATUS_SMEV_CHECK_FAILED      => 'Проверка данных СМЭВ завершена с ошибкой',
        self::STATUS_MEETING_PREPARATION    => 'Подготовка к встрече с представителем',
        self::STATUS_MEETING_IN_PROGRESS    => 'Встреча с представителем назначена',
        self::STATUS_MEETING_FAILED         => 'Встреча с представителем завершилась неудачно',
        self::STATUS_CERT_ISSUE_IN_PROGRESS => 'Выполняется выпуск КЭП',
        self::STATUS_CERT_ISSUE_FAILED      => 'Произошла ошибка при выпуске КЭП',
        self::STATUS_ESIA_IN_PROGRESS       => 'Выполняется регистрация в ЕСИА',
        self::STATUS_ESIA_FAILED            => 'Произошла ошибка при регистрации в ЕСИА',
        self::STATUS_SUCCESS                => 'Заявка выполнена',
    ];

    /**
     * Является ли статус ошибочным
     *
     *
     * @return bool
     */
    public function isErrorState()
    {
        return in_array($this->status, [
            self::STATUS_ESIA_FAILED,
            self::STATUS_CERT_ISSUE_FAILED,
            self::STATUS_MEETING_FAILED,
            self::STATUS_SMEV_CHECK_FAILED,
        ]);
    }

    public $status;
    /**
     * @var \nikserg\tinkoffApiUc\models\response\StatusCheckList
     */
    public $statusChecklist;
    public $partnerDeliveryId;
    // 1.2.643.100.4=5862093762, 1.2.643.3.131.1.1=144656727119, 1.2.643.100.3=90266090390, 1.2.643.100.1=7473344045684, 1.2.840.113549.1.9.1=petrov@mail.ru, 2.5.4.12="ДИРЕКТОР, ГЕНЕРАЛЬНЫЙ", 2.5.4.10="ООО ""Организация, запятая и кавычки""", 2.5.4.9=УЛИЦА ФИЛЕВСКАЯ 3-Я 10, 2.5.4.7=МОСКВА, 2.5.4.8=77 г. Москва, 2.5.4.6=RU, 2.5.4.42=ПЕТР ПЕТРОВИЧ, 2.5.4.4=ПЕТРОВ, 2.5.4.3="ООО ""Организация, запятая и кавычки"""
    public $certRequestExpectedSubject;
    public $ownerCheckExpiresAt;
    public $createdAt;
    public $updatedAt;
    /**
     * @var \nikserg\tinkoffApiUc\models\response\Error
     */
    public $error;

    /**
     * @return string|null
     */
    public function getStatusString()
    {
        return self::STATUS_NAMES[$this->status];
    }

    public function __construct($json)
    {
        parent::__construct($json);
        $this->setFieldAsClass('statusChecklist', '\nikserg\tinkoffApiUc\models\response\StatusCheckList');
        $this->setFieldAsClass('error', '\nikserg\tinkoffApiUc\models\response\Error');
    }
}
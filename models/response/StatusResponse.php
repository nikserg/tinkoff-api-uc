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
    public $status;
    public $statusCheckList;
    public $partnerDeliveryId;
    public $certRequestExpectedSubject;
    public $ownerCheckExpiresAt;
    public $createdAt;
    public $updatedAt;

}
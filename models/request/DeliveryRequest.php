<?php

namespace nikserg\tinkoffApiUc\models\request;

/**
 * {
 * "template": "PartnerDelivery",
 * "commentForAgent": "Проверить паспорт",
 * "parentTaskId": "39df83a3-edc7-4c83-ba53-9eaae38c225f",
 * "meta": {
 * "dealNumber": "456793"
 * },
 * "contacts": [
 * {
 * "id": "39df83a3-edc7-4c83-ba53-9eaae38c225f",
 * "role": "Риэлтор",
 * "firstName": "Иван",
 * "lastName": "Иванов",
 * "middleName": "Иванович",
 * "birthDate": "1990-05-05",
 * "phones": [
 * {}
 * ],
 * "documents": [
 * {
 * "type": "PASSPORT",
 * "number": "123467",
 * "series": "3456",
 * "divisionName": "УВД Раменского района",
 * "issueDate": "1990-05-05"
 * }
 * ]
 * }
 * ]
 * }
 */
class DeliveryRequest
{
    const TEMPLATE_PARTNER_DELIVERY = "PartnerDelivery";
    public $template;
    public $commentForAgent;
    public $parentTaskId;
    public $meta;
    public $contacts;

}
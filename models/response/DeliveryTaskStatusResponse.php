<?php

namespace nikserg\tinkoffApiUc\models\response;


/**
 * {
 * "id": "39df83a3-edc7-4c83-ba53-9eaae38c225f",
 * "status": "NEW",
 * "template": "partner_delivery",
 * "meetResult": "Успешная встреча",
 * "resolution": "Документы подписаны",
 * "subResolution": "Подписан договор аренды",
 * "parentTaskId": "39df83a3-edc7-4c83-ba53-9eaae38c225f",
 * "meta": {
 * "dealNumber": "456793"
 * },
 * "attachments": [
 * {
 * "id": "39df83a3-edc7-4c83-ba53-9eaae38c225f",
 * "type": "Договор аренды",
 * "meta": {
 * "cadastreNumber": "77:997987687",
 * "noticeNumber": "123-456789"
 * }
 * }
 * ],
 * "photos": [
 * {
 * "id": "39df83a3-edc7-4c83-ba53-9eaae38c225f",
 * "type": "Паспорт",
 * "subType": "Страница регистрации",
 * "sheetNumber": 1,
 * "review": {
 * "status": "DISCARDED",
 * "decisionSource": "service",
 * "decisionReason": [
 * "stranger",
 * "from-screen"
 * ]
 * }
 * }
 * ]
 * }
 */
class DeliveryTaskStatusResponse extends Response
{
    public $id;
    public $status;
    public $template;
    public $meetResult;
    public $resolution;
    public $subResolution;
    public $parentTaskId;
    public $meta;
    public $attachments;
    public $photos;

}
<?php

namespace nikserg\tinkoffApiUc\models\request;

/**
 * {
 * "taskIds": [
 * "39df83a3-edc7-4c83-ba53-9eaae38c225f"
 * ],
 * "address": {
 * "fullAddress": "г. Москва, 3-я улица Строителей, д.25, кв.12",
 * "zipCode": "1234",
 * "country": "Россия",
 * "region": "Москва",
 * "area": "Москва",
 * "city": "Москва",
 * "street": "3-я улица Строителей",
 * "house": "12",
 * "building": "3",
 * "flat": "12",
 * "construction": "2",
 * "settlement": ""
 * }
 * }
 */
class DeliveryIntervalsRequest
{
    /**
     * @var string[]
     */
    public $taskIds;
    /**
     * @var \nikserg\tinkoffApiUc\models\request\DeliveryAddress
     */
    public $address;
}
<?php

namespace nikserg\tinkoffApiUc\models\request;

/**
 * {
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
 */
class DeliveryAddress
{
    public $fullAddress;
    public $zipCode;
    public $country;
    public $region;
    public $area;
    public $city;
    public $street;
    public $house;
    public $building;
    public $flat;
    public $construction;
    public $settlement;
}
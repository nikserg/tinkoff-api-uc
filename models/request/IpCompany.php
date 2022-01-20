<?php

namespace nikserg\tinkoffApiUc\models\request;

/**
 * "company": {
 * "ogrnip": "123456123456712",
 * "region": "77 Г МОСКВА",
 * "city": "Г МОСКВА",
 * "address": "Россия, г.Москва, ул Ленина пом 5Н"
 * },
 */
class IpCompany extends Company
{
    public $orgnip;
}
<?php

namespace nikserg\tinkoffApiUc\models;

/**
 * "company": {
"inn": "9099912345",
"shortName": "ООО Юность",
"fullName": "Общество с ограниченной ответственностью ЮНОСТЬ",
"ogrn": "1234561234567",
"region": "77 Г МОСКВА",
"city": "Г МОСКВА",
"address": "Россия, г.Москва, ул Ленина пом 5Н",
"title": "Генеральный директор",
"actingReason": "на основании устава №345 от 12.11.21"
},
 */
class UlCompany extends Company
{
    public $inn;
    public $shortName;
    public $fullName;
    public $ogrn;
    public $title;
    public $actingReason;
}
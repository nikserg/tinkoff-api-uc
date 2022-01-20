<?php

namespace nikserg\tinkoffApiUc\models\request;

/**
 * {
 * "company": {
 * "ogrnip": "123456123456712",
 * "region": "77 Г МОСКВА",
 * "city": "Г МОСКВА",
 * "address": "Россия, г.Москва, ул Ленина пом 5Н"
 * },
 * "contact": {
 * "firstName": "Дмитрий",
 * "lastName": "Иванов",
 * "middleName": "Валерьевич",
 * "email": "ivanov@gmail.com",
 * "phoneNumber": "+79123456789",
 * "inn": "123456654321",
 * "snils": "12345678912",
 * "gender": "M",
 * "document": {
 * "series": "1234",
 * "number": "123654",
 * "issuerName": "ОВД Измайлово",
 * "issuerCode": "770-051",
 * "issueDate": "2007-12-03",
 * "birthDate": "1991-09-23",
 * "birthPlace": "П ИЗМАЙЛОВО МОСКОВСКОЙ ОБЛ"
 * }
 * },
 * "disableCrossSale": [
 * "ALL"
 * ]
 * }
 */
class KepRequest
{
    const DISABLE_CROSSSALE_ALL = "ALL";
    const DISABLE_CROSSSALE_CASHBOX = "CASHBOX";
    /**
     * @var \nikserg\tinkoffApiUc\models\request\Company
     */
    public $company;
    /**
     * @var \nikserg\tinkoffApiUc\models\request\Contact
     */
    public $contact;
    /**
     * @var string[]
     */
    public $disableCrossSale;
}
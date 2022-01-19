<?php

namespace nikserg\tinkoffApiUc\models;

/**
 * "document": {
"series": "1234",
"number": "123654",
"issuerName": "ОВД Измайлово",
"issuerCode": "770-051",
"issueDate": "2007-12-03",
"birthDate": "1991-09-23",
"birthPlace": "П ИЗМАЙЛОВО МОСКОВСКОЙ ОБЛ"
}
 */
class Document
{

    public $series;
    public $number;
    public $issuerName;
    public $issuerCode;
    public $issueDate;
    public $birthDate;
    public $birthPlace;
}
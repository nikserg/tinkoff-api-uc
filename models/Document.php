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

    /**
     * @return mixed
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * @param mixed $series
     */
    public function setSeries($series)
    {
        $this->series = $series;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return mixed
     */
    public function getIssuerName()
    {
        return $this->issuerName;
    }

    /**
     * @param mixed $issuerName
     */
    public function setIssuerName($issuerName)
    {
        $this->issuerName = $issuerName;
    }

    /**
     * @return mixed
     */
    public function getIssuerCode()
    {
        return $this->issuerCode;
    }

    /**
     * @param mixed $issuerCode
     */
    public function setIssuerCode($issuerCode)
    {
        $this->issuerCode = $issuerCode;
    }

    /**
     * @return mixed
     */
    public function getIssueDate()
    {
        return $this->issueDate;
    }

    /**
     * @param \DateTime $issueDate
     */
    public function setIssueDate($issueDate)
    {
        $this->issueDate = $issueDate->format('Y-m-d');
    }

    /**
     * @return mixed
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * @param \DateTime $birthDate
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate->format('Y-m-d');
    }

    /**
     * @return mixed
     */
    public function getBirthPlace()
    {
        return $this->birthPlace;
    }

    /**
     * @param mixed $birthPlace
     */
    public function setBirthPlace($birthPlace)
    {
        $this->birthPlace = $birthPlace;
    }

}
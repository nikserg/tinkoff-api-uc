<?php

namespace nikserg\tinkoffApiUc\models\request;

/**
 * {
 * "type": "PASSPORT",
 * "number": "123467",
 * "series": "3456",
 * "divisionName": "УВД Раменского района",
 * "issueDate": "1990-05-05"
 * }
 */
class DeliveryContactDocument
{
    const TYPE_PASSPORT = "PASSPORT";
    public $type;
    public $number;
    public $series;
    public $divisionName;
    public $issueDate;

    /**
     * @param mixed $series
     */
    public function setSeries($series)
    {
        $series = str_replace(' ', '', $series);
        $this->series = $series;
    }

    /**
     * @param \DateTime $issueDate
     */
    public function setIssueDate($issueDate)
    {
        $this->issueDate = $issueDate->format('Y-m-d');
    }

}
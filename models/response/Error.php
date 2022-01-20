<?php

namespace nikserg\tinkoffApiUc\models\response;

/**
 *
 * [error] => Array
 * (
 * [errorMessage] => Предоставленные данные о компании и физическом лице не прошли проверку СМЭВ
 * [errorCode] => SMEV_CHECK_FAILED
 * [errorDetails] => Array
 * (
 * [checks] => Array
 * (
 * [0] => Array
 * (
 * [serviceKind] => Egrul
 * [status] => Failed
 * [errorCode] => 00003000
 * [errorMessage] => В выписке из ЕГРЮЛ отсутствует населенный пункт
 * [originalMessageId] => 7898a47d-7930-11ec-a121-7de28612b810
 * [responseUrl] => https://ecp.cryptopro.ru/api/smev/Egrul/7898a47d-7930-11ec-a121-7de28612b810
 * [respondedWhen] => 2022-01-19T17:02:44.513286+03:00
 * )
 *
 * [1] => Array
 * (
 * [serviceKind] => PassportInnMatch
 * [status] => Failed
 * [errorCode] => 00001001
 * [errorMessage] => Паспортные данные не соответствуют ИНН
 * [originalMessageId] => 78d22902-7930-11ec-a121-7de28612b810
 * [responseUrl] => https://ecp.cryptopro.ru/api/smev/PassportInnMatch/78d22902-7930-11ec-a121-7de28612b810
 * [respondedWhen] => 2022-01-19T17:02:44.665776+03:00
 * )
 *
 * [2] => Array
 * (
 * [serviceKind] => SnilsMatch
 * [status] => Failed
 * [errorCode] => 00001000
 * [errorMessage] => СНИЛС не соответствует ФИО, полу или дате рождения
 * [originalMessageId] => 78feb8b4-7930-11ec-a121-7de28612b810
 * [responseUrl] => https://ecp.cryptopro.ru/api/smev/SnilsMatch/78feb8b4-7930-11ec-a121-7de28612b810
 * [respondedWhen] => 2022-01-19T17:02:44.706282+03:00
 * )
 *
 * )
 *
 * )
 *
 * )
 */
class Error
{
    const ERROR_CODE_SMEV_CHECK_FAILED = 'SMEV_CHECK_FAILED';

    public $errorMessage;
    public $errorCode;
    public $errorDetails;

}
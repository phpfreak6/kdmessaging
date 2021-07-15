<?php

use Hashids\Hashids;

function pr($dataArr) {
    echo '<pre>';
    print_r($dataArr);
    die;
}

function getDropdownList($dataArr, $key, $value) {
    $returnArr = [];
    $returnArr[''] = 'Please select';
    foreach ($dataArr as $data) {
        $returnArr[$data[$key]] = $data[$value];
    }
    return $returnArr;
}

function getDropdown($dataArr, $key, $value) {
    $returnArr = [];
    foreach ($dataArr as $data) {
        $returnArr[$data[$key]] = $data[$value];
    }
    return $returnArr;
}

function encodeId($id) {
    $hashids = new Hashids('kdmessaging', 10);
    return $hashids->encode($id);
}

function decodeId($id) {
    $hashids = new Hashids('kdmessaging', 10);
    return $hashids->decode($id)[0];
}

define('CRON_JOB_QUEUED', 0);
define('CRON_JOB_PROGRESSING', 1);
define('CRON_JOB_COMPLETED', 2);
define('CRON_JOB_COMPLETED_WITH_ERRORS', 3);

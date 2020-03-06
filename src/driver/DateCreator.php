<?php

namespace keadon\dataProvider\driver;
class DateCreator
{

    /**
     * 生成时间
     * @param string $date
     * @param string $format
     * @return false|string
     */
    public function create($date = '', $format = 'Y-m-d')
    {
        $d = $date == '' ? time() : strtotime($date);
        return date($format, $d);
    }

    /**
     * 生成时间戳
     * @param string $date
     * @return int
     */
    public function createTimeStamp($date = '')
    {
        return $date == '' ? time() : strtotime($date);
    }

    /**
     * 范围时间内随机生成时间
     * @param $minDate
     * @param string $maxDate
     * @param bool $isTimestamp
     * @param string $format
     * @return false|int|string
     */
    public function createInRange($minDate, $maxDate = '', $isTimestamp = false, $format = 'Y-m-d')
    {
        $begin = strtotime($minDate);
        $end = $maxDate == "" ? time() : strtotime($maxDate);
        $timestamp = rand($begin, $end);
        return $isTimestamp ? date($format, $timestamp) : $timestamp;
    }
}
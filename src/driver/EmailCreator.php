<?php

namespace keadon\dataProvider\driver;
class EmailCreator
{

    private $emails = array(
        '@163.com',
        '@qq.com',
        '@sina.com',
        '@126.com'
    );

    /**
     * 生成
     * @param bool $special
     * @return string
     */
    public function create($special = false)
    {
        $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        if ($special) {
            $chars .= '!@#$?|{/:;%^&*()-_[]}<>~+=.';
        }
        $len = mt_rand(6, 12);
        $string = '';
        for ($i = 0; $i < $len; $i++) {
            $index = mt_rand(0, strlen($chars) - 1);
            $string .= $chars[$index];
        }
        $suffix = $this->emails[array_rand($this->emails)];
        return $string . $suffix;
    }
}
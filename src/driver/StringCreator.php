<?php

namespace keadon\dataProvider\driver;
class StringCreator
{

    /**
     * @param $len
     * @param bool $special
     * @param string $prefix
     * @param string $suffix
     * @return string
     */
    public function create($len, $special = false, $prefix = '', $suffix = '')
    {
        $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        if ($special) {
            $specialChars = '!@#$?|{/:;%^&*()-_[]}<>~+=.';
            $chars .= $specialChars;
        }
        $string = '';
        for ($i = 0; $i < $len; $i++) {
            $index = mt_rand(0, strlen($chars) - 1);
            $string .= $chars[$index];
        }
        return $prefix . $string . $suffix;
    }

    /**
     * 全部小写
     * @param $len
     * @param bool $special
     * @param string $prefix
     * @param string $suffix
     * @return string
     */
    public function createLower($len, $special = false, $prefix = '', $suffix = '')
    {
        return strtolower($this->create($len, $special, $prefix, $suffix));
    }

    /**
     * 全部大写
     * @param $len
     * @param bool $special
     * @param string $prefix
     * @param string $suffix
     * @return string
     */
    public function createUpper($len, $special = false, $prefix = '', $suffix = '')
    {
        return strtoupper($this->create($len, $special, $prefix, $suffix));
    }
}
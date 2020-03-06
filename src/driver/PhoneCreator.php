<?php

namespace keadon\dataProvider\driver;
class PhoneCreator
{
    private $phonePrefixes = array(
        '130', '131', '132', '133', '134', '135',
        '136', '137', '138', '139', '144', '147',
        '150', '151', '152', '153', '155', '156',
        '157', '158', '159', '176', '177', '178',
        '180', '181', '182', '183', '184', '185',
        '186', '187', '188', '189'
    );

    /**
     * 生成手机号
     * @return string
     */
    public function create()
    {
        return $this->phonePrefixes[array_rand($this->phonePrefixes)] . mt_rand(1000, 9999) . mt_rand(1000, 9999);
    }
}
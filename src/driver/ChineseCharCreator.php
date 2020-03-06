<?php

namespace keadon\dataProvider\driver;

class ChineseCharCreator
{

    /**
     * 生成中文字符串
     * @param $len
     * @param string $encoding
     * @return false|string
     */
    public function create($len, $encoding = 'UTF-8')
    {
        $chars = '';
        for ($i = 0; $i < $len; $i++) {
            $char = chr(mt_rand(0xB0, 0xD0)) . chr(mt_rand(0xA1, 0xF0));
            $chars .= $char;
        }
        return iconv('GB2312', $encoding, $chars);
    }
}
<?php

namespace keadon\dataProvider\driver;
class NumberCreator
{

    /**
     * 随机生成指定长度的数字
     * @param $len
     * @return int
     */
    public function create($len)
    {
        return rand(pow(10, ($len - 1)), pow(10, $len) - 1);
    }

    /**
     * 随机生成在 min~max 范围内的数字
     * @param int $min
     * @param int $max
     * @return int
     */
    public function createInRange($min = 0, $max = 1)
    {
        return mt_rand($min, $max);
    }
}
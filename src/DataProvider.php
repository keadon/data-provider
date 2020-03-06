<?php

namespace keadon\dataProvider;

class DataProvider
{
    private static $instance = array();

    /**
     * 获取实例
     * @param $type
     * @return mixed
     */
    public static function getInstance($type)
    {
        if (!isset(self::$instance[$type])) {
            $class = __NAMESPACE__ . '\\driver\\' .$type . 'Creator';
            self::$instance[$type] = new $class();
        }
        return self::$instance[$type];
    }
}


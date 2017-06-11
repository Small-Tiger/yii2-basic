<?php
// automatically generated, do not modify

namespace Fb\Product;

class SortBY
{
    const SORT_BY_RECOMMEND = 0;
    const SORT_BY_PRICE = 1;
    const SORT_BY_CREATE_TIME = 2;

    private static $names = array(
        "SORT_BY_RECOMMEND",
        "SORT_BY_PRICE",
        "SORT_BY_CREATE_TIME",
    );

    public static function Name($e)
    {
        if (!isset(self::$names[$e])) {
            throw new \Exception();
        }
        return self::$names[$e];
    }
}

<?php
// automatically generated, do not modify

namespace Fb\BaseProductClass;

class Command
{
    const NONE = 0;
    const GetProductClassByCategoryIdRequest = 1;
    const GetProductClassRequest = 2;
    const GetProductClassAttributeAddedToRequest = 3;
    const GetProductClassStatisticsRequest = 4;

    private static $names = array(
        "NONE",
        "GetProductClassByCategoryIdRequest",
        "GetProductClassRequest",
        "GetProductClassAttributeAddedToRequest",
        "GetProductClassStatisticsRequest",
    );

    public static function Name($e)
    {
        if (!isset(self::$names[$e])) {
            throw new \Exception();
        }
        return self::$names[$e];
    }
}

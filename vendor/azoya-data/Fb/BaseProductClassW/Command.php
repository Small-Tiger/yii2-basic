<?php
// automatically generated, do not modify

namespace Fb\BaseProductClassW;

class Command
{
    const NONE = 0;
    const UpdateProductClassRequest = 1;
    const DelProductClassRequest = 2;
    const DelProductClassAttributeRequest = 3;
    const UpdateProductClassAttributeRequest = 4;
    const UpdateProductClassAttributeTypeRequest = 5;
    const UpdateProductClassAttributeSortOrderRequest = 6;

    private static $names = array(
        "NONE",
        "UpdateProductClassRequest",
        "DelProductClassRequest",
        "DelProductClassAttributeRequest",
        "UpdateProductClassAttributeRequest",
        "UpdateProductClassAttributeTypeRequest",
        "UpdateProductClassAttributeSortOrderRequest",
    );

    public static function Name($e)
    {
        if (!isset(self::$names[$e])) {
            throw new \Exception();
        }
        return self::$names[$e];
    }
}

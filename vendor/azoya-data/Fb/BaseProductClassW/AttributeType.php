<?php
// automatically generated, do not modify

namespace Fb\BaseProductClassW;

class AttributeType
{
    const Critical = 1;
    const Sales = 2;
    const Other = 3;

    private static $names = array(
        "Critical",
        "Sales",
        "Other",
    );

    public static function Name($e)
    {
        if (!isset(self::$names[$e])) {
            throw new \Exception();
        }
        return self::$names[$e];
    }
}

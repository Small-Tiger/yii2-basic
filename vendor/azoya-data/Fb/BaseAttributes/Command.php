<?php
// automatically generated, do not modify

namespace Fb\BaseAttributes;

class Command
{
    const NONE = 0;
    const GetAttributeRequest = 1;
    const GetAttributeValueCountRequest = 2;
    const GetProductClassAttributeRequest = 3;

    private static $names = array(
        "NONE",
        "GetAttributeRequest",
        "GetAttributeValueCountRequest",
        "GetProductClassAttributeRequest",
    );

    public static function Name($e)
    {
        if (!isset(self::$names[$e])) {
            throw new \Exception();
        }
        return self::$names[$e];
    }
}

<?php
// automatically generated, do not modify

namespace Fb\BaseAttributesW;

class Command
{
    const NONE = 0;
    const UpdateAttributeRequest = 1;
    const DelAttributeRequest = 2;

    private static $names = array(
        "NONE",
        "UpdateAttributeRequest",
        "DelAttributeRequest",
    );

    public static function Name($e)
    {
        if (!isset(self::$names[$e])) {
            throw new \Exception();
        }
        return self::$names[$e];
    }
}

<?php
// automatically generated, do not modify

namespace Fb\ConfigureCenter;

class Command
{
    const NONE = 0;
    const GetAllWebsiteRequest = 1;

    private static $names = array(
        "NONE",
        "GetAllWebsiteRequest",
    );

    public static function Name($e)
    {
        if (!isset(self::$names[$e])) {
            throw new \Exception();
        }
        return self::$names[$e];
    }
}

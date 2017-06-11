<?php
// automatically generated, do not modify

namespace Fb\Product;

class Command
{
    const NONE = 0;
    const ProductListRequest = 1;
    const ProductRequest = 2;
    const AllProductRequest = 3;
    const ConfigurableProductRequest = 4;

    private static $names = array(
        "NONE",
        "ProductListRequest",
        "ProductRequest",
        "AllProductRequest",
        "ConfigurableProductRequest",
    );

    public static function Name($e)
    {
        if (!isset(self::$names[$e])) {
            throw new \Exception();
        }
        return self::$names[$e];
    }
}

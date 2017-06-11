<?php
// automatically generated, do not modify

namespace Fb\Product_Backend;

class Command
{
    const NONE = 0;
    const SearchProductBaseInfoRequest = 1;
    const GetProductBaseInfoRequest = 2;
    const GetProductBaseRelatedInfoRequest = 3;
    const GetProductClassIdRequest = 4;
    const SearchProductInfoRequest = 5;
    const GetMerchantProductIsExistRequest = 6;
    const GetListProductInfoRequest = 7;
    const GetProductInfoRequest = 8;
    const GetProductDescriptionRequest = 9;
    const GetProductImageRequest = 10;
    const GetProductCategoryInfoRequest = 11;

    private static $names = array(
        "NONE",
        "SearchProductBaseInfoRequest",
        "GetProductBaseInfoRequest",
        "GetProductBaseRelatedInfoRequest",
        "GetProductClassIdRequest",
        "SearchProductInfoRequest",
        "GetMerchantProductIsExistRequest",
        "GetListProductInfoRequest",
        "GetProductInfoRequest",
        "GetProductDescriptionRequest",
        "GetProductImageRequest",
        "GetProductCategoryInfoRequest",
    );

    public static function Name($e)
    {
        if (!isset(self::$names[$e])) {
            throw new \Exception();
        }
        return self::$names[$e];
    }
}

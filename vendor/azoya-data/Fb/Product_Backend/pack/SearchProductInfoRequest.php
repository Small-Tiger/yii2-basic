<?php
namespace Fb\Product_Backend\pack;

use Fb\Base\BasePack;
use Fb\Product_Backend\Command;
use Fb\Product_Backend\UnionRequest;
use Google\FlatBuffers\FlatbufferBuilder;

/**
 * Created by PhpStorm.
 * User: zhengpenglin
 * Date: 2016/09/08
 * Time: 20:07
 */
class SearchProductInfoRequest extends BasePack
{

    public static function pack($websiteId, $merchantId, $productClassId, $salesModel, $productType, $merchantSkus, $skus, $names, $foreignNames, $status, $productSource, $createdAtBegin, $createdAtEnd, $infoType, $pageIndex, $num)
    {
        $builder = new FlatbufferBuilder(1);

        $websiteId = intval($websiteId);
        $productClassId = intval($productClassId);
        $salesModel = intval($salesModel);
        $productType = intval($productType);
        $status = intval($status);
        $productSource = intval($productSource);
        $infoType = intval($infoType);
        $pageIndex = intval($pageIndex);
        $num = intval($num);
        $createdAtBegin = intval($createdAtBegin);
        $createdAtEnd = intval($createdAtEnd);
        $merchantId = intval($merchantId);

        if ($merchantSkus && count($merchantSkus) > 0) {
            foreach ($merchantSkus as $key => $value) {
                $merchantSkus[$key] = $builder->createString($value);
            }
        }
        $merchantSkusOffset = \Fb\Product_Backend\SearchProductInfoRequest::createMerchantSkusVector($builder, $merchantSkus);

        if ($skus && count($skus) > 0) {
            foreach ($skus as $key => $value) {
                $skus[$key] = $builder->createString($value);
            }
        }
        $skusOffset = \Fb\Product_Backend\SearchProductInfoRequest::createSkusVector($builder, $skus);

        if ($names && count($names) > 0) {
            foreach ($names as $key => $value) {
                $names[$key] = $builder->createString($value);
            }
        }
        $namesOffset = \Fb\Product_Backend\SearchProductInfoRequest::createNamesVector($builder, $names);

        if ($foreignNames && count($foreignNames) > 0) {
            foreach ($foreignNames as $key => $value) {
                $foreignNames[$key] = $builder->createString($value);
            }
        }
        $foreignNamesOffset = \Fb\Product_Backend\SearchProductInfoRequest::createForeignNamesVector($builder, $foreignNames);

        $requestData = \Fb\Product_Backend\SearchProductInfoRequest::createSearchProductInfoRequest($builder, $websiteId, $merchantId, $productClassId, $salesModel, $productType, $merchantSkusOffset, $skusOffset, $namesOffset, $foreignNamesOffset, $status, $productSource, $createdAtBegin, $createdAtEnd, $infoType, $pageIndex, $num);

        $unionData = UnionRequest::createUnionRequest($builder, Command::SearchProductInfoRequest, $requestData);

        $builder->finish($unionData);

        $buf = $builder->dataBuffer();

        return $buf;

    }

}
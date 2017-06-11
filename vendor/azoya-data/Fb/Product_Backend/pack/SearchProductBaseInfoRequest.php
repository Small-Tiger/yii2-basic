<?php
namespace Fb\Product_Backend\pack;

use Fb\Base\BasePack;
use Fb\Product_Backend\Command;
use Fb\Product_Backend\UnionRequest;
use Google\FlatBuffers\FlatbufferBuilder;

/**
 * Created by PhpStorm.
 * User: blake_sha
 * Date: 2016/8/30
 * Time: 15:15
 */
class SearchProductBaseInfoRequest extends BasePack
{

    public static function pack($productClassId, $skus, $barcodes, $names, $foreignNames, $merchantId, $merchantSkus, $pageIndex, $num)
    {
        $builder = new FlatbufferBuilder(1);

        $productClassId = intval($productClassId);
        $pageIndex = intval($pageIndex);
        $num = intval($num);
        $merchantId = intval($merchantId);

        if ($skus && count($skus) > 0) {
            foreach ($skus as $key => $value) {
                $skus[$key] = $builder->createString($value);
            }
        }
        $skusOffset = \Fb\Product_Backend\SearchProductBaseInfoRequest::createSkusVector($builder, $skus);

        if ($barcodes && count($barcodes) > 0) {
            foreach ($barcodes as $key => $value) {
                $barcodes[$key] = $builder->createString($value);
            }
        }
        $barcodesOffset = \Fb\Product_Backend\SearchProductBaseInfoRequest::createBarcodesVector($builder, $barcodes);

        if ($names && count($names) > 0) {
            foreach ($names as $key => $value) {
                $names[$key] = $builder->createString($value);
            }
        }
        $namesOffset = \Fb\Product_Backend\SearchProductBaseInfoRequest::createNamesVector($builder,$names);

        if ($foreignNames && count($foreignNames) > 0) {
            foreach ($foreignNames as $key => $value) {
                $foreignNames[$key] = $builder->createString($value);
            }
        }
        $foreignNamesOffset = \Fb\Product_Backend\SearchProductBaseInfoRequest::createForeignNamesVector($builder,$foreignNames);

        if ($merchantSkus && count($merchantSkus) > 0) {
            foreach ($merchantSkus as $key => $value) {
                $merchantSkus[$key] = $builder->createString($value);
            }
        }
        $merchantSkusOffset =  \Fb\Product_Backend\SearchProductBaseInfoRequest::createMerchantSkusVector($builder,$merchantSkus);

        $requestData = \Fb\Product_Backend\SearchProductBaseInfoRequest::createSearchProductBaseInfoRequest($builder,$productClassId,$skusOffset,$barcodesOffset,$namesOffset,$foreignNamesOffset,$merchantId,$merchantSkusOffset,$pageIndex,$num);


        $unionData = UnionRequest::createUnionRequest($builder,Command::SearchProductBaseInfoRequest,$requestData);

        $builder->finish($unionData);

        $buf = $builder->dataBuffer();

        return $buf;

    }

}
<?php
/**
 * Created by PhpStorm.
 * User: zhengpenglin
 * Date: 2016/09/27
 * Time: 19:25
 */

namespace Fb\Product_Backend\pack;


use Fb\Base\BasePack;
use Fb\Product_Backend\Command;
use Fb\Product_Backend\UnionRequest;
use Google\FlatBuffers\FlatbufferBuilder;

class GetProductInfoRequest extends BasePack
{

    public static function pack($websiteId, $productIds, $infoType)
    {
        $builder = new FlatbufferBuilder(1);

        $websiteId = (int)$websiteId;
        $productIds = array_map(function ($v) {
            return (int)$v;
        }, $productIds);

        $productIdsOffset = \Fb\Product_Backend\GetProductInfoRequest::createProductIdsVector($builder, $productIds);

        $requestData = \Fb\Product_Backend\GetProductInfoRequest::createGetProductInfoRequest($builder, $websiteId, $productIdsOffset, $infoType);

        $unionData = UnionRequest::createUnionRequest($builder, Command::GetProductInfoRequest, $requestData);

        $builder->finish($unionData);

        $buf = $builder->dataBuffer();

        return $buf;

    }
}
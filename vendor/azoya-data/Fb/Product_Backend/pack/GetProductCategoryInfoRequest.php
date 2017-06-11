<?php
/**
 * Created by PhpStorm.
 * User: blake_sha
 * Date: 2016/9/7
 * Time: 18:20
 */

namespace Fb\Product_Backend\pack;


use Fb\Base\BasePack;
use Fb\Product_Backend\Command;
use Fb\Product_Backend\UnionRequest;
use Google\FlatBuffers\FlatbufferBuilder;

class GetProductCategoryInfoRequest extends BasePack
{
    public static function pack($productClassId)
    {
        $builder = new FlatbufferBuilder(1);
        $productClassId = (int)$productClassId;
        $requestData = \Fb\Product_Backend\GetProductCategoryInfoRequest::createGetProductCategoryInfoRequest($builder, $productClassId);
        $unionData = UnionRequest::createUnionRequest($builder,Command::GetProductCategoryInfoRequest,$requestData);
        $builder->finish($unionData);
        $buf = $builder->dataBuffer();
        return $buf;
    }

}
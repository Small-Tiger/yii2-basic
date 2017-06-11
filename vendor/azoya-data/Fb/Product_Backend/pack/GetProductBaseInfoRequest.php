<?php
/**
 * Created by PhpStorm.
 * User: blake_sha
 * Date: 2016/9/2
 * Time: 10:35
 */

namespace Fb\Product_Backend\pack;


use Fb\Base\BasePack;
use Fb\Product_Backend\Command;
use Fb\Product_Backend\UnionRequest;
use Google\FlatBuffers\FlatbufferBuilder;

class GetProductBaseInfoRequest extends BasePack
{

    public static function pack($productIdBase)
    {
        $builder = new FlatbufferBuilder(1);

        $productIdBase = (int) $productIdBase;

        $requestData = \Fb\Product_Backend\GetProductBaseInfoRequest::createGetProductBaseInfoRequest($builder,$productIdBase);

        $unionData = UnionRequest::createUnionRequest($builder,Command::GetProductBaseInfoRequest,$requestData);

        $builder->finish($unionData);

        $buf = $builder->dataBuffer();

        return $buf;

    }
}
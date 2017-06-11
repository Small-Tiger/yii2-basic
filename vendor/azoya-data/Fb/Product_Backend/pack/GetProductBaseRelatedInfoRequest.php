<?php
/**
 * Created by PhpStorm.
 * User: blake_sha
 * Date: 2016/8/30
 * Time: 17:00
 */

namespace Fb\Product_Backend\pack;


use Fb\Base\BasePack;
use Fb\Product_Backend\Command;
use Fb\Product_Backend\UnionRequest;
use Google\FlatBuffers\FlatbufferBuilder;

class GetProductBaseRelatedInfoRequest extends BasePack
{
    public static function pack($productIdBase)
    {
        $builder =  new FlatbufferBuilder(1);
      
        $requestData = \Fb\Product_Backend\GetProductBaseRelatedInfoRequest::createGetProductBaseRelatedInfoRequest($builder,$productIdBase);
        $unionData = UnionRequest::createUnionRequest($builder,Command::GetProductBaseRelatedInfoRequest,$requestData);

        $builder->finish($unionData);

        $buf = $builder->dataBuffer();

        return $buf;

    }


}
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

class GetProductClassIdRequest extends BasePack
{

    public static function pack($barcode)
    {
        $builder = new FlatbufferBuilder(1);

        $barcodeOffset = $builder->createString($barcode);

        $requestData = \Fb\Product_Backend\GetProductClassIdRequest::createGetProductClassIdRequest($builder,$barcodeOffset);

        $unionData = UnionRequest::createUnionRequest($builder,Command::GetProductClassIdRequest,$requestData);

        $builder->finish($unionData);

        $buf = $builder->dataBuffer();

        return $buf;

    }
}
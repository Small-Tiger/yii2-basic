<?php
// automatically generated, do not modify

namespace Fb\BaseProductClass\pack;

use Fb\Base\BasePack;
use \Google\FlatBuffers\FlatbufferBuilder;

class GetProductClassRequest extends BasePack
{

    public static function pack($product_class_ids, $name)
    {

        $builder = new FlatbufferBuilder(1);

        $class_ids = \Fb\BaseProductClass\GetProductClassRequest::createProductClassIdsVector($builder, $product_class_ids);
        $nameoffset = $builder->createString($name);
        $requestData = \Fb\BaseProductClass\GetProductClassRequest::createGetProductClassRequest($builder, $class_ids, $nameoffset);
        $unionData = \Fb\BaseProductClass\UnionRequest::createUnionRequest($builder, \Fb\BaseProductClass\Command::GetProductClassRequest, $requestData);

        $builder->finish($unionData);

        $buf = $builder->dataBuffer();

        return $buf;
    }

}

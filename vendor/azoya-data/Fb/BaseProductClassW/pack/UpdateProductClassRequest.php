<?php

namespace Fb\BaseProductClassW\pack;

use Fb\Base\BasePack;
use \Google\FlatBuffers\FlatbufferBuilder;

class UpdateProductClassRequest extends BasePack
{

    public static function pack($operator_id, $product_class_id, $name)
    {

        $builder = new FlatbufferBuilder(1);

        $nameoffset = $builder->createString($name);

        $requestData = \Fb\BaseProductClassW\UpdateProductClassRequest::createUpdateProductClassRequest($builder, $operator_id, $product_class_id, $nameoffset);

        $unionData = \Fb\BaseProductClassW\UnionRequest::createUnionRequest($builder, \Fb\BaseProductClassW\Command::UpdateProductClassRequest, $requestData);

        $builder->finish($unionData);

        $buf = $builder->dataBuffer();

        return $buf;
    }

}

<?php

namespace Fb\BaseProductClassW\pack;

use Fb\Base\BasePack;
use \Google\FlatBuffers\FlatbufferBuilder;

class DelProductClassRequest extends BasePack
{

    public static function pack($operator_id, $product_class_id)
    {

        $builder = new FlatbufferBuilder(1);

        $requestData = \Fb\BaseProductClassW\DelProductClassRequest::createDelProductClassRequest($builder, $operator_id, $product_class_id);

        $unionData = \Fb\BaseProductClassW\UnionRequest::createUnionRequest($builder, \Fb\BaseProductClassW\Command::DelProductClassRequest, $requestData);

        $builder->finish($unionData);

        $buf = $builder->dataBuffer();

        return $buf;
    }

}

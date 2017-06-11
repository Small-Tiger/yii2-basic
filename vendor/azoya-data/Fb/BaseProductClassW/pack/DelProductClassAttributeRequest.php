<?php

namespace Fb\BaseProductClassW\pack;

use Fb\Base\BasePack;
use \Google\FlatBuffers\FlatbufferBuilder;

class DelProductClassAttributeRequest extends BasePack
{

    public static function pack($operator_id, $product_class_id, $attribute_id)
    {

        $builder = new FlatbufferBuilder(1);

        $requestData = \Fb\BaseProductClassW\DelProductClassAttributeRequest::createDelProductClassAttributeRequest($builder, $operator_id, $product_class_id, $attribute_id);

        $unionData = \Fb\BaseProductClassW\UnionRequest::createUnionRequest($builder, \Fb\BaseProductClassW\Command::DelProductClassAttributeRequest, $requestData);

        $builder->finish($unionData);

        $buf = $builder->dataBuffer();

        return $buf;
    }

}

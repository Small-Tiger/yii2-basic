<?php

namespace Fb\BaseProductClassW\pack;

use Fb\Base\BasePack;
use \Google\FlatBuffers\FlatbufferBuilder;

class UpdateProductClassAttributeSortOrderRequest extends BasePack
{

    public static function pack($operator_id, $product_class_id, $attribute_id, $sort_order)
    {

        $builder = new FlatbufferBuilder(1);

        $requestData = \Fb\BaseProductClassW\UpdateProductClassAttributeSortOrderRequest::createUpdateProductClassAttributeSortOrderRequest($builder, $operator_id, $product_class_id, $attribute_id, $sort_order);

        $unionData = \Fb\BaseProductClassW\UnionRequest::createUnionRequest($builder, \Fb\BaseProductClassW\Command::UpdateProductClassAttributeSortOrderRequest, $requestData);

        $builder->finish($unionData);

        $buf = $builder->dataBuffer();

        return $buf;
    }

}

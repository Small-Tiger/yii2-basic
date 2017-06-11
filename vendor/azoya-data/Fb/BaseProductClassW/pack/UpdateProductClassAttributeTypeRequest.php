<?php

namespace Fb\BaseProductClassW\pack;

use Fb\Base\BasePack;
use \Google\FlatBuffers\FlatbufferBuilder;

class UpdateProductClassAttributeTypeRequest extends BasePack
{

    public static function pack($operator_id, $product_class_id, $attribute_id, $attribute_type, $required_field, $multiple_choice)
    {

        $builder = new FlatbufferBuilder(1);

        $requestData = \Fb\BaseProductClassW\UpdateProductClassAttributeTypeRequest::createUpdateProductClassAttributeTypeRequest($builder, $operator_id, $product_class_id, $attribute_id, $attribute_type, $required_field, $multiple_choice);

        $unionData = \Fb\BaseProductClassW\UnionRequest::createUnionRequest($builder, \Fb\BaseProductClassW\Command::UpdateProductClassAttributeTypeRequest, $requestData);

        $builder->finish($unionData);

        $buf = $builder->dataBuffer();

        return $buf;
    }

}

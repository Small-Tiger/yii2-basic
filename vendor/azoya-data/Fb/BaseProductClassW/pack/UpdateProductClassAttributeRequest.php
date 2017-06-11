<?php

namespace Fb\BaseProductClassW\pack;

use Fb\Base\BasePack;
use \Google\FlatBuffers\FlatbufferBuilder;

class UpdateProductClassAttributeRequest extends BasePack
{

    public static function pack($operator_id, $product_class_id, $attribute_id, $attribute_value_ids = array())
    {

        $builder = new FlatbufferBuilder(1);

        $value_ids = \Fb\BaseProductClassW\UpdateProductClassAttributeRequest::createAttributeValueIdsVector($builder, $attribute_value_ids);

        $requestData = \Fb\BaseProductClassW\UpdateProductClassAttributeRequest::createUpdateProductClassAttributeRequest($builder, $operator_id, $product_class_id, $attribute_id, $value_ids);

        $unionData = \Fb\BaseProductClassW\UnionRequest::createUnionRequest($builder, \Fb\BaseProductClassW\Command::UpdateProductClassAttributeRequest, $requestData);

        $builder->finish($unionData);

        $buf = $builder->dataBuffer();

        return $buf;
    }

}

<?php
// automatically generated, do not modify

namespace Fb\BaseProductClass\pack;

use Fb\Base\BasePack;
use \Google\FlatBuffers\FlatbufferBuilder;

class GetProductClassAttributeAddedToRequest extends BasePack
{

    public static function pack($attribute_id)
    {

        $builder = new FlatbufferBuilder(1);


        $requestData = \Fb\BaseProductClass\GetProductClassAttributeAddedToRequest::createGetProductClassAttributeAddedToRequest($builder, $attribute_id);

        $unionData = \Fb\BaseProductClass\UnionRequest::createUnionRequest($builder, \Fb\BaseProductClass\Command::GetProductClassAttributeAddedToRequest, $requestData);

        $builder->finish($unionData);

        $buf = $builder->dataBuffer();

        return $buf;
    }

}

<?php
// automatically generated, do not modify

namespace Fb\BaseProductClass\pack;

use Fb\Base\BasePack;
use \Google\FlatBuffers\FlatbufferBuilder;

class GetProductClassStatisticsRequest extends BasePack
{

    public static function pack($product_class_id)
    {

        $builder = new FlatbufferBuilder(1);


        $class_ids = \Fb\BaseProductClass\GetProductClassStatisticsRequest::createProductClassIdVector($builder, $product_class_id);

        $requestData = \Fb\BaseProductClass\GetProductClassStatisticsRequest::createGetProductClassStatisticsRequest($builder, $class_ids);

        $unionData = \Fb\BaseProductClass\UnionRequest::createUnionRequest($builder, \Fb\BaseProductClass\Command::GetProductClassStatisticsRequest, $requestData);

        $builder->finish($unionData);

        $buf = $builder->dataBuffer();

        return $buf;
    }

}

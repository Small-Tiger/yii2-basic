<?php
/**
 * Created by PhpStorm.
 * User: htc
 * Date: 2016/4/26
 * Time: 14:32
 */

namespace Fb\BaseAttributesW\pack;


use Fb\Base\BasePack;
use Fb\BaseAttributesW\Command;
use Fb\BaseAttributesW\UnionRequest;
use Google\FlatBuffers\FlatbufferBuilder;

class DelAttributeRequest extends BasePack
{
    public static function  pack($attributeId,$categoryId,$operatorId)
    {
        $builder = new FlatbufferBuilder(1);

        $request = \Fb\BaseAttributesW\DelAttributeRequest::createDelAttributeRequest($builder,$attributeId,$categoryId,$operatorId);

        $unionData = UnionRequest::createUnionRequest($builder,Command::DelAttributeRequest,$request);

        $builder->finish($unionData);

        return $builder->dataBuffer();

    }

}
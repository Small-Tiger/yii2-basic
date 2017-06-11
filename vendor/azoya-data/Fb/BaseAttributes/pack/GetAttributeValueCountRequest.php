<?php
/**
 * Created by PhpStorm.
 * User: htc
 * Date: 2016/4/25
 * Time: 18:54
 */

namespace Fb\BaseAttributes\pack;


use Fb\Base\BasePack;
use Fb\BaseAttributes\Command;
use Fb\Product\UnionRequest;
use Google\FlatBuffers\FlatbufferBuilder;

class GetAttributeValueCountRequest extends BasePack
{
        public static function  pack($categoryId,$attributeIds)
        {
            $builder = new FlatbufferBuilder(1);

            $attributeIds = \Fb\BaseAttributes\GetAttributeValueCountRequest::createAttributeIdVector($builder,$attributeIds);

            $request = \Fb\BaseAttributes\GetAttributeValueCountRequest::createGetAttributeValueCountRequest($builder,$categoryId,$attributeIds);

            $unionData = UnionRequest::createUnionRequest($builder,Command::GetAttributeValueCountRequest,$request);

            $builder->finish($unionData);

            return $builder->dataBuffer();
        }
}
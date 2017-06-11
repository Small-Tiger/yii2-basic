<?php
/**
 * Created by PhpStorm.
 * User: blake
 * Date: 2016/5/3
 * Time: 13:35
 */

namespace Fb\BaseCategoryW\pack;


use Fb\Base\BasePack;
use Fb\BaseCategoryW\Command;
use Fb\BaseCategoryW\UnionRequest;
use Google\FlatBuffers\FlatbufferBuilder;

class DelOperateAttributeMapRequest extends BasePack
{
    public static function pack($operatorId,$websiteId,$categoryId,$productClassId,$attributeId)
    {
        $builder = new FlatbufferBuilder(1);

        $request = \Fb\BaseCategoryW\DelOperateAttributeMapRequest::createDelOperateAttributeMapRequest($builder,intval($operatorId),intval($websiteId),intval($categoryId),intval($productClassId),intval($attributeId));

        $unionData = UnionRequest::createUnionRequest($builder,Command::DelOperateAttributeMapRequest,$request);

        $builder->finish($unionData);

        return $builder->dataBuffer();

    }

}
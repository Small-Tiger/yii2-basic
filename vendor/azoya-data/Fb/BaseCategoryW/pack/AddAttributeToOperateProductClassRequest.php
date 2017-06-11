<?php
/**
 * Created by PhpStorm.
 * User: blake
 * Date: 2016/5/3
 * Time: 11:10
 */

namespace Fb\BaseCategoryW\pack;


use Fb\Base\BasePack;
use Fb\BaseCategoryW\Command;
use Fb\BaseCategoryW\UnionRequest;
use Google\FlatBuffers\FlatbufferBuilder;

class AddAttributeToOperateProductClassRequest extends BasePack
{
    public static function pack($operatorId,$websiteId,$categoryId,$productClassId,$attributeId,$attributeValueIds)
    {
        $builder = new FlatbufferBuilder(1);

        $attributeValueIdsOffset = \Fb\BaseCategoryW\AddAttributeToOperateProductClassRequest::createAttributeValueIdsVector($builder,$attributeValueIds);


        $request = \Fb\BaseCategoryW\AddAttributeToOperateProductClassRequest::createAddAttributeToOperateProductClassRequest($builder,intval($operatorId),intval($websiteId),intval($categoryId),intval($productClassId),intval($attributeId),$attributeValueIdsOffset);

        $unionData = UnionRequest::createUnionRequest($builder,Command::AddAttributeToOperateProductClassRequest,$request);

        $builder->finish($unionData);

        return $builder->dataBuffer();

    }

}
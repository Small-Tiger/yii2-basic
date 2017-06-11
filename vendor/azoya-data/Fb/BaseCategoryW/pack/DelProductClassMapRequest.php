<?php
/**
 * Created by PhpStorm.
 * User: blake
 * Date: 2016/5/3
 * Time: 11:25
 */

namespace Fb\BaseCategoryW\pack;


use Fb\Base\BasePack;
use Fb\BaseAttributesW\UnionRequest;
use Fb\BaseCategoryW\Command;
use Google\FlatBuffers\FlatbufferBuilder;

class DelProductClassMapRequest extends BasePack
{
    public static function pack($operatorId,$websiteId,$categoryId,$productClassId)
    {
        $builder =  new FlatbufferBuilder(1);
        $request = \Fb\BaseCategoryW\DelProductClassMapRequest::createDelProductClassMapRequest($builder,intval($operatorId),intval($websiteId),intval($categoryId),intval($productClassId));
        $unionData = UnionRequest::createUnionRequest($builder,Command::DelProductClassMapRequest,$request);
        $builder->finish($unionData);
        return $builder->dataBuffer();
    }

}
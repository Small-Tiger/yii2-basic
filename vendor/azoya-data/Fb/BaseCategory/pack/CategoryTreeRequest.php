<?php
/**
 * Created by PhpStorm.
 * User: blake_sha
 * Date: 2016/4/27
 * Time: 14:24
 */

namespace Fb\BaseCategory\pack;


use Fb\Base\BasePack;
use Fb\BaseCategory\Command;
use Fb\BaseCategory\UnionRequest;
use Google\FlatBuffers\FlatbufferBuilder;

class CategoryTreeRequest extends BasePack
{
    public static function pack($websiteId,$parentId,$maxLevel,$attributes)
    {
        $builder = new FlatbufferBuilder(1);

        foreach ($attributes as $key=>$value){
            $attributes[$key] = $builder->createString($value);

        }
        $attributesOffset = \Fb\BaseCategory\CategoryTreeRequest::createFieldsVector($builder,$attributes);

        $request = \Fb\BaseCategory\CategoryTreeRequest::createCategoryTreeRequest($builder,intval($websiteId),intval($parentId),intval($maxLevel),$attributesOffset);

        $unionData = UnionRequest::createUnionRequest($builder,Command::CategoryTreeRequest,$request);

        $builder->finish($unionData);

        return $builder->dataBuffer();

    }
}
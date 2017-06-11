<?php
/**
 * Created by PhpStorm.
 * User: blake_sha
 * Date: 2016/4/27
 * Time: 18:13
 */

namespace Fb\BaseCategoryW\pack;


use Fb\Base\BasePack;
use Fb\BaseCategoryW\Command;
use Fb\BaseCategoryW\UnionRequest;
use Google\FlatBuffers\FlatbufferBuilder;

class UpdateCategoryParentRequest extends  BasePack
{
    public static function pack($operatorId,$websiteId,$categoryId,$parentId)
    {
        $builder = new FlatbufferBuilder(1);

        $request = \Fb\BaseCategoryW\UpdateCategoryParentRequest::createUpdateCategoryParentRequest($builder,intval($operatorId),intval($websiteId),intval($categoryId),intval($parentId));

        $unionData = UnionRequest::createUnionRequest($builder,Command::UpdateCategoryParentRequest,$request);

        $builder->finish($unionData);

        return $builder->dataBuffer();

    }

}
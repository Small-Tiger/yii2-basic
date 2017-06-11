<?php
/**
 * Created by PhpStorm.
 * User: blake_sha
 * Date: 2016/5/3
 * Time: 11:18
 */

namespace Fb\BaseCategoryW\pack;


use Fb\Base\BasePack;
use Fb\BaseCategoryW\Command;
use Fb\BaseCategoryW\UnionRequest;
use Google\FlatBuffers\FlatbufferBuilder;

class DelCategoryRequest extends BasePack
{
    public static function pack($operatorId,$websiteId,$categoryId)
    {
        $builder = new FlatbufferBuilder(1);

        $request = \Fb\BaseCategoryW\DelCategoryRequest::createDelCategoryRequest($builder,intval($operatorId),intval($websiteId),intval($categoryId));

        $unionData =  UnionRequest::createUnionRequest($builder,Command::DelCategoryRequest,$request);

        $builder->finish($unionData);

        return $builder->dataBuffer();
    }

}
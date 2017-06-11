<?php
/**
 * Created by PhpStorm.
 * User: blake_sha
 * Date: 2016/4/27
 * Time: 17:16
 */

namespace Fb\BaseCategoryW\pack;


use Fb\Base\BasePack;
use Fb\BaseCategoryW\Command;
use Fb\BaseCategoryW\UnionRequest;
use Google\FlatBuffers\FlatbufferBuilder;

class UpdateCategorySortOrderRequest extends BasePack
{

    public static function pack($operatorId,$websiteId,$categoryId,$sortOrder)
    {
        $builder =  new FlatbufferBuilder(1);

        $request = \Fb\BaseCategoryW\UpdateCategorySortOrderRequest::createUpdateCategorySortOrderRequest($builder,intval($operatorId),intval($websiteId),intval($categoryId),intval($sortOrder));

        $unionData = UnionRequest::createUnionRequest($builder,Command::UpdateCategorySortOrderRequest,$request);

        $builder->finish($unionData);

        return $builder->dataBuffer();

    }
}
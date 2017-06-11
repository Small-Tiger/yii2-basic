<?php
/**
 * Created by PhpStorm.
 * User: blake_sha
 * Date: 2016/4/27
 * Time: 18:04
 */

namespace Fb\BaseCategoryW\pack;


use Fb\Base\BasePack;
use Fb\BaseCategoryW\Command;
use Fb\BaseCategoryW\UnionRequest;
use Google\FlatBuffers\FlatbufferBuilder;

class UpdateProductClassSortOrderRequest extends BasePack
{
    public static function pack($operatorId,$websiteId,$categoryId,$productClassId,$sortOrder)
    {
        $builder = new FlatbufferBuilder(1);

        $request = \Fb\BaseCategoryW\UpdateProductClassSortOrderRequest::createUpdateProductClassSortOrderRequest($builder,$operatorId,$websiteId,$categoryId,$productClassId,$sortOrder);

        $unionData = UnionRequest::createUnionRequest($builder,Command::UpdateProductClassSortOrderRequest,$request);

        $builder->finish($unionData);

        return $builder->dataBuffer();
    }

}
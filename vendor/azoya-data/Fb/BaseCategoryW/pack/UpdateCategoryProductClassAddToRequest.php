<?php
/**
 * Created by PhpStorm.
 * User: blake_sha
 * Date: 2016/5/3
 * Time: 10:59
 */

namespace Fb\BaseCategoryW\pack;


use Fb\Base\BasePack;
use Fb\BaseCategoryW\Command;
use Fb\BaseCategoryW\UnionRequest;
use Google\FlatBuffers\FlatbufferBuilder;

class UpdateCategoryProductClassAddToRequest extends BasePack
{
    public static function pack($operatorId, $websiteId, $productClassIds, $categoryId,$oldCategoryId)
    {
        $builder = new FlatbufferBuilder(1);

        $request = \Fb\BaseCategoryW\UpdateCategoryProductClassAddToRequest::createUpdateCategoryProductClassAddToRequest($builder,intval($operatorId),intval($websiteId),intval($productClassIds),intval($categoryId),intval($oldCategoryId));

        $unionData = UnionRequest::createUnionRequest($builder,Command::UpdateCategoryProductClassAddToRequest,$request);

        $builder->finish($unionData);

        return $builder->dataBuffer();
        
        
    }

}
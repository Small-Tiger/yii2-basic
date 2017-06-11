<?php
/**
 * Created by PhpStorm.
 * User: blake_sha
 * Date: 2016/4/27
 * Time: 18:48
 */

namespace Fb\BaseCategoryW\pack;


use Fb\Base\BasePack;
use Fb\BaseCategoryW\Command;
use Fb\BaseCategoryW\UnionRequest;
use Google\FlatBuffers\FlatbufferBuilder;

class AddProductClassToCategoryRequest extends BasePack
{
    static function pack($operatorId,$websiteId,$categoryId,$productClassIds)
    {
        $builder =  new FlatbufferBuilder(1);

        if($productClassIds){
            foreach ($productClassIds as $key=>$value){
                $productClassIds[$key] = intval($value);
            }
        }

        $productClassIdsOffset = \Fb\BaseCategoryW\AddProductClassToCategoryRequest::createProductClassIdsVector($builder,$productClassIds);

        $request = \Fb\BaseCategoryW\AddProductClassToCategoryRequest::createAddProductClassToCategoryRequest($builder,intval($operatorId),intval($websiteId),intval($categoryId),$productClassIdsOffset);

        $unionData = UnionRequest::createUnionRequest($builder,Command::AddProductClassToCategoryRequest,$request);

        $builder->finish($unionData);

        return $builder->dataBuffer();
    }

}
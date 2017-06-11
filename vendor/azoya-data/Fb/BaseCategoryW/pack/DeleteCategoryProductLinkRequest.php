<?php
/**
 * Created by PhpStorm.
 * User: htc
 * Date: 2017/1/11
 * Time: 16:44
 */

namespace Fb\BaseCategoryW\pack;


use Fb\Base\BasePack;
use Fb\BaseCategoryW\Command;
use Fb\BaseCategoryW\UnionRequest;
use Google\FlatBuffers\FlatbufferBuilder;

class DeleteCategoryProductLinkRequest extends BasePack
{
    public static function pack($webSiteId,$categoryId,$productClassId,$productIds)
    {
        $builder = new FlatbufferBuilder(1);
        $webSiteId = intval($webSiteId);
        $categoryId = intval($categoryId);
        $productClassId = intval($productClassId);
        if(count($productIds)){
            foreach ($productIds as $key=>$value){
                $productIds[$key] = intval($value);
            }
        }
        $productIdsOffset = \Fb\BaseCategoryW\DeleteCategoryProductLinkRequest::createProductIdsVector($builder,$productIds);
        $request = \Fb\BaseCategoryW\DeleteCategoryProductLinkRequest::createDeleteCategoryProductLinkRequest($builder,$webSiteId,$categoryId,$productClassId,$productIdsOffset);
        $unionData = UnionRequest::createUnionRequest($builder,Command::DeleteCategoryProductLinkRequest,$request);
        $builder->finish($unionData);
        return $builder->dataBuffer();
    }

}
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
use Fb\BaseCategoryW\entity\CategoryProductInfo;

class UpdateCategoryProductLinkRequest extends BasePack
{
    public static function pack($webSiteId,$categoryId,$productClassId,$categoryProductInfos)
    {$builder = new FlatbufferBuilder(1);
        $webSiteId = intval($webSiteId);
        $categoryId = intval($categoryId);
        $productClassId = intval($productClassId);

        //组装CategoryProductInfo对象
        $categoryProductInfoOffset=array();
        if($categoryProductInfos&&count($categoryProductInfos)){
            foreach($categoryProductInfos as $key=>$value){
            	$categoryProductInfo=new CategoryProductInfo();
            	$categoryProductInfo->setAttributes($value,false);
            	$categoryProductInfoOffset[]=$categoryProductInfo->generateBuilder($builder);
            }
        }
        
        $categoryProductInfoOffset = \Fb\BaseCategoryW\UpdateCategoryProductLinkRequest::createCategoryProductInfosVector($builder,$categoryProductInfoOffset);
        $request = \Fb\BaseCategoryW\UpdateCategoryProductLinkRequest::createUpdateCategoryProductLinkRequest($builder,$webSiteId,$categoryId,$productClassId,$categoryProductInfoOffset);
        $unionData = UnionRequest::createUnionRequest($builder,Command::UpdateCategoryProductLinkRequest,$request);
        $builder->finish($unionData);
        return $builder->dataBuffer();
    }
}
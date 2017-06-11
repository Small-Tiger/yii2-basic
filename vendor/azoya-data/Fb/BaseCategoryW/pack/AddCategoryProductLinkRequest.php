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

class AddCategoryProductLinkRequest extends BasePack
{
    public static function pack($webSiteId,$categoryId,$productClassId,$categoryProductInfos)
    {
    	$builder = new FlatbufferBuilder(1);
    	
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
        
        $categoryProductInfoOffset = \Fb\BaseCategoryW\AddCategoryProductLinkRequest::createCategoryProductInfosVector($builder,$categoryProductInfoOffset);
        $request = \Fb\BaseCategoryW\AddCategoryProductLinkRequest::createAddCategoryProductLinkRequest($builder,$webSiteId,$categoryId,$productClassId,$categoryProductInfoOffset);
        $unionData = UnionRequest::createUnionRequest($builder,Command::AddCategoryProductLinkRequest,$request);
        $builder->finish($unionData);
        return $builder->dataBuffer();
    }

}
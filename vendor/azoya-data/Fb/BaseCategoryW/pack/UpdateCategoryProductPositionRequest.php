<?php
namespace Fb\BaseCategoryW\pack;

use Fb\Base\BasePack;
use Fb\BaseCategoryW\Command;
use Fb\BaseCategoryW\UnionRequest;
use Google\FlatBuffers\FlatbufferBuilder;
use Fb\BaseCategoryW\entity\CategoryProductInfo;

class UpdateCategoryProductPositionRequest extends BasePack
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

        $categoryProductInfoOffset = \Fb\BaseCategoryW\UpdateCategoryProductPositionRequest::createCategoryProductInfosVector($builder,$categoryProductInfoOffset);
        
        $request = \Fb\BaseCategoryW\UpdateCategoryProductPositionRequest::createUpdateCategoryProductPositionRequest($builder, $webSiteId, $categoryId, $productClassId, $categoryProductInfoOffset);

        $unionData = UnionRequest::createUnionRequest($builder,Command::UpdateCategoryProductPositionRequest,$request);

        $builder->finish($unionData);

        return $builder->dataBuffer();
	}
}
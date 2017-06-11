<?php
/**
 * Created by PhpStorm.
 * User: blake_sha
 * Date: 2017/1/12
 * Time: 15:42
 */

namespace Fb\BaseCategory\pack;

use Fb\Base\BasePack;
use Fb\BaseCategory\Command;
use Fb\BaseCategory\UnionRequest;
use Google\FlatBuffers\FlatbufferBuilder;

class CategoryProductPositionRequest extends BasePack
{
    public static function pack($websiteId, $categoryId, $productClassId,array $productIds)
    {
        $builder = new FlatbufferBuilder(1);

        $websiteId = intval($websiteId);
        $categoryId = intval($categoryId);
        $productClassId = intval($productClassId);
        
        $productIds = array_map(function($v){return intval($v);},$productIds);
        
        $productIdsOffset = \Fb\BaseCategory\CategoryProductPositionRequest::createProductIdsVector($builder,$productIds);
        

        $request = \Fb\BaseCategory\CategoryProductPositionRequest::createCategoryProductPositionRequest($builder,$websiteId,$categoryId,$productClassId,$productIdsOffset);

        $unionData = UnionRequest::createUnionRequest($builder, Command::CategoryProductPositionRequest, $request);

        $builder->finish($unionData);

        return $builder->dataBuffer();
    }

}
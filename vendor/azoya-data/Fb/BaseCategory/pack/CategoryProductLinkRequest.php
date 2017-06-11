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

class CategoryProductLinkRequest extends BasePack
{
    public static function pack($websiteId, $categoryId, $productClassId)
    {
        $builder = new FlatbufferBuilder(1);

        $websiteId = intval($websiteId);
        $categoryId = intval($categoryId);
        $productClassId = intval($productClassId);

        $request = \Fb\BaseCategory\CategoryProductLinkRequest::createCategoryProductLinkRequest($builder,$websiteId,$categoryId,$productClassId);

        $unionData = UnionRequest::createUnionRequest($builder, Command::CategoryProductLinkRequest, $request);

        $builder->finish($unionData);

        return $builder->dataBuffer();
    }

}
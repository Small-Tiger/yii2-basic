<?php
/**
 * Created by PhpStorm.
 * User: htc
 * Date: 2016/10/10
 * Time: 13:57
 */

namespace Fb\BaseCategoryW\entity;


use Fb\Base\BaseEntity;
use Google\FlatBuffers\FlatbufferBuilder;

class CategoryProductInfo extends BaseEntity
{

    public $productId;
    
    public $position;


    public function generateBuilder(FlatbufferBuilder &$builder)
    {
        \Fb\BaseCategoryW\CategoryProductInfo::startCategoryProductInfo($builder);
        \Fb\BaseCategoryW\CategoryProductInfo::addProductId($builder, $this->productId);
        \Fb\BaseCategoryW\CategoryProductInfo::addPosition($builder, $this->position);
        $entity = \Fb\BaseCategoryW\CategoryProductInfo::endCategoryProductInfo($builder);
        return $entity;
    }


}
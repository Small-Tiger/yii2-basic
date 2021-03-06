<?php
// automatically generated, do not modify

namespace Fb\BaseCategory;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class CategoryProductLinkRequest extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return CategoryProductLinkRequest
     */
    public static function getRootAsCategoryProductLinkRequest(ByteBuffer $bb)
    {
        $obj = new CategoryProductLinkRequest();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return CategoryProductLinkRequest
     **/
    public function init($_i, ByteBuffer $_bb)
    {
        $this->bb_pos = $_i;
        $this->bb = $_bb;
        return $this;
    }

    /**
     * @return uint
     */
    public function getWebsiteId()
    {
        $o = $this->__offset(4);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @return uint
     */
    public function getCategoryId()
    {
        $o = $this->__offset(6);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @return uint
     */
    public function getProductClassId()
    {
        $o = $this->__offset(8);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startCategoryProductLinkRequest(FlatBufferBuilder $builder)
    {
        $builder->StartObject(3);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return CategoryProductLinkRequest
     */
    public static function createCategoryProductLinkRequest(FlatBufferBuilder $builder, $website_id, $category_id, $product_class_id)
    {
        $builder->startObject(3);
        self::addWebsiteId($builder, $website_id);
        self::addCategoryId($builder, $category_id);
        self::addProductClassId($builder, $product_class_id);
        $o = $builder->endObject();
        return $o;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addWebsiteId(FlatBufferBuilder $builder, $websiteId)
    {
        $builder->addUintX(0, $websiteId, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addCategoryId(FlatBufferBuilder $builder, $categoryId)
    {
        $builder->addUintX(1, $categoryId, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addProductClassId(FlatBufferBuilder $builder, $productClassId)
    {
        $builder->addUintX(2, $productClassId, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endCategoryProductLinkRequest(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }
}

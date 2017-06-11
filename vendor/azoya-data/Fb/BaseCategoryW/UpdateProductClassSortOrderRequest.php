<?php
// automatically generated, do not modify

namespace Fb\BaseCategoryW;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class UpdateProductClassSortOrderRequest extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return UpdateProductClassSortOrderRequest
     */
    public static function getRootAsUpdateProductClassSortOrderRequest(ByteBuffer $bb)
    {
        $obj = new UpdateProductClassSortOrderRequest();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return UpdateProductClassSortOrderRequest
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
    public function getOperatorId()
    {
        $o = $this->__offset(4);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @return uint
     */
    public function getWebsiteId()
    {
        $o = $this->__offset(6);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @return uint
     */
    public function getCategoryId()
    {
        $o = $this->__offset(8);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @return uint
     */
    public function getProductClassId()
    {
        $o = $this->__offset(10);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @return ushort
     */
    public function getSortOrder()
    {
        $o = $this->__offset(12);
        return $o != 0 ? $this->bb->getUshort($o + $this->bb_pos) : 0;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startUpdateProductClassSortOrderRequest(FlatBufferBuilder $builder)
    {
        $builder->StartObject(5);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return UpdateProductClassSortOrderRequest
     */
    public static function createUpdateProductClassSortOrderRequest(FlatBufferBuilder $builder, $operator_id, $website_id, $category_id, $product_class_id, $sort_order)
    {
        $builder->startObject(5);
        self::addOperatorId($builder, $operator_id);
        self::addWebsiteId($builder, $website_id);
        self::addCategoryId($builder, $category_id);
        self::addProductClassId($builder, $product_class_id);
        self::addSortOrder($builder, $sort_order);
        $o = $builder->endObject();
        return $o;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addOperatorId(FlatBufferBuilder $builder, $operatorId)
    {
        $builder->addUintX(0, $operatorId, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addWebsiteId(FlatBufferBuilder $builder, $websiteId)
    {
        $builder->addUintX(1, $websiteId, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addCategoryId(FlatBufferBuilder $builder, $categoryId)
    {
        $builder->addUintX(2, $categoryId, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addProductClassId(FlatBufferBuilder $builder, $productClassId)
    {
        $builder->addUintX(3, $productClassId, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param ushort
     * @return void
     */
    public static function addSortOrder(FlatBufferBuilder $builder, $sortOrder)
    {
        $builder->addUshortX(4, $sortOrder, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endUpdateProductClassSortOrderRequest(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }
}

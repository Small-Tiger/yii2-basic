<?php
// automatically generated, do not modify

namespace Fb\BaseProductClass;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class ProductClass extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return ProductClass
     */
    public static function getRootAsProductClass(ByteBuffer $bb)
    {
        $obj = new ProductClass();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return ProductClass
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
    public function getProductClassId()
    {
        $o = $this->__offset(4);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    public function getName()
    {
        $o = $this->__offset(6);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
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
     * @return ushort
     */
    public function getSortOrder()
    {
        $o = $this->__offset(10);
        return $o != 0 ? $this->bb->getUshort($o + $this->bb_pos) : 0;
    }

    /**
     * @return uint
     */
    public function getStatus()
    {
        $o = $this->__offset(12);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @return uint
     */
    public function getUpdatedBy()
    {
        $o = $this->__offset(14);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @return uint
     */
    public function getCreatedBy()
    {
        $o = $this->__offset(16);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @return uint
     */
    public function getUpdatedAt()
    {
        $o = $this->__offset(18);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @return uint
     */
    public function getCreatedAt()
    {
        $o = $this->__offset(20);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startProductClass(FlatBufferBuilder $builder)
    {
        $builder->StartObject(9);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return ProductClass
     */
    public static function createProductClass(FlatBufferBuilder $builder, $product_class_id, $name, $category_id, $sort_order, $status, $updated_by, $created_by, $updated_at, $created_at)
    {
        $builder->startObject(9);
        self::addProductClassId($builder, $product_class_id);
        self::addName($builder, $name);
        self::addCategoryId($builder, $category_id);
        self::addSortOrder($builder, $sort_order);
        self::addStatus($builder, $status);
        self::addUpdatedBy($builder, $updated_by);
        self::addCreatedBy($builder, $created_by);
        self::addUpdatedAt($builder, $updated_at);
        self::addCreatedAt($builder, $created_at);
        $o = $builder->endObject();
        return $o;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addProductClassId(FlatBufferBuilder $builder, $productClassId)
    {
        $builder->addUintX(0, $productClassId, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addName(FlatBufferBuilder $builder, $name)
    {
        $builder->addOffsetX(1, $name, 0);
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
     * @param ushort
     * @return void
     */
    public static function addSortOrder(FlatBufferBuilder $builder, $sortOrder)
    {
        $builder->addUshortX(3, $sortOrder, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addStatus(FlatBufferBuilder $builder, $status)
    {
        $builder->addUintX(4, $status, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addUpdatedBy(FlatBufferBuilder $builder, $updatedBy)
    {
        $builder->addUintX(5, $updatedBy, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addCreatedBy(FlatBufferBuilder $builder, $createdBy)
    {
        $builder->addUintX(6, $createdBy, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addUpdatedAt(FlatBufferBuilder $builder, $updatedAt)
    {
        $builder->addUintX(7, $updatedAt, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addCreatedAt(FlatBufferBuilder $builder, $createdAt)
    {
        $builder->addUintX(8, $createdAt, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endProductClass(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }

    public function asArray()
    {
        $array = array();
        $array["product_class_id"] = $this->getProductClassId();
        $array["name"] = $this->getName();
        $array["category_id"] = $this->getCategoryId();
        $array["sort_order"] = $this->getSortOrder();
        $array["status"] = $this->getStatus();
        $array["updated_by"] = $this->getUpdatedBy();
        $array["created_by"] = $this->getCreatedBy();
        $array["updated_at"] = $this->getUpdatedAt();
        $array["created_at"] = $this->getCreatedAt();
        return $array;
    }
}

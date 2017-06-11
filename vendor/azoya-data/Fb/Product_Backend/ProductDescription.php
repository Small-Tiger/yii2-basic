<?php
// automatically generated, do not modify

namespace Fb\Product_Backend;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class ProductDescription extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return ProductDescription
     */
    public static function getRootAsProductDescription(ByteBuffer $bb)
    {
        $obj = new ProductDescription();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return ProductDescription
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
    public function getProductId()
    {
        $o = $this->__offset(4);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    public function getDescription()
    {
        $o = $this->__offset(6);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    public function getForeignDescription()
    {
        $o = $this->__offset(8);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startProductDescription(FlatBufferBuilder $builder)
    {
        $builder->StartObject(3);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return ProductDescription
     */
    public static function createProductDescription(FlatBufferBuilder $builder, $product_id, $description, $foreign_description)
    {
        $builder->startObject(3);
        self::addProductId($builder, $product_id);
        self::addDescription($builder, $description);
        self::addForeignDescription($builder, $foreign_description);
        $o = $builder->endObject();
        return $o;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addProductId(FlatBufferBuilder $builder, $productId)
    {
        $builder->addUintX(0, $productId, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addDescription(FlatBufferBuilder $builder, $description)
    {
        $builder->addOffsetX(1, $description, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addForeignDescription(FlatBufferBuilder $builder, $foreignDescription)
    {
        $builder->addOffsetX(2, $foreignDescription, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endProductDescription(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }

    public function asArray()
    {
        $info = array();
        $info["productId"] = $this->getProductId();
        $info["description"] = $this->getDescription();
        $info["foreignDescription"] = $this->getForeignDescription();
        return $info;
    }
}

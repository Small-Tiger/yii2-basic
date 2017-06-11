<?php
// automatically generated, do not modify

namespace Fb\Product_Backend;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class GetProductBaseRelatedInfoRequest extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return GetProductBaseRelatedInfoRequest
     */
    public static function getRootAsGetProductBaseRelatedInfoRequest(ByteBuffer $bb)
    {
        $obj = new GetProductBaseRelatedInfoRequest();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return GetProductBaseRelatedInfoRequest
     **/
    public function init($_i, ByteBuffer $_bb)
    {
        $this->bb_pos = $_i;
        $this->bb = $_bb;
        return $this;
    }

    /**
     * @return ulong
     */
    public function getProductIdBase()
    {
        $o = $this->__offset(4);
        return $o != 0 ? $this->bb->getUlong($o + $this->bb_pos) : 0;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startGetProductBaseRelatedInfoRequest(FlatBufferBuilder $builder)
    {
        $builder->StartObject(1);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return GetProductBaseRelatedInfoRequest
     */
    public static function createGetProductBaseRelatedInfoRequest(FlatBufferBuilder $builder, $product_id_base)
    {
        $builder->startObject(1);
        self::addProductIdBase($builder, $product_id_base);
        $o = $builder->endObject();
        return $o;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param ulong
     * @return void
     */
    public static function addProductIdBase(FlatBufferBuilder $builder, $productIdBase)
    {
        $builder->addUlongX(0, $productIdBase, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endGetProductBaseRelatedInfoRequest(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }
}

<?php
// automatically generated, do not modify

namespace Fb\BaseProductClass;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class GetProductClassRequest extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return GetProductClassRequest
     */
    public static function getRootAsGetProductClassRequest(ByteBuffer $bb)
    {
        $obj = new GetProductClassRequest();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return GetProductClassRequest
     **/
    public function init($_i, ByteBuffer $_bb)
    {
        $this->bb_pos = $_i;
        $this->bb = $_bb;
        return $this;
    }

    /**
     * @param int offset
     * @return uint
     */
    public function getProductClassIds($j)
    {
        $o = $this->__offset(4);
        return $o != 0 ? $this->bb->getUint($this->__vector($o) + $j * 4) : 0;
    }

    /**
     * @return int
     */
    public function getProductClassIdsLength()
    {
        $o = $this->__offset(4);
        return $o != 0 ? $this->__vector_len($o) : 0;
    }

    public function getName()
    {
        $o = $this->__offset(6);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startGetProductClassRequest(FlatBufferBuilder $builder)
    {
        $builder->StartObject(2);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return GetProductClassRequest
     */
    public static function createGetProductClassRequest(FlatBufferBuilder $builder, $product_class_ids, $name)
    {
        $builder->startObject(2);
        self::addProductClassIds($builder, $product_class_ids);
        self::addName($builder, $name);
        $o = $builder->endObject();
        return $o;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param VectorOffset
     * @return void
     */
    public static function addProductClassIds(FlatBufferBuilder $builder, $productClassIds)
    {
        $builder->addOffsetX(0, $productClassIds, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param array offset array
     * @return int vector offset
     */
    public static function createProductClassIdsVector(FlatBufferBuilder $builder, array $data)
    {
        $builder->startVector(4, count($data), 4);
        for ($i = count($data) - 1; $i >= 0; $i--) {
            $builder->addUint($data[$i]);
        }
        return $builder->endVector();
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param int $numElems
     * @return void
     */
    public static function startProductClassIdsVector(FlatBufferBuilder $builder, $numElems)
    {
        $builder->startVector(4, $numElems, 4);
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
     * @return int table offset
     */
    public static function endGetProductClassRequest(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }
}

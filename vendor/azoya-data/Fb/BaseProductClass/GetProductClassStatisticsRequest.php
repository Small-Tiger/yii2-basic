<?php
// automatically generated, do not modify

namespace Fb\BaseProductClass;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class GetProductClassStatisticsRequest extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return GetProductClassStatisticsRequest
     */
    public static function getRootAsGetProductClassStatisticsRequest(ByteBuffer $bb)
    {
        $obj = new GetProductClassStatisticsRequest();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return GetProductClassStatisticsRequest
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
    public function getProductClassId($j)
    {
        $o = $this->__offset(4);
        return $o != 0 ? $this->bb->getUint($this->__vector($o) + $j * 4) : 0;
    }

    /**
     * @return int
     */
    public function getProductClassIdLength()
    {
        $o = $this->__offset(4);
        return $o != 0 ? $this->__vector_len($o) : 0;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startGetProductClassStatisticsRequest(FlatBufferBuilder $builder)
    {
        $builder->StartObject(1);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return GetProductClassStatisticsRequest
     */
    public static function createGetProductClassStatisticsRequest(FlatBufferBuilder $builder, $product_class_id)
    {
        $builder->startObject(1);
        self::addProductClassId($builder, $product_class_id);
        $o = $builder->endObject();
        return $o;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param VectorOffset
     * @return void
     */
    public static function addProductClassId(FlatBufferBuilder $builder, $productClassId)
    {
        $builder->addOffsetX(0, $productClassId, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param array offset array
     * @return int vector offset
     */
    public static function createProductClassIdVector(FlatBufferBuilder $builder, array $data)
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
    public static function startProductClassIdVector(FlatBufferBuilder $builder, $numElems)
    {
        $builder->startVector(4, $numElems, 4);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endGetProductClassStatisticsRequest(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }
}

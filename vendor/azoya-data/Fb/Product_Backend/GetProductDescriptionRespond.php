<?php
// automatically generated, do not modify

namespace Fb\Product_Backend;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class GetProductDescriptionRespond extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return GetProductDescriptionRespond
     */
    public static function getRootAsGetProductDescriptionRespond(ByteBuffer $bb)
    {
        $obj = new GetProductDescriptionRespond();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return GetProductDescriptionRespond
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
    public function getCode()
    {
        $o = $this->__offset(4);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    public function getErrMsg()
    {
        $o = $this->__offset(6);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    /**
     * @returnVectorOffset
     */
    public function getProductDescriptions($j)
    {
        $o = $this->__offset(8);
        $obj = new ProductDescription();
        return $o != 0 ? $obj->init($this->__indirect($this->__vector($o) + $j * 4), $this->bb) : null;
    }

    /**
     * @return int
     */
    public function getProductDescriptionsLength()
    {
        $o = $this->__offset(8);
        return $o != 0 ? $this->__vector_len($o) : 0;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startGetProductDescriptionRespond(FlatBufferBuilder $builder)
    {
        $builder->StartObject(3);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return GetProductDescriptionRespond
     */
    public static function createGetProductDescriptionRespond(FlatBufferBuilder $builder, $code, $err_msg, $product_descriptions)
    {
        $builder->startObject(3);
        self::addCode($builder, $code);
        self::addErrMsg($builder, $err_msg);
        self::addProductDescriptions($builder, $product_descriptions);
        $o = $builder->endObject();
        return $o;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addCode(FlatBufferBuilder $builder, $code)
    {
        $builder->addUintX(0, $code, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addErrMsg(FlatBufferBuilder $builder, $errMsg)
    {
        $builder->addOffsetX(1, $errMsg, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param VectorOffset
     * @return void
     */
    public static function addProductDescriptions(FlatBufferBuilder $builder, $productDescriptions)
    {
        $builder->addOffsetX(2, $productDescriptions, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param array offset array
     * @return int vector offset
     */
    public static function createProductDescriptionsVector(FlatBufferBuilder $builder, array $data)
    {
        $builder->startVector(4, count($data), 4);
        for ($i = count($data) - 1; $i >= 0; $i--) {
            $builder->addOffset($data[$i]);
        }
        return $builder->endVector();
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param int $numElems
     * @return void
     */
    public static function startProductDescriptionsVector(FlatBufferBuilder $builder, $numElems)
    {
        $builder->startVector(4, $numElems, 4);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endGetProductDescriptionRespond(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }
}

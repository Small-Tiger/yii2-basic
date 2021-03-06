<?php
// automatically generated, do not modify

namespace Fb\Product_Backend;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class SearchProductBaseInfoRespond extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return SearchProductBaseInfoRespond
     */
    public static function getRootAsSearchProductBaseInfoRespond(ByteBuffer $bb)
    {
        $obj = new SearchProductBaseInfoRespond();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return SearchProductBaseInfoRespond
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
     * @return uint
     */
    public function getResultTotalAmount()
    {
        $o = $this->__offset(8);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @returnVectorOffset
     */
    public function getProductBaseAndAttributeInfos($j)
    {
        $o = $this->__offset(10);
        $obj = new ProductBaseAndAttributeInfo();
        return $o != 0 ? $obj->init($this->__indirect($this->__vector($o) + $j * 4), $this->bb) : null;
    }

    /**
     * @return int
     */
    public function getProductBaseAndAttributeInfosLength()
    {
        $o = $this->__offset(10);
        return $o != 0 ? $this->__vector_len($o) : 0;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startSearchProductBaseInfoRespond(FlatBufferBuilder $builder)
    {
        $builder->StartObject(4);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return SearchProductBaseInfoRespond
     */
    public static function createSearchProductBaseInfoRespond(FlatBufferBuilder $builder, $code, $err_msg, $result_total_amount, $product_base_and_attribute_infos)
    {
        $builder->startObject(4);
        self::addCode($builder, $code);
        self::addErrMsg($builder, $err_msg);
        self::addResultTotalAmount($builder, $result_total_amount);
        self::addProductBaseAndAttributeInfos($builder, $product_base_and_attribute_infos);
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
     * @param uint
     * @return void
     */
    public static function addResultTotalAmount(FlatBufferBuilder $builder, $resultTotalAmount)
    {
        $builder->addUintX(2, $resultTotalAmount, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param VectorOffset
     * @return void
     */
    public static function addProductBaseAndAttributeInfos(FlatBufferBuilder $builder, $productBaseAndAttributeInfos)
    {
        $builder->addOffsetX(3, $productBaseAndAttributeInfos, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param array offset array
     * @return int vector offset
     */
    public static function createProductBaseAndAttributeInfosVector(FlatBufferBuilder $builder, array $data)
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
    public static function startProductBaseAndAttributeInfosVector(FlatBufferBuilder $builder, $numElems)
    {
        $builder->startVector(4, $numElems, 4);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endSearchProductBaseInfoRespond(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }
}

<?php
// automatically generated, do not modify

namespace Fb\Product;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class UnionProductRequest extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return UnionProductRequest
     */
    public static function getRootAsUnionProductRequest(ByteBuffer $bb)
    {
        $obj = new UnionProductRequest();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return UnionProductRequest
     **/
    public function init($_i, ByteBuffer $_bb)
    {
        $this->bb_pos = $_i;
        $this->bb = $_bb;
        return $this;
    }

    /**
     * @return byte
     */
    public function getCmdType()
    {
        $o = $this->__offset(4);
        return $o != 0 ? $this->bb->getByte($o + $this->bb_pos) : \Fb\Product\Command::NONE;
    }

    /**
     * @returnint
     */
    public function getCmd($obj)
    {
        $o = $this->__offset(6);
        return $o != 0 ? $this->__union($obj, $o) : null;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startUnionProductRequest(FlatBufferBuilder $builder)
    {
        $builder->StartObject(2);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return UnionProductRequest
     */
    public static function createUnionProductRequest(FlatBufferBuilder $builder, $cmd_type, $cmd)
    {
        $builder->startObject(2);
        self::addCmdType($builder, $cmd_type);
        self::addCmd($builder, $cmd);
        $o = $builder->endObject();
        return $o;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param byte
     * @return void
     */
    public static function addCmdType(FlatBufferBuilder $builder, $cmdType)
    {
        $builder->addByteX(0, $cmdType, 0);
    }

    public static function addCmd(FlatBufferBuilder $builder, $offset)
    {
        $builder->addOffsetX(1, $offset, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endUnionProductRequest(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }

    public static function finishUnionProductRequestBuffer(FlatBufferBuilder $builder, $offset)
    {
        $builder->finish($offset);
    }
}

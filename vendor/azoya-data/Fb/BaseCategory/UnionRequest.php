<?php
// automatically generated, do not modify

namespace Fb\BaseCategory;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class UnionRequest extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return UnionRequest
     */
    public static function getRootAsUnionRequest(ByteBuffer $bb)
    {
        $obj = new UnionRequest();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return UnionRequest
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
        return $o != 0 ? $this->bb->getByte($o + $this->bb_pos) : \Fb\BaseCategory\Command::NONE;
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
    public static function startUnionRequest(FlatBufferBuilder $builder)
    {
        $builder->StartObject(2);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return UnionRequest
     */
    public static function createUnionRequest(FlatBufferBuilder $builder, $cmd_type, $cmd)
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
    public static function endUnionRequest(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }

    public static function finishUnionRequestBuffer(FlatBufferBuilder $builder, $offset)
    {
        $builder->finish($offset);
    }
}

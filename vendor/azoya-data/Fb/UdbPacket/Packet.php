<?php
// automatically generated, do not modify

namespace Fb\UdbPacket;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class Packet extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return Packet
     */
    public static function getRootAsPacket(ByteBuffer $bb)
    {
        $obj = new Packet();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return Packet
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
    public function getSeqNum()
    {
        $o = $this->__offset(4);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    public function getData()
    {
        $o = $this->__offset(6);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startPacket(FlatBufferBuilder $builder)
    {
        $builder->StartObject(2);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return Packet
     */
    public static function createPacket(FlatBufferBuilder $builder, $seq_num, $data)
    {
        $builder->startObject(2);
        self::addSeqNum($builder, $seq_num);
        self::addData($builder, $data);
        $o = $builder->endObject();
        return $o;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addSeqNum(FlatBufferBuilder $builder, $seqNum)
    {
        $builder->addUintX(0, $seqNum, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addData(FlatBufferBuilder $builder, $data)
    {
        $builder->addOffsetX(1, $data, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endPacket(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }

    public static function finishPacketBuffer(FlatBufferBuilder $builder, $offset)
    {
        $builder->finish($offset);
    }
}

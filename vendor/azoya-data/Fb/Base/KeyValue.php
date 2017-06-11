<?php
// automatically generated, do not modify

namespace Fb\Base;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class KeyValue extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return KeyValue
     */
    public static function getRootAsKeyValue(ByteBuffer $bb)
    {
        $obj = new KeyValue();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return KeyValue
     **/
    public function init($_i, ByteBuffer $_bb)
    {
        $this->bb_pos = $_i;
        $this->bb = $_bb;
        return $this;
    }

    public function getK()
    {
        $o = $this->__offset(4);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    public function getV()
    {
        $o = $this->__offset(6);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startKeyValue(FlatBufferBuilder $builder)
    {
        $builder->StartObject(2);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return KeyValue
     */
    public static function createKeyValue(FlatBufferBuilder $builder, $k, $v)
    {
        $builder->startObject(2);
        self::addK($builder, $k);
        self::addV($builder, $v);
        $o = $builder->endObject();
        $builder->required($o, 4);  // k
        return $o;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addK(FlatBufferBuilder $builder, $k)
    {
        $builder->addOffsetX(0, $k, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addV(FlatBufferBuilder $builder, $v)
    {
        $builder->addOffsetX(1, $v, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endKeyValue(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        $builder->required($o, 4);  // k
        return $o;
    }
}

<?php
// automatically generated, do not modify

namespace Fb\Product;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class ConfigAttr extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return ConfigAttr
     */
    public static function getRootAsConfigAttr(ByteBuffer $bb)
    {
        $obj = new ConfigAttr();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return ConfigAttr
     **/
    public function init($_i, ByteBuffer $_bb)
    {
        $this->bb_pos = $_i;
        $this->bb = $_bb;
        return $this;
    }

    public function getAttrLabel()
    {
        $o = $this->__offset(4);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    public function getAttrCode()
    {
        $o = $this->__offset(6);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startConfigAttr(FlatBufferBuilder $builder)
    {
        $builder->StartObject(2);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return ConfigAttr
     */
    public static function createConfigAttr(FlatBufferBuilder $builder, $attr_label, $attr_code)
    {
        $builder->startObject(2);
        self::addAttrLabel($builder, $attr_label);
        self::addAttrCode($builder, $attr_code);
        $o = $builder->endObject();
        return $o;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addAttrLabel(FlatBufferBuilder $builder, $attrLabel)
    {
        $builder->addOffsetX(0, $attrLabel, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addAttrCode(FlatBufferBuilder $builder, $attrCode)
    {
        $builder->addOffsetX(1, $attrCode, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endConfigAttr(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }
}

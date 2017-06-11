<?php
// automatically generated, do not modify

namespace Fb\BaseAttributes;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class AttributeValue extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return AttributeValue
     */
    public static function getRootAsAttributeValue(ByteBuffer $bb)
    {
        $obj = new AttributeValue();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return AttributeValue
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
    public function getAttributeValueId()
    {
        $o = $this->__offset(4);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    public function getValue()
    {
        $o = $this->__offset(6);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startAttributeValue(FlatBufferBuilder $builder)
    {
        $builder->StartObject(2);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return AttributeValue
     */
    public static function createAttributeValue(FlatBufferBuilder $builder, $attribute_value_id, $value)
    {
        $builder->startObject(2);
        self::addAttributeValueId($builder, $attribute_value_id);
        self::addValue($builder, $value);
        $o = $builder->endObject();
        return $o;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addAttributeValueId(FlatBufferBuilder $builder, $attributeValueId)
    {
        $builder->addUintX(0, $attributeValueId, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addValue(FlatBufferBuilder $builder, $value)
    {
        $builder->addOffsetX(1, $value, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endAttributeValue(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }
}

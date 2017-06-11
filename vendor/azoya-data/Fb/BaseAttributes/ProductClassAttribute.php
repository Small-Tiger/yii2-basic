<?php
// automatically generated, do not modify

namespace Fb\BaseAttributes;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class ProductClassAttribute extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return ProductClassAttribute
     */
    public static function getRootAsProductClassAttribute(ByteBuffer $bb)
    {
        $obj = new ProductClassAttribute();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return ProductClassAttribute
     **/
    public function init($_i, ByteBuffer $_bb)
    {
        $this->bb_pos = $_i;
        $this->bb = $_bb;
        return $this;
    }

    /**
     * @return sbyte
     */
    public function getAttributeType()
    {
        $o = $this->__offset(4);
        return $o != 0 ? $this->bb->getSbyte($o + $this->bb_pos) : \Fb\BaseAttributes\AttributeType::Other;
    }

    /**
     * @return ushort
     */
    public function getSortOrder()
    {
        $o = $this->__offset(6);
        return $o != 0 ? $this->bb->getUshort($o + $this->bb_pos) : 0;
    }

    public function getAttributes()
    {
        $obj = new Attribute();
        $o = $this->__offset(8);
        return $o != 0 ? $obj->init($this->__indirect($o + $this->bb_pos), $this->bb) : 0;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startProductClassAttribute(FlatBufferBuilder $builder)
    {
        $builder->StartObject(3);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return ProductClassAttribute
     */
    public static function createProductClassAttribute(FlatBufferBuilder $builder, $attribute_type, $sort_order, $attributes)
    {
        $builder->startObject(3);
        self::addAttributeType($builder, $attribute_type);
        self::addSortOrder($builder, $sort_order);
        self::addAttributes($builder, $attributes);
        $o = $builder->endObject();
        return $o;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param sbyte
     * @return void
     */
    public static function addAttributeType(FlatBufferBuilder $builder, $attributeType)
    {
        $builder->addSbyteX(0, $attributeType, 3);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param ushort
     * @return void
     */
    public static function addSortOrder(FlatBufferBuilder $builder, $sortOrder)
    {
        $builder->addUshortX(1, $sortOrder, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param int
     * @return void
     */
    public static function addAttributes(FlatBufferBuilder $builder, $attributes)
    {
        $builder->addOffsetX(2, $attributes, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endProductClassAttribute(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }
}

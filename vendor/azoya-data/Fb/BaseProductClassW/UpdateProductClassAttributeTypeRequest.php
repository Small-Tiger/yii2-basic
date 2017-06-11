<?php
// automatically generated, do not modify

namespace Fb\BaseProductClassW;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class UpdateProductClassAttributeTypeRequest extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return UpdateProductClassAttributeTypeRequest
     */
    public static function getRootAsUpdateProductClassAttributeTypeRequest(ByteBuffer $bb)
    {
        $obj = new UpdateProductClassAttributeTypeRequest();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return UpdateProductClassAttributeTypeRequest
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
    public function getOperatorId()
    {
        $o = $this->__offset(4);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @return uint
     */
    public function getProductClassId()
    {
        $o = $this->__offset(6);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @return uint
     */
    public function getAttributeId()
    {
        $o = $this->__offset(8);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @return sbyte
     */
    public function getAttributeType()
    {
        $o = $this->__offset(10);
        return $o != 0 ? $this->bb->getSbyte($o + $this->bb_pos) : \Fb\BaseProductClassW\AttributeType::Other;
    }

    /**
     * @return bool
     */
    public function getRequiredField()
    {
        $o = $this->__offset(12);
        return $o != 0 ? $this->bb->getBool($o + $this->bb_pos) : false;
    }

    /**
     * @return bool
     */
    public function getMultipleChoice()
    {
        $o = $this->__offset(14);
        return $o != 0 ? $this->bb->getBool($o + $this->bb_pos) : false;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startUpdateProductClassAttributeTypeRequest(FlatBufferBuilder $builder)
    {
        $builder->StartObject(6);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return UpdateProductClassAttributeTypeRequest
     */
    public static function createUpdateProductClassAttributeTypeRequest(FlatBufferBuilder $builder, $operator_id, $product_class_id, $attribute_id, $attribute_type, $required_field, $multiple_choice)
    {
        $builder->startObject(6);
        self::addOperatorId($builder, $operator_id);
        self::addProductClassId($builder, $product_class_id);
        self::addAttributeId($builder, $attribute_id);
        self::addAttributeType($builder, $attribute_type);
        self::addRequiredField($builder, $required_field);
        self::addMultipleChoice($builder, $multiple_choice);
        $o = $builder->endObject();
        return $o;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addOperatorId(FlatBufferBuilder $builder, $operatorId)
    {
        $builder->addUintX(0, $operatorId, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addProductClassId(FlatBufferBuilder $builder, $productClassId)
    {
        $builder->addUintX(1, $productClassId, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addAttributeId(FlatBufferBuilder $builder, $attributeId)
    {
        $builder->addUintX(2, $attributeId, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param sbyte
     * @return void
     */
    public static function addAttributeType(FlatBufferBuilder $builder, $attributeType)
    {
        $builder->addSbyteX(3, $attributeType, 3);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param bool
     * @return void
     */
    public static function addRequiredField(FlatBufferBuilder $builder, $requiredField)
    {
        $builder->addBoolX(4, $requiredField, false);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param bool
     * @return void
     */
    public static function addMultipleChoice(FlatBufferBuilder $builder, $multipleChoice)
    {
        $builder->addBoolX(5, $multipleChoice, false);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endUpdateProductClassAttributeTypeRequest(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }
}

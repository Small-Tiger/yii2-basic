<?php
// automatically generated, do not modify

namespace Fb\BaseAttributes;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class Attribute extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return Attribute
     */
    public static function getRootAsAttribute(ByteBuffer $bb)
    {
        $obj = new Attribute();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return Attribute
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
    public function getAttributeId()
    {
        $o = $this->__offset(4);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    public function getName()
    {
        $o = $this->__offset(6);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    /**
     * @returnVectorOffset
     */
    public function getValues($j)
    {
        $o = $this->__offset(8);
        $obj = new AttributeValue();
        return $o != 0 ? $obj->init($this->__indirect($this->__vector($o) + $j * 4), $this->bb) : null;
    }

    /**
     * @return int
     */
    public function getValuesLength()
    {
        $o = $this->__offset(8);
        return $o != 0 ? $this->__vector_len($o) : 0;
    }

    /**
     * @return uint
     */
    public function getUpdatedBy()
    {
        $o = $this->__offset(10);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @return uint
     */
    public function getCreatedBy()
    {
        $o = $this->__offset(12);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @return uint
     */
    public function getUpdatedAt()
    {
        $o = $this->__offset(14);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @return uint
     */
    public function getCreatedAt()
    {
        $o = $this->__offset(16);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @return bool
     */
    public function getRequiredField()
    {
        $o = $this->__offset(18);
        return $o != 0 ? $this->bb->getBool($o + $this->bb_pos) : false;
    }

    /**
     * @return bool
     */
    public function getMultipleChoice()
    {
        $o = $this->__offset(20);
        return $o != 0 ? $this->bb->getBool($o + $this->bb_pos) : false;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startAttribute(FlatBufferBuilder $builder)
    {
        $builder->StartObject(9);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return Attribute
     */
    public static function createAttribute(FlatBufferBuilder $builder, $attribute_id, $name, $values, $updated_by, $created_by, $updated_at, $created_at, $required_field, $multiple_choice)
    {
        $builder->startObject(9);
        self::addAttributeId($builder, $attribute_id);
        self::addName($builder, $name);
        self::addValues($builder, $values);
        self::addUpdatedBy($builder, $updated_by);
        self::addCreatedBy($builder, $created_by);
        self::addUpdatedAt($builder, $updated_at);
        self::addCreatedAt($builder, $created_at);
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
    public static function addAttributeId(FlatBufferBuilder $builder, $attributeId)
    {
        $builder->addUintX(0, $attributeId, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addName(FlatBufferBuilder $builder, $name)
    {
        $builder->addOffsetX(1, $name, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param VectorOffset
     * @return void
     */
    public static function addValues(FlatBufferBuilder $builder, $values)
    {
        $builder->addOffsetX(2, $values, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param array offset array
     * @return int vector offset
     */
    public static function createValuesVector(FlatBufferBuilder $builder, array $data)
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
    public static function startValuesVector(FlatBufferBuilder $builder, $numElems)
    {
        $builder->startVector(4, $numElems, 4);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addUpdatedBy(FlatBufferBuilder $builder, $updatedBy)
    {
        $builder->addUintX(3, $updatedBy, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addCreatedBy(FlatBufferBuilder $builder, $createdBy)
    {
        $builder->addUintX(4, $createdBy, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addUpdatedAt(FlatBufferBuilder $builder, $updatedAt)
    {
        $builder->addUintX(5, $updatedAt, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addCreatedAt(FlatBufferBuilder $builder, $createdAt)
    {
        $builder->addUintX(6, $createdAt, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param bool
     * @return void
     */
    public static function addRequiredField(FlatBufferBuilder $builder, $requiredField)
    {
        $builder->addBoolX(7, $requiredField, false);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param bool
     * @return void
     */
    public static function addMultipleChoice(FlatBufferBuilder $builder, $multipleChoice)
    {
        $builder->addBoolX(8, $multipleChoice, false);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endAttribute(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }


    public function asArray()
    {
        $attribute = array();
        $attribute['attributeId'] = $this->getAttributeId();
        $attribute['name'] = $this->getName();
        $attribute['updatedBy'] = $this->getUpdatedBy();
        $attribute['createdBy'] = $this->getCreatedBy();
        $attribute['updatedAt'] = $this->getUpdatedAt();
        $attribute['createdAt'] = $this->getCreatedAt();
        $attribute['requiredField'] = $this->getRequiredField();
        $attribute['multipleChoice'] = $this->getMultipleChoice();
        return $attribute;

    }
}

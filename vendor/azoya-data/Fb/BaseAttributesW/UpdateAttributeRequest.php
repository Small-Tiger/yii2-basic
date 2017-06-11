<?php
// automatically generated, do not modify

namespace Fb\BaseAttributesW;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class UpdateAttributeRequest extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return UpdateAttributeRequest
     */
    public static function getRootAsUpdateAttributeRequest(ByteBuffer $bb)
    {
        $obj = new UpdateAttributeRequest();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return UpdateAttributeRequest
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
     * @param int offset
     * @return string
     */
    public function getValues($j)
    {
        $o = $this->__offset(8);
        return $o != 0 ? $this->__string($this->__vector($o) + $j * 4) : 0;
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
    public function getCategoryId()
    {
        $o = $this->__offset(10);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @return uint
     */
    public function getOperatorId()
    {
        $o = $this->__offset(12);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startUpdateAttributeRequest(FlatBufferBuilder $builder)
    {
        $builder->StartObject(5);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return UpdateAttributeRequest
     */
    public static function createUpdateAttributeRequest(FlatBufferBuilder $builder, $attribute_id, $name, $values, $category_id, $operator_id)
    {
        $builder->startObject(5);
        self::addAttributeId($builder, $attribute_id);
        self::addName($builder, $name);
        self::addValues($builder, $values);
        self::addCategoryId($builder, $category_id);
        self::addOperatorId($builder, $operator_id);
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
    public static function addCategoryId(FlatBufferBuilder $builder, $categoryId)
    {
        $builder->addUintX(3, $categoryId, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addOperatorId(FlatBufferBuilder $builder, $operatorId)
    {
        $builder->addUintX(4, $operatorId, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endUpdateAttributeRequest(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }
}

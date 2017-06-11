<?php
// automatically generated, do not modify

namespace Fb\Product_Backend;

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
    public function getAttributeId()
    {
        $o = $this->__offset(4);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    public function getAttributeName()
    {
        $o = $this->__offset(6);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    /**
     * @return uint
     */
    public function getAttributeType()
    {
        $o = $this->__offset(8);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @param int offset
     * @return uint
     */
    public function getValueIds($j)
    {
        $o = $this->__offset(10);
        return $o != 0 ? $this->bb->getUint($this->__vector($o) + $j * 4) : 0;
    }

    /**
     * @return int
     */
    public function getValueIdsLength()
    {
        $o = $this->__offset(10);
        return $o != 0 ? $this->__vector_len($o) : 0;
    }

    /**
     * @param int offset
     * @return string
     */
    public function getValues($j)
    {
        $o = $this->__offset(12);
        return $o != 0 ? $this->__string($this->__vector($o) + $j * 4) : 0;
    }

    /**
     * @return int
     */
    public function getValuesLength()
    {
        $o = $this->__offset(12);
        return $o != 0 ? $this->__vector_len($o) : 0;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startAttributeValue(FlatBufferBuilder $builder)
    {
        $builder->StartObject(5);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return AttributeValue
     */
    public static function createAttributeValue(FlatBufferBuilder $builder, $attribute_id, $attribute_name, $attribute_type, $value_ids, $values)
    {
        $builder->startObject(5);
        self::addAttributeId($builder, $attribute_id);
        self::addAttributeName($builder, $attribute_name);
        self::addAttributeType($builder, $attribute_type);
        self::addValueIds($builder, $value_ids);
        self::addValues($builder, $values);
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
    public static function addAttributeName(FlatBufferBuilder $builder, $attributeName)
    {
        $builder->addOffsetX(1, $attributeName, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addAttributeType(FlatBufferBuilder $builder, $attributeType)
    {
        $builder->addUintX(2, $attributeType, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param VectorOffset
     * @return void
     */
    public static function addValueIds(FlatBufferBuilder $builder, $valueIds)
    {
        $builder->addOffsetX(3, $valueIds, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param array offset array
     * @return int vector offset
     */
    public static function createValueIdsVector(FlatBufferBuilder $builder, array $data)
    {
        $builder->startVector(4, count($data), 4);
        for ($i = count($data) - 1; $i >= 0; $i--) {
            $builder->addUint($data[$i]);
        }
        return $builder->endVector();
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param int $numElems
     * @return void
     */
    public static function startValueIdsVector(FlatBufferBuilder $builder, $numElems)
    {
        $builder->startVector(4, $numElems, 4);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param VectorOffset
     * @return void
     */
    public static function addValues(FlatBufferBuilder $builder, $values)
    {
        $builder->addOffsetX(4, $values, 0);
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
     * @return int table offset
     */
    public static function endAttributeValue(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }


    public function asArray()
    {
        $array = array();
        $array['attributeId']=  $this->getAttributeId();
        $array['attributeName']= $this->getAttributeName();
        $array['attributeType']= $this->getAttributeType();
        $idLength = $this->getValueIdsLength();
        for ($i = 0;$i<$idLength;$i++){
            $array['valueIds'][$i] = $this->getValueIds($i);
        }
        $valueLength = $this->getValueIdsLength();
        for($i=0;$i<$valueLength;$i++){
            $array['values'][$i] = $this->getValues($i);
        }
        return $array;
    }
}

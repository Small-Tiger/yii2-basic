<?php
// automatically generated, do not modify

namespace Fb\BaseProductClassW;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class UpdateProductClassAttributeRequest extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return UpdateProductClassAttributeRequest
     */
    public static function getRootAsUpdateProductClassAttributeRequest(ByteBuffer $bb)
    {
        $obj = new UpdateProductClassAttributeRequest();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return UpdateProductClassAttributeRequest
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
     * @param int offset
     * @return uint
     */
    public function getAttributeValueIds($j)
    {
        $o = $this->__offset(10);
        return $o != 0 ? $this->bb->getUint($this->__vector($o) + $j * 4) : 0;
    }

    /**
     * @return int
     */
    public function getAttributeValueIdsLength()
    {
        $o = $this->__offset(10);
        return $o != 0 ? $this->__vector_len($o) : 0;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startUpdateProductClassAttributeRequest(FlatBufferBuilder $builder)
    {
        $builder->StartObject(4);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return UpdateProductClassAttributeRequest
     */
    public static function createUpdateProductClassAttributeRequest(FlatBufferBuilder $builder, $operator_id, $product_class_id, $attribute_id, $attribute_value_ids)
    {
        $builder->startObject(4);
        self::addOperatorId($builder, $operator_id);
        self::addProductClassId($builder, $product_class_id);
        self::addAttributeId($builder, $attribute_id);
        self::addAttributeValueIds($builder, $attribute_value_ids);
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
     * @param VectorOffset
     * @return void
     */
    public static function addAttributeValueIds(FlatBufferBuilder $builder, $attributeValueIds)
    {
        $builder->addOffsetX(3, $attributeValueIds, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param array offset array
     * @return int vector offset
     */
    public static function createAttributeValueIdsVector(FlatBufferBuilder $builder, array $data)
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
    public static function startAttributeValueIdsVector(FlatBufferBuilder $builder, $numElems)
    {
        $builder->startVector(4, $numElems, 4);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endUpdateProductClassAttributeRequest(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }
}

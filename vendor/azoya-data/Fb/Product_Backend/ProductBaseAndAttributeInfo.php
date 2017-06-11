<?php
// automatically generated, do not modify

namespace Fb\Product_Backend;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class ProductBaseAndAttributeInfo extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return ProductBaseAndAttributeInfo
     */
    public static function getRootAsProductBaseAndAttributeInfo(ByteBuffer $bb)
    {
        $obj = new ProductBaseAndAttributeInfo();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return ProductBaseAndAttributeInfo
     **/
    public function init($_i, ByteBuffer $_bb)
    {
        $this->bb_pos = $_i;
        $this->bb = $_bb;
        return $this;
    }

    public function getProductBaseInfo()
    {
        $obj = new ProductBaseInfo();
        $o = $this->__offset(4);
        return $o != 0 ? $obj->init($this->__indirect($o + $this->bb_pos), $this->bb) : 0;
    }

    /**
     * @returnVectorOffset
     */
    public function getAttributeValues($j)
    {
        $o = $this->__offset(6);
        $obj = new AttributeValue();
        return $o != 0 ? $obj->init($this->__indirect($this->__vector($o) + $j * 4), $this->bb) : null;
    }

    /**
     * @return int
     */
    public function getAttributeValuesLength()
    {
        $o = $this->__offset(6);
        return $o != 0 ? $this->__vector_len($o) : 0;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startProductBaseAndAttributeInfo(FlatBufferBuilder $builder)
    {
        $builder->StartObject(2);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return ProductBaseAndAttributeInfo
     */
    public static function createProductBaseAndAttributeInfo(FlatBufferBuilder $builder, $product_base_info, $attribute_values)
    {
        $builder->startObject(2);
        self::addProductBaseInfo($builder, $product_base_info);
        self::addAttributeValues($builder, $attribute_values);
        $o = $builder->endObject();
        return $o;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param int
     * @return void
     */
    public static function addProductBaseInfo(FlatBufferBuilder $builder, $productBaseInfo)
    {
        $builder->addOffsetX(0, $productBaseInfo, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param VectorOffset
     * @return void
     */
    public static function addAttributeValues(FlatBufferBuilder $builder, $attributeValues)
    {
        $builder->addOffsetX(1, $attributeValues, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param array offset array
     * @return int vector offset
     */
    public static function createAttributeValuesVector(FlatBufferBuilder $builder, array $data)
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
    public static function startAttributeValuesVector(FlatBufferBuilder $builder, $numElems)
    {
        $builder->startVector(4, $numElems, 4);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endProductBaseAndAttributeInfo(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }
}

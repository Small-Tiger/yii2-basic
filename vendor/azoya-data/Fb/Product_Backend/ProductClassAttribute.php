<?php
// automatically generated, do not modify

namespace Fb\Product_Backend;

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
     * @return uint
     */
    public function getProductId()
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
     * @returnVectorOffset
     */
    public function getAttributes($j)
    {
        $o = $this->__offset(8);
        $obj = new AttributeValue();
        return $o != 0 ? $obj->init($this->__indirect($this->__vector($o) + $j * 4), $this->bb) : null;
    }

    /**
     * @return int
     */
    public function getAttributesLength()
    {
        $o = $this->__offset(8);
        return $o != 0 ? $this->__vector_len($o) : 0;
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
    public static function createProductClassAttribute(FlatBufferBuilder $builder, $product_id, $product_class_id, $attributes)
    {
        $builder->startObject(3);
        self::addProductId($builder, $product_id);
        self::addProductClassId($builder, $product_class_id);
        self::addAttributes($builder, $attributes);
        $o = $builder->endObject();
        return $o;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addProductId(FlatBufferBuilder $builder, $productId)
    {
        $builder->addUintX(0, $productId, 0);
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
     * @param VectorOffset
     * @return void
     */
    public static function addAttributes(FlatBufferBuilder $builder, $attributes)
    {
        $builder->addOffsetX(2, $attributes, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param array offset array
     * @return int vector offset
     */
    public static function createAttributesVector(FlatBufferBuilder $builder, array $data)
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
    public static function startAttributesVector(FlatBufferBuilder $builder, $numElems)
    {
        $builder->startVector(4, $numElems, 4);
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

    public function asArray()
    {
        $info = array();
        $info["product_id"] = $this->getProductId();
        $info["product_class_id"] = $this->getProductClassId();
        $info["attributes"] = array();
        for ($i = 0; $i < $this->getAttributesLength(); $i++) {
            $attribute = $this->getAttributes($i);
            $info["attributes"][] = $attribute->asArray();
        }
        return $info;
    }
}

<?php
// automatically generated, do not modify

namespace Fb\Product;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class ConfigurableProduct extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return ConfigurableProduct
     */
    public static function getRootAsConfigurableProduct(ByteBuffer $bb)
    {
        $obj = new ConfigurableProduct();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return ConfigurableProduct
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
     * @returnVectorOffset
     */
    public function getSuperAttrs($j)
    {
        $o = $this->__offset(6);
        $obj = new ConfigAttr();
        return $o != 0 ? $obj->init($this->__indirect($this->__vector($o) + $j * 4), $this->bb) : null;
    }

    /**
     * @return int
     */
    public function getSuperAttrsLength()
    {
        $o = $this->__offset(6);
        return $o != 0 ? $this->__vector_len($o) : 0;
    }

    /**
     * @returnVectorOffset
     */
    public function getSubProducts($j)
    {
        $o = $this->__offset(8);
        $obj = new Product();
        return $o != 0 ? $obj->init($this->__indirect($this->__vector($o) + $j * 4), $this->bb) : null;
    }

    /**
     * @return int
     */
    public function getSubProductsLength()
    {
        $o = $this->__offset(8);
        return $o != 0 ? $this->__vector_len($o) : 0;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startConfigurableProduct(FlatBufferBuilder $builder)
    {
        $builder->StartObject(3);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return ConfigurableProduct
     */
    public static function createConfigurableProduct(FlatBufferBuilder $builder, $product_id, $super_attrs, $sub_products)
    {
        $builder->startObject(3);
        self::addProductId($builder, $product_id);
        self::addSuperAttrs($builder, $super_attrs);
        self::addSubProducts($builder, $sub_products);
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
     * @param VectorOffset
     * @return void
     */
    public static function addSuperAttrs(FlatBufferBuilder $builder, $superAttrs)
    {
        $builder->addOffsetX(1, $superAttrs, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param array offset array
     * @return int vector offset
     */
    public static function createSuperAttrsVector(FlatBufferBuilder $builder, array $data)
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
    public static function startSuperAttrsVector(FlatBufferBuilder $builder, $numElems)
    {
        $builder->startVector(4, $numElems, 4);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param VectorOffset
     * @return void
     */
    public static function addSubProducts(FlatBufferBuilder $builder, $subProducts)
    {
        $builder->addOffsetX(2, $subProducts, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param array offset array
     * @return int vector offset
     */
    public static function createSubProductsVector(FlatBufferBuilder $builder, array $data)
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
    public static function startSubProductsVector(FlatBufferBuilder $builder, $numElems)
    {
        $builder->startVector(4, $numElems, 4);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endConfigurableProduct(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }
}

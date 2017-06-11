<?php
// automatically generated, do not modify

namespace Fb\Product_Backend;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class ProductCategoryInfo extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return ProductCategoryInfo
     */
    public static function getRootAsProductCategoryInfo(ByteBuffer $bb)
    {
        $obj = new ProductCategoryInfo();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return ProductCategoryInfo
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
    public function getProductClassId()
    {
        $o = $this->__offset(4);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    public function getProductClassName()
    {
        $o = $this->__offset(6);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    /**
     * @param int offset
     * @return uint
     */
    public function getCategoryIds($j)
    {
        $o = $this->__offset(8);
        return $o != 0 ? $this->bb->getUint($this->__vector($o) + $j * 4) : 0;
    }

    /**
     * @return int
     */
    public function getCategoryIdsLength()
    {
        $o = $this->__offset(8);
        return $o != 0 ? $this->__vector_len($o) : 0;
    }

    /**
     * @param int offset
     * @return string
     */
    public function getCategoryNames($j)
    {
        $o = $this->__offset(10);
        return $o != 0 ? $this->__string($this->__vector($o) + $j * 4) : 0;
    }

    /**
     * @return int
     */
    public function getCategoryNamesLength()
    {
        $o = $this->__offset(10);
        return $o != 0 ? $this->__vector_len($o) : 0;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startProductCategoryInfo(FlatBufferBuilder $builder)
    {
        $builder->StartObject(4);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return ProductCategoryInfo
     */
    public static function createProductCategoryInfo(FlatBufferBuilder $builder, $product_class_id, $product_class_name, $category_ids, $category_names)
    {
        $builder->startObject(4);
        self::addProductClassId($builder, $product_class_id);
        self::addProductClassName($builder, $product_class_name);
        self::addCategoryIds($builder, $category_ids);
        self::addCategoryNames($builder, $category_names);
        $o = $builder->endObject();
        return $o;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addProductClassId(FlatBufferBuilder $builder, $productClassId)
    {
        $builder->addUintX(0, $productClassId, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addProductClassName(FlatBufferBuilder $builder, $productClassName)
    {
        $builder->addOffsetX(1, $productClassName, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param VectorOffset
     * @return void
     */
    public static function addCategoryIds(FlatBufferBuilder $builder, $categoryIds)
    {
        $builder->addOffsetX(2, $categoryIds, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param array offset array
     * @return int vector offset
     */
    public static function createCategoryIdsVector(FlatBufferBuilder $builder, array $data)
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
    public static function startCategoryIdsVector(FlatBufferBuilder $builder, $numElems)
    {
        $builder->startVector(4, $numElems, 4);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param VectorOffset
     * @return void
     */
    public static function addCategoryNames(FlatBufferBuilder $builder, $categoryNames)
    {
        $builder->addOffsetX(3, $categoryNames, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param array offset array
     * @return int vector offset
     */
    public static function createCategoryNamesVector(FlatBufferBuilder $builder, array $data)
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
    public static function startCategoryNamesVector(FlatBufferBuilder $builder, $numElems)
    {
        $builder->startVector(4, $numElems, 4);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endProductCategoryInfo(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }


    /**
     * 以数组返回
     */
    public function asArray()
    {
        $productCategoryInfo = array();
        $productCategoryInfo['productClassId'] = $this->getProductClassId();
        $productCategoryInfo['productClassName'] = $this->getProductClassName();
        $categoryIdsLength = $this->getCategoryIdsLength();
        for ($i=0;$i<$categoryIdsLength;$i++){
            $productCategoryInfo['categoryIds'][$i] = $this->getCategoryIds($i);
        }
        $categoryNamesLength = $this->getCategoryNamesLength();
        for($j=0;$j<$categoryNamesLength;$j++){
            $productCategoryInfo['categoryNames'][$j] = $this->getCategoryNames($j);
        }
        return $productCategoryInfo;
    }
}

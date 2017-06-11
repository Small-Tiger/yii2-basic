<?php
// automatically generated, do not modify

namespace Fb\BaseProductClass;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class ProductClassStatistics extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return ProductClassStatistics
     */
    public static function getRootAsProductClassStatistics(ByteBuffer $bb)
    {
        $obj = new ProductClassStatistics();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return ProductClassStatistics
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

    /**
     * @return uint
     */
    public function getProductNum()
    {
        $o = $this->__offset(6);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @returnVectorOffset
     */
    public function getOperateCategories($j)
    {
        $o = $this->__offset(8);
        $obj = new OperateCategory();
        return $o != 0 ? $obj->init($this->__indirect($this->__vector($o) + $j * 4), $this->bb) : null;
    }

    /**
     * @return int
     */
    public function getOperateCategoriesLength()
    {
        $o = $this->__offset(8);
        return $o != 0 ? $this->__vector_len($o) : 0;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startProductClassStatistics(FlatBufferBuilder $builder)
    {
        $builder->StartObject(3);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return ProductClassStatistics
     */
    public static function createProductClassStatistics(FlatBufferBuilder $builder, $product_class_id, $product_num, $operate_categories)
    {
        $builder->startObject(3);
        self::addProductClassId($builder, $product_class_id);
        self::addProductNum($builder, $product_num);
        self::addOperateCategories($builder, $operate_categories);
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
     * @param uint
     * @return void
     */
    public static function addProductNum(FlatBufferBuilder $builder, $productNum)
    {
        $builder->addUintX(1, $productNum, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param VectorOffset
     * @return void
     */
    public static function addOperateCategories(FlatBufferBuilder $builder, $operateCategories)
    {
        $builder->addOffsetX(2, $operateCategories, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param array offset array
     * @return int vector offset
     */
    public static function createOperateCategoriesVector(FlatBufferBuilder $builder, array $data)
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
    public static function startOperateCategoriesVector(FlatBufferBuilder $builder, $numElems)
    {
        $builder->startVector(4, $numElems, 4);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endProductClassStatistics(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }


    public function asArray()
    {
        $array = array();
        $array["product_class_id"] = $this->getProductClassId();
        $array["product_num"] = $this->getProductNum();
        $operate_categories = array();
        for ($i = 0; $i < $this->getOperateCategoriesLength(); $i++) {
            $operate_categorie = $this->getOperateCategories($i);
            $operate_categories[] = $operate_categorie->asArray();
        }

        $array["operate_categories"] = $operate_categories;

        return $array;
    }
}

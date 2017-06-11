<?php
// automatically generated, do not modify

namespace Fb\Product;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class ProductListRequest extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return ProductListRequest
     */
    public static function getRootAsProductListRequest(ByteBuffer $bb)
    {
        $obj = new ProductListRequest();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return ProductListRequest
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
    public function getWebsiteId()
    {
        $o = $this->__offset(4);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @return uint
     */
    public function getCategoryId()
    {
        $o = $this->__offset(6);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @returnVectorOffset
     */
    public function getFilter($j)
    {
        $o = $this->__offset(8);
        $obj = new KeyValue();
        return $o != 0 ? $obj->init($this->__indirect($this->__vector($o) + $j * 4), $this->bb) : null;
    }

    /**
     * @return int
     */
    public function getFilterLength()
    {
        $o = $this->__offset(8);
        return $o != 0 ? $this->__vector_len($o) : 0;
    }

    /**
     * @return sbyte
     */
    public function getSortBy()
    {
        $o = $this->__offset(10);
        return $o != 0 ? $this->bb->getSbyte($o + $this->bb_pos) : \Fb\Product\SortBY::SORT_BY_RECOMMEND;
    }

    /**
     * @return bool
     */
    public function getSortType()
    {
        $o = $this->__offset(12);
        return $o != 0 ? $this->bb->getBool($o + $this->bb_pos) : false;
    }

    /**
     * @param int offset
     * @return string
     */
    public function getAttributes($j)
    {
        $o = $this->__offset(14);
        return $o != 0 ? $this->__string($this->__vector($o) + $j * 4) : 0;
    }

    /**
     * @return int
     */
    public function getAttributesLength()
    {
        $o = $this->__offset(14);
        return $o != 0 ? $this->__vector_len($o) : 0;
    }

    /**
     * @return uint
     */
    public function getPageIndex()
    {
        $o = $this->__offset(16);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @return uint
     */
    public function getNum()
    {
        $o = $this->__offset(18);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startProductListRequest(FlatBufferBuilder $builder)
    {
        $builder->StartObject(8);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return ProductListRequest
     */
    public static function createProductListRequest(FlatBufferBuilder $builder, $website_id, $category_id, $filter, $sort_by, $sort_type, $attributes, $page_index, $num)
    {
        $builder->startObject(8);
        self::addWebsiteId($builder, $website_id);
        self::addCategoryId($builder, $category_id);
        self::addFilter($builder, $filter);
        self::addSortBy($builder, $sort_by);
        self::addSortType($builder, $sort_type);
        self::addAttributes($builder, $attributes);
        self::addPageIndex($builder, $page_index);
        self::addNum($builder, $num);
        $o = $builder->endObject();
        return $o;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addWebsiteId(FlatBufferBuilder $builder, $websiteId)
    {
        $builder->addUintX(0, $websiteId, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addCategoryId(FlatBufferBuilder $builder, $categoryId)
    {
        $builder->addUintX(1, $categoryId, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param VectorOffset
     * @return void
     */
    public static function addFilter(FlatBufferBuilder $builder, $filter)
    {
        $builder->addOffsetX(2, $filter, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param array offset array
     * @return int vector offset
     */
    public static function createFilterVector(FlatBufferBuilder $builder, array $data)
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
    public static function startFilterVector(FlatBufferBuilder $builder, $numElems)
    {
        $builder->startVector(4, $numElems, 4);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param sbyte
     * @return void
     */
    public static function addSortBy(FlatBufferBuilder $builder, $sortBy)
    {
        $builder->addSbyteX(3, $sortBy, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param bool
     * @return void
     */
    public static function addSortType(FlatBufferBuilder $builder, $sortType)
    {
        $builder->addBoolX(4, $sortType, false);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param VectorOffset
     * @return void
     */
    public static function addAttributes(FlatBufferBuilder $builder, $attributes)
    {
        $builder->addOffsetX(5, $attributes, 0);
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
     * @param uint
     * @return void
     */
    public static function addPageIndex(FlatBufferBuilder $builder, $pageIndex)
    {
        $builder->addUintX(6, $pageIndex, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addNum(FlatBufferBuilder $builder, $num)
    {
        $builder->addUintX(7, $num, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endProductListRequest(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }
}

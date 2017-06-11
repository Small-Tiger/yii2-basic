<?php
// automatically generated, do not modify

namespace Fb\Product_Backend;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class SearchProductInfoRequest extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return SearchProductInfoRequest
     */
    public static function getRootAsSearchProductInfoRequest(ByteBuffer $bb)
    {
        $obj = new SearchProductInfoRequest();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return SearchProductInfoRequest
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
    public function getMerchantId()
    {
        $o = $this->__offset(6);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @return uint
     */
    public function getProductClassId()
    {
        $o = $this->__offset(8);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @return uint
     */
    public function getSalesModel()
    {
        $o = $this->__offset(10);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @return uint
     */
    public function getProductType()
    {
        $o = $this->__offset(12);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @param int offset
     * @return string
     */
    public function getMerchantSkus($j)
    {
        $o = $this->__offset(14);
        return $o != 0 ? $this->__string($this->__vector($o) + $j * 4) : 0;
    }

    /**
     * @return int
     */
    public function getMerchantSkusLength()
    {
        $o = $this->__offset(14);
        return $o != 0 ? $this->__vector_len($o) : 0;
    }

    /**
     * @param int offset
     * @return string
     */
    public function getSkus($j)
    {
        $o = $this->__offset(16);
        return $o != 0 ? $this->__string($this->__vector($o) + $j * 4) : 0;
    }

    /**
     * @return int
     */
    public function getSkusLength()
    {
        $o = $this->__offset(16);
        return $o != 0 ? $this->__vector_len($o) : 0;
    }

    /**
     * @param int offset
     * @return string
     */
    public function getNames($j)
    {
        $o = $this->__offset(18);
        return $o != 0 ? $this->__string($this->__vector($o) + $j * 4) : 0;
    }

    /**
     * @return int
     */
    public function getNamesLength()
    {
        $o = $this->__offset(18);
        return $o != 0 ? $this->__vector_len($o) : 0;
    }

    /**
     * @param int offset
     * @return string
     */
    public function getForeignNames($j)
    {
        $o = $this->__offset(20);
        return $o != 0 ? $this->__string($this->__vector($o) + $j * 4) : 0;
    }

    /**
     * @return int
     */
    public function getForeignNamesLength()
    {
        $o = $this->__offset(20);
        return $o != 0 ? $this->__vector_len($o) : 0;
    }

    /**
     * @return uint
     */
    public function getStatus()
    {
        $o = $this->__offset(22);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @return uint
     */
    public function getProductSource()
    {
        $o = $this->__offset(24);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @return uint
     */
    public function getCreatedAtBegin()
    {
        $o = $this->__offset(26);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @return uint
     */
    public function getCreatedAtEnd()
    {
        $o = $this->__offset(28);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @return uint
     */
    public function getInfoType()
    {
        $o = $this->__offset(30);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @return uint
     */
    public function getPageIndex()
    {
        $o = $this->__offset(32);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @return uint
     */
    public function getNum()
    {
        $o = $this->__offset(34);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startSearchProductInfoRequest(FlatBufferBuilder $builder)
    {
        $builder->StartObject(16);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return SearchProductInfoRequest
     */
    public static function createSearchProductInfoRequest(FlatBufferBuilder $builder, $website_id, $merchant_id, $product_class_id, $sales_model, $product_type, $merchant_skus, $skus, $names, $foreign_names, $status, $product_source, $created_at_begin, $created_at_end, $info_type, $page_index, $num)
    {
        $builder->startObject(16);
        self::addWebsiteId($builder, $website_id);
        self::addMerchantId($builder, $merchant_id);
        self::addProductClassId($builder, $product_class_id);
        self::addSalesModel($builder, $sales_model);
        self::addProductType($builder, $product_type);
        self::addMerchantSkus($builder, $merchant_skus);
        self::addSkus($builder, $skus);
        self::addNames($builder, $names);
        self::addForeignNames($builder, $foreign_names);
        self::addStatus($builder, $status);
        self::addProductSource($builder, $product_source);
        self::addCreatedAtBegin($builder, $created_at_begin);
        self::addCreatedAtEnd($builder, $created_at_end);
        self::addInfoType($builder, $info_type);
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
    public static function addMerchantId(FlatBufferBuilder $builder, $merchantId)
    {
        $builder->addUintX(1, $merchantId, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addProductClassId(FlatBufferBuilder $builder, $productClassId)
    {
        $builder->addUintX(2, $productClassId, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addSalesModel(FlatBufferBuilder $builder, $salesModel)
    {
        $builder->addUintX(3, $salesModel, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addProductType(FlatBufferBuilder $builder, $productType)
    {
        $builder->addUintX(4, $productType, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param VectorOffset
     * @return void
     */
    public static function addMerchantSkus(FlatBufferBuilder $builder, $merchantSkus)
    {
        $builder->addOffsetX(5, $merchantSkus, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param array offset array
     * @return int vector offset
     */
    public static function createMerchantSkusVector(FlatBufferBuilder $builder, array $data)
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
    public static function startMerchantSkusVector(FlatBufferBuilder $builder, $numElems)
    {
        $builder->startVector(4, $numElems, 4);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param VectorOffset
     * @return void
     */
    public static function addSkus(FlatBufferBuilder $builder, $skus)
    {
        $builder->addOffsetX(6, $skus, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param array offset array
     * @return int vector offset
     */
    public static function createSkusVector(FlatBufferBuilder $builder, array $data)
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
    public static function startSkusVector(FlatBufferBuilder $builder, $numElems)
    {
        $builder->startVector(4, $numElems, 4);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param VectorOffset
     * @return void
     */
    public static function addNames(FlatBufferBuilder $builder, $names)
    {
        $builder->addOffsetX(7, $names, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param array offset array
     * @return int vector offset
     */
    public static function createNamesVector(FlatBufferBuilder $builder, array $data)
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
    public static function startNamesVector(FlatBufferBuilder $builder, $numElems)
    {
        $builder->startVector(4, $numElems, 4);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param VectorOffset
     * @return void
     */
    public static function addForeignNames(FlatBufferBuilder $builder, $foreignNames)
    {
        $builder->addOffsetX(8, $foreignNames, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param array offset array
     * @return int vector offset
     */
    public static function createForeignNamesVector(FlatBufferBuilder $builder, array $data)
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
    public static function startForeignNamesVector(FlatBufferBuilder $builder, $numElems)
    {
        $builder->startVector(4, $numElems, 4);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addStatus(FlatBufferBuilder $builder, $status)
    {
        $builder->addUintX(9, $status, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addProductSource(FlatBufferBuilder $builder, $productSource)
    {
        $builder->addUintX(10, $productSource, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addCreatedAtBegin(FlatBufferBuilder $builder, $createdAtBegin)
    {
        $builder->addUintX(11, $createdAtBegin, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addCreatedAtEnd(FlatBufferBuilder $builder, $createdAtEnd)
    {
        $builder->addUintX(12, $createdAtEnd, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addInfoType(FlatBufferBuilder $builder, $infoType)
    {
        $builder->addUintX(13, $infoType, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addPageIndex(FlatBufferBuilder $builder, $pageIndex)
    {
        $builder->addUintX(14, $pageIndex, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addNum(FlatBufferBuilder $builder, $num)
    {
        $builder->addUintX(15, $num, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endSearchProductInfoRequest(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }
}

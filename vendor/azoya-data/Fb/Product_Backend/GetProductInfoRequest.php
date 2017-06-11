<?php
// automatically generated, do not modify

namespace Fb\Product_Backend;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class GetProductInfoRequest extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return GetProductInfoRequest
     */
    public static function getRootAsGetProductInfoRequest(ByteBuffer $bb)
    {
        $obj = new GetProductInfoRequest();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return GetProductInfoRequest
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
     * @param int offset
     * @return uint
     */
    public function getProductIds($j)
    {
        $o = $this->__offset(6);
        return $o != 0 ? $this->bb->getUint($this->__vector($o) + $j * 4) : 0;
    }

    /**
     * @return int
     */
    public function getProductIdsLength()
    {
        $o = $this->__offset(6);
        return $o != 0 ? $this->__vector_len($o) : 0;
    }

    /**
     * @return uint
     */
    public function getInfoType()
    {
        $o = $this->__offset(8);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startGetProductInfoRequest(FlatBufferBuilder $builder)
    {
        $builder->StartObject(3);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return GetProductInfoRequest
     */
    public static function createGetProductInfoRequest(FlatBufferBuilder $builder, $website_id, $product_ids, $info_type)
    {
        $builder->startObject(3);
        self::addWebsiteId($builder, $website_id);
        self::addProductIds($builder, $product_ids);
        self::addInfoType($builder, $info_type);
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
     * @param VectorOffset
     * @return void
     */
    public static function addProductIds(FlatBufferBuilder $builder, $productIds)
    {
        $builder->addOffsetX(1, $productIds, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param array offset array
     * @return int vector offset
     */
    public static function createProductIdsVector(FlatBufferBuilder $builder, array $data)
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
    public static function startProductIdsVector(FlatBufferBuilder $builder, $numElems)
    {
        $builder->startVector(4, $numElems, 4);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addInfoType(FlatBufferBuilder $builder, $infoType)
    {
        $builder->addUintX(2, $infoType, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endGetProductInfoRequest(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }
}

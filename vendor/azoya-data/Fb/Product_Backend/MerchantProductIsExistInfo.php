<?php
// automatically generated, do not modify

namespace Fb\Product_Backend;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class MerchantProductIsExistInfo extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return MerchantProductIsExistInfo
     */
    public static function getRootAsMerchantProductIsExistInfo(ByteBuffer $bb)
    {
        $obj = new MerchantProductIsExistInfo();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return MerchantProductIsExistInfo
     **/
    public function init($_i, ByteBuffer $_bb)
    {
        $this->bb_pos = $_i;
        $this->bb = $_bb;
        return $this;
    }

    public function getMerchantSku()
    {
        $o = $this->__offset(4);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    /**
     * @return ulong
     */
    public function getProductIdMerchant()
    {
        $o = $this->__offset(6);
        return $o != 0 ? $this->bb->getUlong($o + $this->bb_pos) : 0;
    }

    /**
     * @return uint
     */
    public function getIsExist()
    {
        $o = $this->__offset(8);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startMerchantProductIsExistInfo(FlatBufferBuilder $builder)
    {
        $builder->StartObject(3);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return MerchantProductIsExistInfo
     */
    public static function createMerchantProductIsExistInfo(FlatBufferBuilder $builder, $merchant_sku, $product_id_merchant, $is_exist)
    {
        $builder->startObject(3);
        self::addMerchantSku($builder, $merchant_sku);
        self::addProductIdMerchant($builder, $product_id_merchant);
        self::addIsExist($builder, $is_exist);
        $o = $builder->endObject();
        return $o;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addMerchantSku(FlatBufferBuilder $builder, $merchantSku)
    {
        $builder->addOffsetX(0, $merchantSku, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param ulong
     * @return void
     */
    public static function addProductIdMerchant(FlatBufferBuilder $builder, $productIdMerchant)
    {
        $builder->addUlongX(1, $productIdMerchant, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addIsExist(FlatBufferBuilder $builder, $isExist)
    {
        $builder->addUintX(2, $isExist, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endMerchantProductIsExistInfo(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }
}

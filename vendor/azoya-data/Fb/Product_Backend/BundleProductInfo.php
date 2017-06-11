<?php
// automatically generated, do not modify

namespace Fb\Product_Backend;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class BundleProductInfo extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return BundleProductInfo
     */
    public static function getRootAsBundleProductInfo(ByteBuffer $bb)
    {
        $obj = new BundleProductInfo();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return BundleProductInfo
     **/
    public function init($_i, ByteBuffer $_bb)
    {
        $this->bb_pos = $_i;
        $this->bb = $_bb;
        return $this;
    }

    /**
     * @return ulong
     */
    public function getProductIdMerchant()
    {
        $o = $this->__offset(4);
        return $o != 0 ? $this->bb->getUlong($o + $this->bb_pos) : 0;
    }

    public function getMerchantSku()
    {
        $o = $this->__offset(6);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    public function getName()
    {
        $o = $this->__offset(8);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    public function getForeignName()
    {
        $o = $this->__offset(10);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    public function getImage()
    {
        $o = $this->__offset(12);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    /**
     * @return uint
     */
    public function getNum()
    {
        $o = $this->__offset(14);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @return uint
     */
    public function getSortOrder()
    {
        $o = $this->__offset(16);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startBundleProductInfo(FlatBufferBuilder $builder)
    {
        $builder->StartObject(7);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return BundleProductInfo
     */
    public static function createBundleProductInfo(FlatBufferBuilder $builder, $product_id_merchant, $merchant_sku, $name, $foreign_name, $image, $num, $sort_order)
    {
        $builder->startObject(7);
        self::addProductIdMerchant($builder, $product_id_merchant);
        self::addMerchantSku($builder, $merchant_sku);
        self::addName($builder, $name);
        self::addForeignName($builder, $foreign_name);
        self::addImage($builder, $image);
        self::addNum($builder, $num);
        self::addSortOrder($builder, $sort_order);
        $o = $builder->endObject();
        return $o;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param ulong
     * @return void
     */
    public static function addProductIdMerchant(FlatBufferBuilder $builder, $productIdMerchant)
    {
        $builder->addUlongX(0, $productIdMerchant, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addMerchantSku(FlatBufferBuilder $builder, $merchantSku)
    {
        $builder->addOffsetX(1, $merchantSku, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addName(FlatBufferBuilder $builder, $name)
    {
        $builder->addOffsetX(2, $name, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addForeignName(FlatBufferBuilder $builder, $foreignName)
    {
        $builder->addOffsetX(3, $foreignName, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addImage(FlatBufferBuilder $builder, $image)
    {
        $builder->addOffsetX(4, $image, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addNum(FlatBufferBuilder $builder, $num)
    {
        $builder->addUintX(5, $num, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addSortOrder(FlatBufferBuilder $builder, $sortOrder)
    {
        $builder->addUintX(6, $sortOrder, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endBundleProductInfo(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }

    public function asArray()
    {
        $info = array();
        $info["productIdMerchant"] = $this->getProductIdMerchant();
        $info["merchantSku"] = $this->getMerchantSku();
        $info["image"] = $this->getImage();
        $info["name"] = $this->getName();
        $info["foreignName"] = $this->getForeignName();
        $info["num"] = $this->getNum();
        $info["sortOrder"] = $this->getSortOrder();
        return $info;
    }
}

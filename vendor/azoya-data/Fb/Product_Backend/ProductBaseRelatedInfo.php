<?php
// automatically generated, do not modify

namespace Fb\Product_Backend;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class ProductBaseRelatedInfo extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return ProductBaseRelatedInfo
     */
    public static function getRootAsProductBaseRelatedInfo(ByteBuffer $bb)
    {
        $obj = new ProductBaseRelatedInfo();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return ProductBaseRelatedInfo
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
    public function getMerchantId()
    {
        $o = $this->__offset(4);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    public function getMerchantSku()
    {
        $o = $this->__offset(6);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    /**
     * @return ulong
     */
    public function getProductIdMerchant()
    {
        $o = $this->__offset(8);
        return $o != 0 ? $this->bb->getUlong($o + $this->bb_pos) : 0;
    }

    /**
     * @return uint
     */
    public function getWebsiteId()
    {
        $o = $this->__offset(10);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    public function getName()
    {
        $o = $this->__offset(12);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    public function getForeignName()
    {
        $o = $this->__offset(14);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    public function getImage()
    {
        $o = $this->__offset(16);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startProductBaseRelatedInfo(FlatBufferBuilder $builder)
    {
        $builder->StartObject(7);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return ProductBaseRelatedInfo
     */
    public static function createProductBaseRelatedInfo(FlatBufferBuilder $builder, $merchant_id, $merchant_sku, $product_id_merchant, $website_id, $name, $foreign_name, $image)
    {
        $builder->startObject(7);
        self::addMerchantId($builder, $merchant_id);
        self::addMerchantSku($builder, $merchant_sku);
        self::addProductIdMerchant($builder, $product_id_merchant);
        self::addWebsiteId($builder, $website_id);
        self::addName($builder, $name);
        self::addForeignName($builder, $foreign_name);
        self::addImage($builder, $image);
        $o = $builder->endObject();
        return $o;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addMerchantId(FlatBufferBuilder $builder, $merchantId)
    {
        $builder->addUintX(0, $merchantId, 0);
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
     * @param ulong
     * @return void
     */
    public static function addProductIdMerchant(FlatBufferBuilder $builder, $productIdMerchant)
    {
        $builder->addUlongX(2, $productIdMerchant, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addWebsiteId(FlatBufferBuilder $builder, $websiteId)
    {
        $builder->addUintX(3, $websiteId, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addName(FlatBufferBuilder $builder, $name)
    {
        $builder->addOffsetX(4, $name, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addForeignName(FlatBufferBuilder $builder, $foreignName)
    {
        $builder->addOffsetX(5, $foreignName, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addImage(FlatBufferBuilder $builder, $image)
    {
        $builder->addOffsetX(6, $image, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endProductBaseRelatedInfo(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }


    public function asArray()
    {
        $array = array();
        $array['merchantId'] = $this->getMerchantId();
        $array['merchantSku'] = $this->getMerchantSku();
        $array['productIdMerchant'] = $this->getProductIdMerchant();
        $array['websiteId'] = $this->getWebsiteId();
        $array['name'] = $this->getName();
        $array['foreignName'] = $this->getForeignName();
        $array['image'] = $this->getImage();

        return $array;
    }
}

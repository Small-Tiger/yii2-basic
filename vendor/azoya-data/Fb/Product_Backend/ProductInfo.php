<?php
// automatically generated, do not modify

namespace Fb\Product_Backend;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class ProductInfo extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return ProductInfo
     */
    public static function getRootAsProductInfo(ByteBuffer $bb)
    {
        $obj = new ProductInfo();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return ProductInfo
     **/
    public function init($_i, ByteBuffer $_bb)
    {
        $this->bb_pos = $_i;
        $this->bb = $_bb;
        return $this;
    }

    public function getProductBaseInfo()
    {
        $obj = new ProductBaseInfo();
        $o = $this->__offset(4);
        return $o != 0 ? $obj->init($this->__indirect($o + $this->bb_pos), $this->bb) : 0;
    }

    public function getProductMerchantInfo()
    {
        $obj = new ProductMerchantInfo();
        $o = $this->__offset(6);
        return $o != 0 ? $obj->init($this->__indirect($o + $this->bb_pos), $this->bb) : 0;
    }

    public function getProductWebsiteInfo()
    {
        $obj = new ProductWebsiteInfo();
        $o = $this->__offset(8);
        return $o != 0 ? $obj->init($this->__indirect($o + $this->bb_pos), $this->bb) : 0;
    }

    public function getProductClassAttribute()
    {
        $obj = new ProductClassAttribute();
        $o = $this->__offset(10);
        return $o != 0 ? $obj->init($this->__indirect($o + $this->bb_pos), $this->bb) : 0;
    }

    public function getProductDescription()
    {
        $obj = new ProductDescription();
        $o = $this->__offset(12);
        return $o != 0 ? $obj->init($this->__indirect($o + $this->bb_pos), $this->bb) : 0;
    }

    public function getProductImageInfo()
    {
        $obj = new ProductImageInfo();
        $o = $this->__offset(14);
        return $o != 0 ? $obj->init($this->__indirect($o + $this->bb_pos), $this->bb) : 0;
    }

    /**
     * @return uint
     */
    public function getStatus()
    {
        $o = $this->__offset(16);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startProductInfo(FlatBufferBuilder $builder)
    {
        $builder->StartObject(7);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return ProductInfo
     */
    public static function createProductInfo(FlatBufferBuilder $builder, $product_base_info, $product_merchant_info, $product_website_info, $product_class_attribute, $product_description, $product_image_info, $status)
    {
        $builder->startObject(7);
        self::addProductBaseInfo($builder, $product_base_info);
        self::addProductMerchantInfo($builder, $product_merchant_info);
        self::addProductWebsiteInfo($builder, $product_website_info);
        self::addProductClassAttribute($builder, $product_class_attribute);
        self::addProductDescription($builder, $product_description);
        self::addProductImageInfo($builder, $product_image_info);
        self::addStatus($builder, $status);
        $o = $builder->endObject();
        return $o;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param int
     * @return void
     */
    public static function addProductBaseInfo(FlatBufferBuilder $builder, $productBaseInfo)
    {
        $builder->addOffsetX(0, $productBaseInfo, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param int
     * @return void
     */
    public static function addProductMerchantInfo(FlatBufferBuilder $builder, $productMerchantInfo)
    {
        $builder->addOffsetX(1, $productMerchantInfo, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param int
     * @return void
     */
    public static function addProductWebsiteInfo(FlatBufferBuilder $builder, $productWebsiteInfo)
    {
        $builder->addOffsetX(2, $productWebsiteInfo, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param int
     * @return void
     */
    public static function addProductClassAttribute(FlatBufferBuilder $builder, $productClassAttribute)
    {
        $builder->addOffsetX(3, $productClassAttribute, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param int
     * @return void
     */
    public static function addProductDescription(FlatBufferBuilder $builder, $productDescription)
    {
        $builder->addOffsetX(4, $productDescription, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param int
     * @return void
     */
    public static function addProductImageInfo(FlatBufferBuilder $builder, $productImageInfo)
    {
        $builder->addOffsetX(5, $productImageInfo, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addStatus(FlatBufferBuilder $builder, $status)
    {
        $builder->addUintX(6, $status, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endProductInfo(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }

    public function asArray()
    {
        $info = array();

        $info["productBaseInfo"] = $this->getProductBaseInfo()->asArray();
        $info["productMerchantInfo"] = $this->getProductMerchantInfo()->asArray();
        $info["productWebsiteInfo"] = $this->getProductWebsiteInfo()->asArray();
        $info["productClassAttribute"] = $this->getProductClassAttribute()->asArray();
        $info["productDescription"] = $this->getProductDescription()->asArray();
        $info["productImageInfo"] = $this->getProductImageInfo()->asArray();
        $info["status"] = $this->getStatus();

        return $info;
    }
}

<?php
// automatically generated, do not modify

namespace Fb\Product_Backend;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class ProductBaseInfo extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return ProductBaseInfo
     */
    public static function getRootAsProductBaseInfo(ByteBuffer $bb)
    {
        $obj = new ProductBaseInfo();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return ProductBaseInfo
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
    public function getProductIdBase()
    {
        $o = $this->__offset(4);
        return $o != 0 ? $this->bb->getUlong($o + $this->bb_pos) : 0;
    }

    public function getSku()
    {
        $o = $this->__offset(6);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    public function getBarcode()
    {
        $o = $this->__offset(8);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    /**
     * @return uint
     */
    public function getProductClassId()
    {
        $o = $this->__offset(10);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    public function getProductClassName()
    {
        $o = $this->__offset(12);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    public function getName()
    {
        $o = $this->__offset(14);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    public function getForeignName()
    {
        $o = $this->__offset(16);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    public function getImage()
    {
        $o = $this->__offset(18);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    /**
     * @return double
     */
    public function getWeight()
    {
        $o = $this->__offset(20);
        return $o != 0 ? $this->bb->getDouble($o + $this->bb_pos) : 0;
    }

    /**
     * @return double
     */
    public function getSizeL()
    {
        $o = $this->__offset(22);
        return $o != 0 ? $this->bb->getDouble($o + $this->bb_pos) : 0;
    }

    /**
     * @return double
     */
    public function getSizeW()
    {
        $o = $this->__offset(24);
        return $o != 0 ? $this->bb->getDouble($o + $this->bb_pos) : 0;
    }

    /**
     * @return double
     */
    public function getSizeH()
    {
        $o = $this->__offset(26);
        return $o != 0 ? $this->bb->getDouble($o + $this->bb_pos) : 0;
    }

    public function getCountryOfManufacture()
    {
        $o = $this->__offset(28);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    public function getManufacturer()
    {
        $o = $this->__offset(30);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    public function getKeyword()
    {
        $o = $this->__offset(32);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    public function getMetaKeyword()
    {
        $o = $this->__offset(34);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    public function getMetaTitle()
    {
        $o = $this->__offset(36);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    public function getMetaDescription()
    {
        $o = $this->__offset(38);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    /**
     * @return uint
     */
    public function getStatus()
    {
        $o = $this->__offset(40);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @return uint
     */
    public function getUpdatedAt()
    {
        $o = $this->__offset(42);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @return ushort
     */
    public function getIsHazardousMaterial()
    {
        $o = $this->__offset(44);
        return $o != 0 ? $this->bb->getUshort($o + $this->bb_pos) : 0;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startProductBaseInfo(FlatBufferBuilder $builder)
    {
        $builder->StartObject(21);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return ProductBaseInfo
     */
    public static function createProductBaseInfo(FlatBufferBuilder $builder, $product_id_base, $sku, $barcode, $product_class_id, $product_class_name, $name, $foreign_name, $image, $weight, $size_l, $size_w, $size_h, $country_of_manufacture, $manufacturer, $keyword, $meta_keyword, $meta_title, $meta_description, $status, $updated_at, $is_hazardous_material)
    {
        $builder->startObject(21);
        self::addProductIdBase($builder, $product_id_base);
        self::addSku($builder, $sku);
        self::addBarcode($builder, $barcode);
        self::addProductClassId($builder, $product_class_id);
        self::addProductClassName($builder, $product_class_name);
        self::addName($builder, $name);
        self::addForeignName($builder, $foreign_name);
        self::addImage($builder, $image);
        self::addWeight($builder, $weight);
        self::addSizeL($builder, $size_l);
        self::addSizeW($builder, $size_w);
        self::addSizeH($builder, $size_h);
        self::addCountryOfManufacture($builder, $country_of_manufacture);
        self::addManufacturer($builder, $manufacturer);
        self::addKeyword($builder, $keyword);
        self::addMetaKeyword($builder, $meta_keyword);
        self::addMetaTitle($builder, $meta_title);
        self::addMetaDescription($builder, $meta_description);
        self::addStatus($builder, $status);
        self::addUpdatedAt($builder, $updated_at);
        self::addIsHazardousMaterial($builder, $is_hazardous_material);
        $o = $builder->endObject();
        return $o;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param ulong
     * @return void
     */
    public static function addProductIdBase(FlatBufferBuilder $builder, $productIdBase)
    {
        $builder->addUlongX(0, $productIdBase, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addSku(FlatBufferBuilder $builder, $sku)
    {
        $builder->addOffsetX(1, $sku, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addBarcode(FlatBufferBuilder $builder, $barcode)
    {
        $builder->addOffsetX(2, $barcode, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addProductClassId(FlatBufferBuilder $builder, $productClassId)
    {
        $builder->addUintX(3, $productClassId, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addProductClassName(FlatBufferBuilder $builder, $productClassName)
    {
        $builder->addOffsetX(4, $productClassName, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addName(FlatBufferBuilder $builder, $name)
    {
        $builder->addOffsetX(5, $name, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addForeignName(FlatBufferBuilder $builder, $foreignName)
    {
        $builder->addOffsetX(6, $foreignName, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addImage(FlatBufferBuilder $builder, $image)
    {
        $builder->addOffsetX(7, $image, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param double
     * @return void
     */
    public static function addWeight(FlatBufferBuilder $builder, $weight)
    {
        $builder->addDoubleX(8, $weight, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param double
     * @return void
     */
    public static function addSizeL(FlatBufferBuilder $builder, $sizeL)
    {
        $builder->addDoubleX(9, $sizeL, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param double
     * @return void
     */
    public static function addSizeW(FlatBufferBuilder $builder, $sizeW)
    {
        $builder->addDoubleX(10, $sizeW, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param double
     * @return void
     */
    public static function addSizeH(FlatBufferBuilder $builder, $sizeH)
    {
        $builder->addDoubleX(11, $sizeH, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addCountryOfManufacture(FlatBufferBuilder $builder, $countryOfManufacture)
    {
        $builder->addOffsetX(12, $countryOfManufacture, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addManufacturer(FlatBufferBuilder $builder, $manufacturer)
    {
        $builder->addOffsetX(13, $manufacturer, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addKeyword(FlatBufferBuilder $builder, $keyword)
    {
        $builder->addOffsetX(14, $keyword, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addMetaKeyword(FlatBufferBuilder $builder, $metaKeyword)
    {
        $builder->addOffsetX(15, $metaKeyword, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addMetaTitle(FlatBufferBuilder $builder, $metaTitle)
    {
        $builder->addOffsetX(16, $metaTitle, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addMetaDescription(FlatBufferBuilder $builder, $metaDescription)
    {
        $builder->addOffsetX(17, $metaDescription, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addStatus(FlatBufferBuilder $builder, $status)
    {
        $builder->addUintX(18, $status, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addUpdatedAt(FlatBufferBuilder $builder, $updatedAt)
    {
        $builder->addUintX(19, $updatedAt, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param ushort
     * @return void
     */
    public static function addIsHazardousMaterial(FlatBufferBuilder $builder, $isHazardousMaterial)
    {
        $builder->addUshortX(20, $isHazardousMaterial, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endProductBaseInfo(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }

    public function asArray()
    {
        $array = array();
        $array['productIdBase'] = $this->getProductIdBase();
        $array['sku'] = $this->getSku();
        $array['barcode'] = $this->getBarcode();
        $array['productClassId'] = $this->getProductClassId();
        $array['productClassName'] = $this->getProductClassName();
        $array['name'] = $this->getName();
        $array['foreignName'] = $this->getForeignName();
        $array['image'] = $this->getImage();
        $array['weight'] = $this->getWeight();
        $array['sizeL'] = $this->getSizeL();
        $array['sizeW'] = $this->getSizeW();
        $array['sizeH'] = $this->getSizeH();
        $array['countryOfManufacture'] = $this->getCountryOfManufacture();
        $array['manufacturer'] = $this->getManufacturer();
        $array['keyword'] = $this->getKeyword();
        $array['metaKeyword'] = $this->getMetaKeyword();
        $array['metaTitle'] = $this->getMetaTitle();
        $array['metaDescription'] = $this->getMetaDescription();
        $array['status'] = $this->getStatus();
        $array['updatedAt'] = $this->getUpdatedAt();
        $array['isHazardousMaterial'] = $this->getIsHazardousMaterial();
        return $array;
    }

}

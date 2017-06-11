<?php
// automatically generated, do not modify

namespace Fb\Product_Backend;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class ProductMerchantInfo extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return ProductMerchantInfo
     */
    public static function getRootAsProductMerchantInfo(ByteBuffer $bb)
    {
        $obj = new ProductMerchantInfo();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return ProductMerchantInfo
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

    /**
     * @return uint
     */
    public function getProductType()
    {
        $o = $this->__offset(6);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @return uint
     */
    public function getSalesModel()
    {
        $o = $this->__offset(8);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @return uint
     */
    public function getMerchantId()
    {
        $o = $this->__offset(10);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    public function getMerchantSku()
    {
        $o = $this->__offset(12);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    public function getMerchantUrl()
    {
        $o = $this->__offset(14);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    /**
     * @return double
     */
    public function getMerchantPrice()
    {
        $o = $this->__offset(16);
        return $o != 0 ? $this->bb->getDouble($o + $this->bb_pos) : 0;
    }

    /**
     * @return double
     */
    public function getMerchantSpecialPrice()
    {
        $o = $this->__offset(18);
        return $o != 0 ? $this->bb->getDouble($o + $this->bb_pos) : 0;
    }

    /**
     * @return double
     */
    public function getMerchantRetailPrice()
    {
        $o = $this->__offset(20);
        return $o != 0 ? $this->bb->getDouble($o + $this->bb_pos) : 0;
    }

    /**
     * @return double
     */
    public function getMerchantDiscount()
    {
        $o = $this->__offset(22);
        return $o != 0 ? $this->bb->getDouble($o + $this->bb_pos) : 0;
    }

    /**
     * @return double
     */
    public function getReconciliationPrice()
    {
        $o = $this->__offset(24);
        return $o != 0 ? $this->bb->getDouble($o + $this->bb_pos) : 0;
    }

    /**
     * @return uint
     */
    public function getIncludingVat()
    {
        $o = $this->__offset(26);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @return double
     */
    public function getVat()
    {
        $o = $this->__offset(28);
        return $o != 0 ? $this->bb->getDouble($o + $this->bb_pos) : 0;
    }

    public function getMerchantCurrency()
    {
        $o = $this->__offset(30);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    /**
     * @return double
     */
    public function getWeight()
    {
        $o = $this->__offset(32);
        return $o != 0 ? $this->bb->getDouble($o + $this->bb_pos) : 0;
    }

    /**
     * @return uint
     */
    public function getQty()
    {
        $o = $this->__offset(34);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @return uint
     */
    public function getStatus()
    {
        $o = $this->__offset(36);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @return uint
     */
    public function getProductSource()
    {
        $o = $this->__offset(38);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @return ushort
     */
    public function getStopUpdateStock()
    {
        $o = $this->__offset(40);
        return $o != 0 ? $this->bb->getUshort($o + $this->bb_pos) : 0;
    }

    /**
     * @return uint
     */
    public function getCountryOfShipments()
    {
        $o = $this->__offset(42);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    public function getBundleProductTag()
    {
        $o = $this->__offset(44);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    /**
     * @returnVectorOffset
     */
    public function getBundleProductInfos($j)
    {
        $o = $this->__offset(46);
        $obj = new BundleProductInfo();
        return $o != 0 ? $obj->init($this->__indirect($this->__vector($o) + $j * 4), $this->bb) : null;
    }

    /**
     * @return int
     */
    public function getBundleProductInfosLength()
    {
        $o = $this->__offset(46);
        return $o != 0 ? $this->__vector_len($o) : 0;
    }

    /**
     * @return uint
     */
    public function getUpdatedAt()
    {
        $o = $this->__offset(48);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startProductMerchantInfo(FlatBufferBuilder $builder)
    {
        $builder->StartObject(23);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return ProductMerchantInfo
     */
    public static function createProductMerchantInfo(FlatBufferBuilder $builder, $product_id_merchant, $product_type, $sales_model, $merchant_id, $merchant_sku, $merchant_url, $merchant_price, $merchant_special_price, $merchant_retail_price, $merchant_discount, $reconciliation_price, $including_vat, $vat, $merchant_currency, $weight, $qty, $status, $product_source, $stop_update_stock, $country_of_shipments, $bundle_product_tag, $bundle_product_infos, $updated_at)
    {
        $builder->startObject(23);
        self::addProductIdMerchant($builder, $product_id_merchant);
        self::addProductType($builder, $product_type);
        self::addSalesModel($builder, $sales_model);
        self::addMerchantId($builder, $merchant_id);
        self::addMerchantSku($builder, $merchant_sku);
        self::addMerchantUrl($builder, $merchant_url);
        self::addMerchantPrice($builder, $merchant_price);
        self::addMerchantSpecialPrice($builder, $merchant_special_price);
        self::addMerchantRetailPrice($builder, $merchant_retail_price);
        self::addMerchantDiscount($builder, $merchant_discount);
        self::addReconciliationPrice($builder, $reconciliation_price);
        self::addIncludingVat($builder, $including_vat);
        self::addVat($builder, $vat);
        self::addMerchantCurrency($builder, $merchant_currency);
        self::addWeight($builder, $weight);
        self::addQty($builder, $qty);
        self::addStatus($builder, $status);
        self::addProductSource($builder, $product_source);
        self::addStopUpdateStock($builder, $stop_update_stock);
        self::addCountryOfShipments($builder, $country_of_shipments);
        self::addBundleProductTag($builder, $bundle_product_tag);
        self::addBundleProductInfos($builder, $bundle_product_infos);
        self::addUpdatedAt($builder, $updated_at);
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
     * @param uint
     * @return void
     */
    public static function addProductType(FlatBufferBuilder $builder, $productType)
    {
        $builder->addUintX(1, $productType, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addSalesModel(FlatBufferBuilder $builder, $salesModel)
    {
        $builder->addUintX(2, $salesModel, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addMerchantId(FlatBufferBuilder $builder, $merchantId)
    {
        $builder->addUintX(3, $merchantId, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addMerchantSku(FlatBufferBuilder $builder, $merchantSku)
    {
        $builder->addOffsetX(4, $merchantSku, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addMerchantUrl(FlatBufferBuilder $builder, $merchantUrl)
    {
        $builder->addOffsetX(5, $merchantUrl, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param double
     * @return void
     */
    public static function addMerchantPrice(FlatBufferBuilder $builder, $merchantPrice)
    {
        $builder->addDoubleX(6, $merchantPrice, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param double
     * @return void
     */
    public static function addMerchantSpecialPrice(FlatBufferBuilder $builder, $merchantSpecialPrice)
    {
        $builder->addDoubleX(7, $merchantSpecialPrice, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param double
     * @return void
     */
    public static function addMerchantRetailPrice(FlatBufferBuilder $builder, $merchantRetailPrice)
    {
        $builder->addDoubleX(8, $merchantRetailPrice, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param double
     * @return void
     */
    public static function addMerchantDiscount(FlatBufferBuilder $builder, $merchantDiscount)
    {
        $builder->addDoubleX(9, $merchantDiscount, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param double
     * @return void
     */
    public static function addReconciliationPrice(FlatBufferBuilder $builder, $reconciliationPrice)
    {
        $builder->addDoubleX(10, $reconciliationPrice, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addIncludingVat(FlatBufferBuilder $builder, $includingVat)
    {
        $builder->addUintX(11, $includingVat, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param double
     * @return void
     */
    public static function addVat(FlatBufferBuilder $builder, $vat)
    {
        $builder->addDoubleX(12, $vat, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addMerchantCurrency(FlatBufferBuilder $builder, $merchantCurrency)
    {
        $builder->addOffsetX(13, $merchantCurrency, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param double
     * @return void
     */
    public static function addWeight(FlatBufferBuilder $builder, $weight)
    {
        $builder->addDoubleX(14, $weight, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addQty(FlatBufferBuilder $builder, $qty)
    {
        $builder->addUintX(15, $qty, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addStatus(FlatBufferBuilder $builder, $status)
    {
        $builder->addUintX(16, $status, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addProductSource(FlatBufferBuilder $builder, $productSource)
    {
        $builder->addUintX(17, $productSource, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param ushort
     * @return void
     */
    public static function addStopUpdateStock(FlatBufferBuilder $builder, $stopUpdateStock)
    {
        $builder->addUshortX(18, $stopUpdateStock, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addCountryOfShipments(FlatBufferBuilder $builder, $countryOfShipments)
    {
        $builder->addUintX(19, $countryOfShipments, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addBundleProductTag(FlatBufferBuilder $builder, $bundleProductTag)
    {
        $builder->addOffsetX(20, $bundleProductTag, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param VectorOffset
     * @return void
     */
    public static function addBundleProductInfos(FlatBufferBuilder $builder, $bundleProductInfos)
    {
        $builder->addOffsetX(21, $bundleProductInfos, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param array offset array
     * @return int vector offset
     */
    public static function createBundleProductInfosVector(FlatBufferBuilder $builder, array $data)
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
    public static function startBundleProductInfosVector(FlatBufferBuilder $builder, $numElems)
    {
        $builder->startVector(4, $numElems, 4);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addUpdatedAt(FlatBufferBuilder $builder, $updatedAt)
    {
        $builder->addUintX(22, $updatedAt, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endProductMerchantInfo(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }

    public function asArray()
    {
        $info = array();
        $info["productIdMerchant"] = $this->getProductIdMerchant();
        $info["productType"] = $this->getProductType();
        $info["salesModel"] = $this->getSalesModel();
        $info["merchantId"] = $this->getMerchantId();
        $info["merchantSku"] = $this->getMerchantSku();
        $info["merchantUrl"] = $this->getMerchantUrl();
        $info["merchantPrice"] = $this->getMerchantPrice();
        $info["merchantSpecialPrice"] = $this->getMerchantSpecialPrice();
        $info["merchantRetailPrice"] = $this->getMerchantRetailPrice();
        $info["merchantDiscount"] = $this->getMerchantDiscount();
        $info["reconciliationPrice"] = $this->getReconciliationPrice();
        $info["vat"] = $this->getVat();
        $info["includingVat"] = $this->getIncludingVat();
        $info["merchantCurrency"] = $this->getMerchantCurrency();
        $info["weight"] = $this->getWeight();
        $info["qty"] = $this->getQty();
        $info["status"] = $this->getStatus();
        $info["productSource"] = $this->getProductSource();
        $info["bundleProductTag"] = $this->getBundleProductTag();
        $info["stopUpdateStock"] = $this->getStopUpdateStock();

        $bundleProductInfos = array();
        for ($i = 0; $i < $this->getBundleProductInfosLength(); $i++) {
            $bundleProductInfos[] = $this->getBundleProductInfos($i)->asArray();
        }
        $info["bundleProductInfos"] = $bundleProductInfos;

        $info["updated_at"] = $this->getUpdatedAt();

        return $info;
    }
}

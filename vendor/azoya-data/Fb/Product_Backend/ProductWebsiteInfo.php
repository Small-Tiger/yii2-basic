<?php
// automatically generated, do not modify

namespace Fb\Product_Backend;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;
use Fb\Base\KeyValue;

class ProductWebsiteInfo extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return ProductWebsiteInfo
     */
    public static function getRootAsProductWebsiteInfo(ByteBuffer $bb)
    {
        $obj = new ProductWebsiteInfo();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return ProductWebsiteInfo
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
    public function getProductId()
    {
        $o = $this->__offset(6);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @return double
     */
    public function getGrowRate()
    {
        $o = $this->__offset(8);
        return $o != 0 ? $this->bb->getDouble($o + $this->bb_pos) : 0;
    }

    /**
     * @return double
     */
    public function getPrice()
    {
        $o = $this->__offset(10);
        return $o != 0 ? $this->bb->getDouble($o + $this->bb_pos) : 0;
    }

    /**
     * @return double
     */
    public function getSpecialPrice()
    {
        $o = $this->__offset(12);
        return $o != 0 ? $this->bb->getDouble($o + $this->bb_pos) : 0;
    }

    /**
     * @return uint
     */
    public function getBuyLimit()
    {
        $o = $this->__offset(14);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    public function getName()
    {
        $o = $this->__offset(16);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    public function getForeignName()
    {
        $o = $this->__offset(18);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    public function getShortName()
    {
        $o = $this->__offset(20);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    public function getNameAfter()
    {
        $o = $this->__offset(22);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    public function getNameBefore()
    {
        $o = $this->__offset(24);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    public function getShortDescription()
    {
        $o = $this->__offset(26);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    public function getForeignShortDescription()
    {
        $o = $this->__offset(28);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    /**
     * @return uint
     */
    public function getPreferredCustomsClearance()
    {
        $o = $this->__offset(30);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @return uint
     */
    public function getTaxClassId()
    {
        $o = $this->__offset(32);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @return uint
     */
    public function getOnlineTime()
    {
        $o = $this->__offset(34);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @return uint
     */
    public function getOfflineTime()
    {
        $o = $this->__offset(36);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    public function getProductTag()
    {
        $o = $this->__offset(38);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    public function getProductActivityContent()
    {
        $o = $this->__offset(40);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    /**
     * @return uint
     */
    public function getStatus()
    {
        $o = $this->__offset(42);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @return double
     */
    public function getExchangePointRate()
    {
        $o = $this->__offset(44);
        return $o != 0 ? $this->bb->getDouble($o + $this->bb_pos) : 0;
    }

    /**
     * @return ushort
     */
    public function getStopUpdatePrice()
    {
        $o = $this->__offset(46);
        return $o != 0 ? $this->bb->getUshort($o + $this->bb_pos) : 0;
    }

    /**
     * @return uint
     */
    public function getUpdatedAt()
    {
        $o = $this->__offset(48);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    public function getUrlKey()
    {
        $o = $this->__offset(50);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    /**
     * @param int offset
     * @return uint
     */
    public function getCategoryIds($j)
    {
        $o = $this->__offset(52);
        return $o != 0 ? $this->bb->getUint($this->__vector($o) + $j * 4) : 0;
    }

    /**
     * @return int
     */
    public function getCategoryIdsLength()
    {
        $o = $this->__offset(52);
        return $o != 0 ? $this->__vector_len($o) : 0;
    }

    /**
     * @returnVectorOffset
     */
    public function getExtendAttrValue($j)
    {
        $o = $this->__offset(54);
        $obj = new KeyValue();
        return $o != 0 ? $obj->init($this->__indirect($this->__vector($o) + $j * 4), $this->bb) : null;
    }

    /**
     * @return int
     */
    public function getExtendAttrValueLength()
    {
        $o = $this->__offset(54);
        return $o != 0 ? $this->__vector_len($o) : 0;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startProductWebsiteInfo(FlatBufferBuilder $builder)
    {
        $builder->StartObject(26);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return ProductWebsiteInfo
     */
    public static function createProductWebsiteInfo(FlatBufferBuilder $builder, $website_id, $product_id, $grow_rate, $price, $special_price, $buy_limit, $name, $foreign_name, $short_name, $name_after, $name_before, $short_description, $foreign_short_description, $preferred_customs_clearance, $tax_class_id, $online_time, $offline_time, $product_tag, $product_activity_content, $status, $exchange_point_rate, $stop_update_price, $updated_at, $url_key, $category_ids, $extend_attr_value)
    {
        $builder->startObject(26);
        self::addWebsiteId($builder, $website_id);
        self::addProductId($builder, $product_id);
        self::addGrowRate($builder, $grow_rate);
        self::addPrice($builder, $price);
        self::addSpecialPrice($builder, $special_price);
        self::addBuyLimit($builder, $buy_limit);
        self::addName($builder, $name);
        self::addForeignName($builder, $foreign_name);
        self::addShortName($builder, $short_name);
        self::addNameAfter($builder, $name_after);
        self::addNameBefore($builder, $name_before);
        self::addShortDescription($builder, $short_description);
        self::addForeignShortDescription($builder, $foreign_short_description);
        self::addPreferredCustomsClearance($builder, $preferred_customs_clearance);
        self::addTaxClassId($builder, $tax_class_id);
        self::addOnlineTime($builder, $online_time);
        self::addOfflineTime($builder, $offline_time);
        self::addProductTag($builder, $product_tag);
        self::addProductActivityContent($builder, $product_activity_content);
        self::addStatus($builder, $status);
        self::addExchangePointRate($builder, $exchange_point_rate);
        self::addStopUpdatePrice($builder, $stop_update_price);
        self::addUpdatedAt($builder, $updated_at);
        self::addUrlKey($builder, $url_key);
        self::addCategoryIds($builder, $category_ids);
        self::addExtendAttrValue($builder, $extend_attr_value);
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
    public static function addProductId(FlatBufferBuilder $builder, $productId)
    {
        $builder->addUintX(1, $productId, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param double
     * @return void
     */
    public static function addGrowRate(FlatBufferBuilder $builder, $growRate)
    {
        $builder->addDoubleX(2, $growRate, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param double
     * @return void
     */
    public static function addPrice(FlatBufferBuilder $builder, $price)
    {
        $builder->addDoubleX(3, $price, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param double
     * @return void
     */
    public static function addSpecialPrice(FlatBufferBuilder $builder, $specialPrice)
    {
        $builder->addDoubleX(4, $specialPrice, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addBuyLimit(FlatBufferBuilder $builder, $buyLimit)
    {
        $builder->addUintX(5, $buyLimit, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addName(FlatBufferBuilder $builder, $name)
    {
        $builder->addOffsetX(6, $name, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addForeignName(FlatBufferBuilder $builder, $foreignName)
    {
        $builder->addOffsetX(7, $foreignName, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addShortName(FlatBufferBuilder $builder, $shortName)
    {
        $builder->addOffsetX(8, $shortName, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addNameAfter(FlatBufferBuilder $builder, $nameAfter)
    {
        $builder->addOffsetX(9, $nameAfter, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addNameBefore(FlatBufferBuilder $builder, $nameBefore)
    {
        $builder->addOffsetX(10, $nameBefore, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addShortDescription(FlatBufferBuilder $builder, $shortDescription)
    {
        $builder->addOffsetX(11, $shortDescription, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addForeignShortDescription(FlatBufferBuilder $builder, $foreignShortDescription)
    {
        $builder->addOffsetX(12, $foreignShortDescription, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addPreferredCustomsClearance(FlatBufferBuilder $builder, $preferredCustomsClearance)
    {
        $builder->addUintX(13, $preferredCustomsClearance, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addTaxClassId(FlatBufferBuilder $builder, $taxClassId)
    {
        $builder->addUintX(14, $taxClassId, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addOnlineTime(FlatBufferBuilder $builder, $onlineTime)
    {
        $builder->addUintX(15, $onlineTime, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addOfflineTime(FlatBufferBuilder $builder, $offlineTime)
    {
        $builder->addUintX(16, $offlineTime, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addProductTag(FlatBufferBuilder $builder, $productTag)
    {
        $builder->addOffsetX(17, $productTag, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addProductActivityContent(FlatBufferBuilder $builder, $productActivityContent)
    {
        $builder->addOffsetX(18, $productActivityContent, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addStatus(FlatBufferBuilder $builder, $status)
    {
        $builder->addUintX(19, $status, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param double
     * @return void
     */
    public static function addExchangePointRate(FlatBufferBuilder $builder, $exchangePointRate)
    {
        $builder->addDoubleX(20, $exchangePointRate, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param ushort
     * @return void
     */
    public static function addStopUpdatePrice(FlatBufferBuilder $builder, $stopUpdatePrice)
    {
        $builder->addUshortX(21, $stopUpdatePrice, 0);
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
     * @param StringOffset
     * @return void
     */
    public static function addUrlKey(FlatBufferBuilder $builder, $urlKey)
    {
        $builder->addOffsetX(23, $urlKey, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param VectorOffset
     * @return void
     */
    public static function addCategoryIds(FlatBufferBuilder $builder, $categoryIds)
    {
        $builder->addOffsetX(24, $categoryIds, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param array offset array
     * @return int vector offset
     */
    public static function createCategoryIdsVector(FlatBufferBuilder $builder, array $data)
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
    public static function startCategoryIdsVector(FlatBufferBuilder $builder, $numElems)
    {
        $builder->startVector(4, $numElems, 4);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param VectorOffset
     * @return void
     */
    public static function addExtendAttrValue(FlatBufferBuilder $builder, $extendAttrValue)
    {
        $builder->addOffsetX(25, $extendAttrValue, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param array offset array
     * @return int vector offset
     */
    public static function createExtendAttrValueVector(FlatBufferBuilder $builder, array $data)
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
    public static function startExtendAttrValueVector(FlatBufferBuilder $builder, $numElems)
    {
        $builder->startVector(4, $numElems, 4);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endProductWebsiteInfo(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }

    /**
     * 组装数据
     * @return array
     */
    public function asArray()
    {

        $info = array(
            "websiteId" => $this->getWebsiteId(),
            "productId" => $this->getProductId(),
            "growRate" => $this->getGrowRate(),
            "price" => $this->getPrice(),
            "specialPrice" => $this->getSpecialPrice(),
            "buyLimit" => $this->getBuyLimit(),
            "name" => $this->getName(),
            "foreignName" => $this->getForeignName(),
            "shortName" => $this->getShortName(),
            "nameAfter" => $this->getNameAfter(),
            "nameBefore" => $this->getNameBefore(),
            "shortDescription" => $this->getShortDescription(),
            "foreignShortDescription" => $this->getForeignShortDescription(),
            "preferredCustomsClearance" => $this->getPreferredCustomsClearance(),
            "taxClassId" => $this->getTaxClassId(),
            "onlineTime" => $this->getOnlineTime(),
            "offlineTime"=>$this->getOfflineTime(),
            "productTag"=>$this->getProductTag(),
            "productActivityContent" => $this->getProductActivityContent(),
            "status" => $this->getStatus(),
            "exchangePointRate" => $this->getExchangePointRate(),
        );
        $info["stopUpdatePrice"] = $this->getStopUpdatePrice();

        $extendAttrValue = array();
        for ($i = 0; $i < $this->getExtendAttrValueLength(); $i++) {
            $extendAttrValue[$this->getExtendAttrValue($i)->getK()] = $this->getExtendAttrValue($i)->getV();
        }
        $info['categoryIds'] = array();
        $categoryIdsLength =$this->getCategoryIdsLength();
        for ($j = 0; $j < $categoryIdsLength; $j++) {
            $info['categoryIds'][] = $this->getCategoryIds($j);
        }
        $info["extendAttrValue"] = $extendAttrValue;
        $info["updated_at"] = $this->getUpdatedAt();

        return $info;
    }

}

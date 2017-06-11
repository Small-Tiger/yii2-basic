<?php
// automatically generated, do not modify

namespace Fb\ConfigureCenter;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class Website extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return Website
     */
    public static function getRootAsWebsite(ByteBuffer $bb)
    {
        $obj = new Website();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return Website
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

    public function getDomain()
    {
        $o = $this->__offset(6);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    public function getName()
    {
        $o = $this->__offset(8);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    public function getAbbreviation()
    {
        $o = $this->__offset(10);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    /**
     * @return ushort
     */
    public function getStatus()
    {
        $o = $this->__offset(12);
        return $o != 0 ? $this->bb->getUshort($o + $this->bb_pos) : 0;
    }

    public function getCurrencyCode()
    {
        $o = $this->__offset(14);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    public function getImageUrl()
    {
        $o = $this->__offset(16);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startWebsite(FlatBufferBuilder $builder)
    {
        $builder->StartObject(7);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return Website
     */
    public static function createWebsite(FlatBufferBuilder $builder, $website_id, $domain, $name, $abbreviation, $status, $currency_code, $image_url)
    {
        $builder->startObject(7);
        self::addWebsiteId($builder, $website_id);
        self::addDomain($builder, $domain);
        self::addName($builder, $name);
        self::addAbbreviation($builder, $abbreviation);
        self::addStatus($builder, $status);
        self::addCurrencyCode($builder, $currency_code);
        self::addImageUrl($builder, $image_url);
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
     * @param StringOffset
     * @return void
     */
    public static function addDomain(FlatBufferBuilder $builder, $domain)
    {
        $builder->addOffsetX(1, $domain, 0);
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
    public static function addAbbreviation(FlatBufferBuilder $builder, $abbreviation)
    {
        $builder->addOffsetX(3, $abbreviation, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param ushort
     * @return void
     */
    public static function addStatus(FlatBufferBuilder $builder, $status)
    {
        $builder->addUshortX(4, $status, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addCurrencyCode(FlatBufferBuilder $builder, $currencyCode)
    {
        $builder->addOffsetX(5, $currencyCode, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addImageUrl(FlatBufferBuilder $builder, $imageUrl)
    {
        $builder->addOffsetX(6, $imageUrl, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endWebsite(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }

    public function asArray()
    {
        $array = array();
        $array["website_id"] = $this->getWebsiteId();
        $array["domain"] = $this->getDomain();
        $array["name"] = $this->getName();
        $array["abbreviation"] = $this->getAbbreviation();
        $array["status"] = $this->getStatus();
        $array["currencyCode"] = $this->getCurrencyCode();
        $array["imageUrl"] = $this->getImageUrl();
        
        return $array;
    }
}

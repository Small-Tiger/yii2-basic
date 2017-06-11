<?php
// automatically generated, do not modify

namespace Fb\BaseProductClass;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class OperateCategory extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return OperateCategory
     */
    public static function getRootAsOperateCategory(ByteBuffer $bb)
    {
        $obj = new OperateCategory();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return OperateCategory
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

    public function getCategoryPath()
    {
        $o = $this->__offset(6);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startOperateCategory(FlatBufferBuilder $builder)
    {
        $builder->StartObject(2);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return OperateCategory
     */
    public static function createOperateCategory(FlatBufferBuilder $builder, $website_id, $category_path)
    {
        $builder->startObject(2);
        self::addWebsiteId($builder, $website_id);
        self::addCategoryPath($builder, $category_path);
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
    public static function addCategoryPath(FlatBufferBuilder $builder, $categoryPath)
    {
        $builder->addOffsetX(1, $categoryPath, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endOperateCategory(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }

    public function asArray()
    {
        $array = array();
        $array["website_id"] = $this->getWebsiteId();
        $array["category_path"] = $this->getCategoryPath();
        return $array;
    }
}

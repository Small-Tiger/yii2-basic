<?php
// automatically generated, do not modify

namespace Fb\BaseCategoryW;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class DelCategoryRequest extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return DelCategoryRequest
     */
    public static function getRootAsDelCategoryRequest(ByteBuffer $bb)
    {
        $obj = new DelCategoryRequest();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return DelCategoryRequest
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
    public function getOperatorId()
    {
        $o = $this->__offset(4);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @return uint
     */
    public function getWebsiteId()
    {
        $o = $this->__offset(6);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @return uint
     */
    public function getCategoryId()
    {
        $o = $this->__offset(8);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startDelCategoryRequest(FlatBufferBuilder $builder)
    {
        $builder->StartObject(3);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return DelCategoryRequest
     */
    public static function createDelCategoryRequest(FlatBufferBuilder $builder, $operator_id, $website_id, $category_id)
    {
        $builder->startObject(3);
        self::addOperatorId($builder, $operator_id);
        self::addWebsiteId($builder, $website_id);
        self::addCategoryId($builder, $category_id);
        $o = $builder->endObject();
        return $o;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addOperatorId(FlatBufferBuilder $builder, $operatorId)
    {
        $builder->addUintX(0, $operatorId, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addWebsiteId(FlatBufferBuilder $builder, $websiteId)
    {
        $builder->addUintX(1, $websiteId, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addCategoryId(FlatBufferBuilder $builder, $categoryId)
    {
        $builder->addUintX(2, $categoryId, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endDelCategoryRequest(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }
}

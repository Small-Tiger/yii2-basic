<?php
// automatically generated, do not modify

namespace Fb\BaseCategory;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class CategoryTreeRequest extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return CategoryTreeRequest
     */
    public static function getRootAsCategoryTreeRequest(ByteBuffer $bb)
    {
        $obj = new CategoryTreeRequest();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return CategoryTreeRequest
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
    public function getParentId()
    {
        $o = $this->__offset(6);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @return byte
     */
    public function getMaxLevel()
    {
        $o = $this->__offset(8);
        return $o != 0 ? $this->bb->getByte($o + $this->bb_pos) : 0;
    }

    /**
     * @param int offset
     * @return string
     */
    public function getFields($j)
    {
        $o = $this->__offset(10);
        return $o != 0 ? $this->__string($this->__vector($o) + $j * 4) : 0;
    }

    /**
     * @return int
     */
    public function getFieldsLength()
    {
        $o = $this->__offset(10);
        return $o != 0 ? $this->__vector_len($o) : 0;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startCategoryTreeRequest(FlatBufferBuilder $builder)
    {
        $builder->StartObject(4);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return CategoryTreeRequest
     */
    public static function createCategoryTreeRequest(FlatBufferBuilder $builder, $website_id, $parent_id, $max_level, $fields)
    {
        $builder->startObject(4);
        self::addWebsiteId($builder, $website_id);
        self::addParentId($builder, $parent_id);
        self::addMaxLevel($builder, $max_level);
        self::addFields($builder, $fields);
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
    public static function addParentId(FlatBufferBuilder $builder, $parentId)
    {
        $builder->addUintX(1, $parentId, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param byte
     * @return void
     */
    public static function addMaxLevel(FlatBufferBuilder $builder, $maxLevel)
    {
        $builder->addByteX(2, $maxLevel, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param VectorOffset
     * @return void
     */
    public static function addFields(FlatBufferBuilder $builder, $fields)
    {
        $builder->addOffsetX(3, $fields, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param array offset array
     * @return int vector offset
     */
    public static function createFieldsVector(FlatBufferBuilder $builder, array $data)
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
    public static function startFieldsVector(FlatBufferBuilder $builder, $numElems)
    {
        $builder->startVector(4, $numElems, 4);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endCategoryTreeRequest(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }
}

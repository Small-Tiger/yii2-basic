<?php
// automatically generated, do not modify

namespace Fb\BaseCategoryW;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class AddCategoryRequest extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return AddCategoryRequest
     */
    public static function getRootAsAddCategoryRequest(ByteBuffer $bb)
    {
        $obj = new AddCategoryRequest();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return AddCategoryRequest
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
    public function getParentId()
    {
        $o = $this->__offset(8);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    public function getName()
    {
        $o = $this->__offset(10);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    /**
     * @return uint
     */
    public function getIncludeInMenu()
    {
        $o = $this->__offset(12);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @return uint
     */
    public function getStatus()
    {
        $o = $this->__offset(14);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @returnVectorOffset
     */
    public function getAttrValue($j)
    {
        $o = $this->__offset(16);
        $obj = new KeyValue();
        return $o != 0 ? $obj->init($this->__indirect($this->__vector($o) + $j * 4), $this->bb) : null;
    }

    /**
     * @return int
     */
    public function getAttrValueLength()
    {
        $o = $this->__offset(16);
        return $o != 0 ? $this->__vector_len($o) : 0;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startAddCategoryRequest(FlatBufferBuilder $builder)
    {
        $builder->StartObject(7);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return AddCategoryRequest
     */
    public static function createAddCategoryRequest(FlatBufferBuilder $builder, $operator_id, $website_id, $parent_id, $name, $include_in_menu, $status, $attr_value)
    {
        $builder->startObject(7);
        self::addOperatorId($builder, $operator_id);
        self::addWebsiteId($builder, $website_id);
        self::addParentId($builder, $parent_id);
        self::addName($builder, $name);
        self::addIncludeInMenu($builder, $include_in_menu);
        self::addStatus($builder, $status);
        self::addAttrValue($builder, $attr_value);
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
    public static function addParentId(FlatBufferBuilder $builder, $parentId)
    {
        $builder->addUintX(2, $parentId, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addName(FlatBufferBuilder $builder, $name)
    {
        $builder->addOffsetX(3, $name, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addIncludeInMenu(FlatBufferBuilder $builder, $includeInMenu)
    {
        $builder->addUintX(4, $includeInMenu, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addStatus(FlatBufferBuilder $builder, $status)
    {
        $builder->addUintX(5, $status, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param VectorOffset
     * @return void
     */
    public static function addAttrValue(FlatBufferBuilder $builder, $attrValue)
    {
        $builder->addOffsetX(6, $attrValue, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param array offset array
     * @return int vector offset
     */
    public static function createAttrValueVector(FlatBufferBuilder $builder, array $data)
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
    public static function startAttrValueVector(FlatBufferBuilder $builder, $numElems)
    {
        $builder->startVector(4, $numElems, 4);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endAddCategoryRequest(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }
}

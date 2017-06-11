<?php
// automatically generated, do not modify

namespace Fb\Product;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;
use \Fb\Base\KeyValue;

class Product extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return Product
     */
    public static function getRootAsProduct(ByteBuffer $bb)
    {
        $obj = new Product();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return Product
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
    public function getEntityId()
    {
        $o = $this->__offset(4);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @return uint
     */
    public function getAttributeSetId()
    {
        $o = $this->__offset(6);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @returnVectorOffset
     */
    public function getAttrValue($j)
    {
        $o = $this->__offset(8);
        $obj = new KeyValue();
        return $o != 0 ? $obj->init($this->__indirect($this->__vector($o) + $j * 4), $this->bb) : null;
    }

    /**
     * @return int
     */
    public function getAttrValueLength()
    {
        $o = $this->__offset(8);
        return $o != 0 ? $this->__vector_len($o) : 0;
    }

    public function getName()
    {
        $o = $this->__offset(10);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        $o = $this->__offset(12);
        return $o != 0 ? $this->bb->getInt($o + $this->bb_pos) : 0;
    }

    /**
     * @return int
     */
    public function getVisibility()
    {
        $o = $this->__offset(14);
        return $o != 0 ? $this->bb->getInt($o + $this->bb_pos) : 0;
    }

    public function getSku()
    {
        $o = $this->__offset(16);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    public function getTypeId()
    {
        $o = $this->__offset(18);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    public function getCreatedAt()
    {
        $o = $this->__offset(20);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    public function getUpdatedAt()
    {
        $o = $this->__offset(22);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    public function getSmallImage()
    {
        $o = $this->__offset(24);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    /**
     * @param int offset
     * @return string
     */
    public function getMediaGallery($j)
    {
        $o = $this->__offset(26);
        return $o != 0 ? $this->__string($this->__vector($o) + $j * 4) : 0;
    }

    /**
     * @return int
     */
    public function getMediaGalleryLength()
    {
        $o = $this->__offset(26);
        return $o != 0 ? $this->__vector_len($o) : 0;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startProduct(FlatBufferBuilder $builder)
    {
        $builder->StartObject(12);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return Product
     */
    public static function createProduct(FlatBufferBuilder $builder, $entity_id, $attribute_set_id, $attr_value, $name, $status, $visibility, $sku, $type_id, $created_at, $updated_at, $small_image, $media_gallery)
    {
        $builder->startObject(12);
        self::addEntityId($builder, $entity_id);
        self::addAttributeSetId($builder, $attribute_set_id);
        self::addAttrValue($builder, $attr_value);
        self::addName($builder, $name);
        self::addStatus($builder, $status);
        self::addVisibility($builder, $visibility);
        self::addSku($builder, $sku);
        self::addTypeId($builder, $type_id);
        self::addCreatedAt($builder, $created_at);
        self::addUpdatedAt($builder, $updated_at);
        self::addSmallImage($builder, $small_image);
        self::addMediaGallery($builder, $media_gallery);
        $o = $builder->endObject();
        return $o;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addEntityId(FlatBufferBuilder $builder, $entityId)
    {
        $builder->addUintX(0, $entityId, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addAttributeSetId(FlatBufferBuilder $builder, $attributeSetId)
    {
        $builder->addUintX(1, $attributeSetId, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param VectorOffset
     * @return void
     */
    public static function addAttrValue(FlatBufferBuilder $builder, $attrValue)
    {
        $builder->addOffsetX(2, $attrValue, 0);
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
     * @param StringOffset
     * @return void
     */
    public static function addName(FlatBufferBuilder $builder, $name)
    {
        $builder->addOffsetX(3, $name, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param int
     * @return void
     */
    public static function addStatus(FlatBufferBuilder $builder, $status)
    {
        $builder->addIntX(4, $status, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param int
     * @return void
     */
    public static function addVisibility(FlatBufferBuilder $builder, $visibility)
    {
        $builder->addIntX(5, $visibility, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addSku(FlatBufferBuilder $builder, $sku)
    {
        $builder->addOffsetX(6, $sku, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addTypeId(FlatBufferBuilder $builder, $typeId)
    {
        $builder->addOffsetX(7, $typeId, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addCreatedAt(FlatBufferBuilder $builder, $createdAt)
    {
        $builder->addOffsetX(8, $createdAt, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addUpdatedAt(FlatBufferBuilder $builder, $updatedAt)
    {
        $builder->addOffsetX(9, $updatedAt, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addSmallImage(FlatBufferBuilder $builder, $smallImage)
    {
        $builder->addOffsetX(10, $smallImage, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param VectorOffset
     * @return void
     */
    public static function addMediaGallery(FlatBufferBuilder $builder, $mediaGallery)
    {
        $builder->addOffsetX(11, $mediaGallery, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param array offset array
     * @return int vector offset
     */
    public static function createMediaGalleryVector(FlatBufferBuilder $builder, array $data)
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
    public static function startMediaGalleryVector(FlatBufferBuilder $builder, $numElems)
    {
        $builder->startVector(4, $numElems, 4);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endProduct(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }
}

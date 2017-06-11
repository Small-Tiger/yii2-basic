<?php
// automatically generated, do not modify

namespace Fb\Product_Backend;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class ProductImageInfo extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return ProductImageInfo
     */
    public static function getRootAsProductImageInfo(ByteBuffer $bb)
    {
        $obj = new ProductImageInfo();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return ProductImageInfo
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
    public function getProductId()
    {
        $o = $this->__offset(4);
        return $o != 0 ? $this->bb->getUint($o + $this->bb_pos) : 0;
    }

    /**
     * @param int offset
     * @return string
     */
    public function getImages($j)
    {
        $o = $this->__offset(6);
        return $o != 0 ? $this->__string($this->__vector($o) + $j * 4) : 0;
    }

    /**
     * @return int
     */
    public function getImagesLength()
    {
        $o = $this->__offset(6);
        return $o != 0 ? $this->__vector_len($o) : 0;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startProductImageInfo(FlatBufferBuilder $builder)
    {
        $builder->StartObject(2);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return ProductImageInfo
     */
    public static function createProductImageInfo(FlatBufferBuilder $builder, $product_id, $images)
    {
        $builder->startObject(2);
        self::addProductId($builder, $product_id);
        self::addImages($builder, $images);
        $o = $builder->endObject();
        return $o;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param uint
     * @return void
     */
    public static function addProductId(FlatBufferBuilder $builder, $productId)
    {
        $builder->addUintX(0, $productId, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param VectorOffset
     * @return void
     */
    public static function addImages(FlatBufferBuilder $builder, $images)
    {
        $builder->addOffsetX(1, $images, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param array offset array
     * @return int vector offset
     */
    public static function createImagesVector(FlatBufferBuilder $builder, array $data)
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
    public static function startImagesVector(FlatBufferBuilder $builder, $numElems)
    {
        $builder->startVector(4, $numElems, 4);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endProductImageInfo(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }

    public function asArray()
    {
        $info = array();
        $info["productId"] = $this->getProductId();
        $info["imageCover"] ="";
        $info["images"] = array();
        for ($i = 0; $i < $this->getImagesLength(); $i++) {
            $image = $this->getImages($i);
            $info["images"][] = $image;
            if($i==0){
                $info["imageCover"] = $image;
            }
        }
        return $info;
    }
}

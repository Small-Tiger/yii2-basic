<?php
/**
 * Created by PhpStorm.
 * User: blake_sha
 * Date: 2016/8/30
 * Time: 17:07
 */

namespace Fb\Product_Backend\pack;


use Fb\Base\BasePack;
use Google\FlatBuffers\ByteBuffer;

class GetProductBaseRelatedInfoRespond extends BasePack
{
    public static function unpack($buf)
    {
        $productBuff = ByteBuffer::wrap($buf);
        return \Fb\Product_Backend\GetProductBaseRelatedInfoRespond::getRootAsGetProductBaseRelatedInfoRespond($productBuff);
    }

}
<?php
/**
 * Created by PhpStorm.
 * User: blake_sha
 * Date: 2016/9/8
 * Time: 9:41
 */

namespace Fb\Product_Backend\pack;


use Fb\Base\BasePack;
use Google\FlatBuffers\ByteBuffer;

class GetProductCategoryInfoRespond extends BasePack
{
    public static function unpack($buf)
    {
        $respondBuff = ByteBuffer::wrap($buf);
        return \Fb\Product_Backend\GetProductCategoryInfoRespond::getRootAsGetProductCategoryInfoRespond($respondBuff);
    }

}
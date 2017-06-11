<?php
/**
 * Created by PhpStorm.
 * User: zhengpenglin
 * Date: 2016/09/27
 * Time: 19:30
 */

namespace Fb\Product_Backend\pack;


use Fb\Base\BasePack;
use Google\FlatBuffers\ByteBuffer;

class GetProductInfoRespond extends BasePack
{
    public static function unpack($buf)
    {
        $respondBuf = ByteBuffer::wrap($buf);
        return \Fb\Product_Backend\GetProductInfoRespond::getRootAsGetProductInfoRespond($respondBuf);

    }

}
<?php
/**
 * Created by PhpStorm.
 * User: htc
 * Date: 2016/8/30
 * Time: 16:11
 */

namespace Fb\Product_Backend\pack;


use Fb\Base\BasePack;
use Google\FlatBuffers\ByteBuffer;

class SearchProductBaseInfoRespond extends BasePack
{
    public static function unpack($buf)
    {
        $respondBuf = ByteBuffer::wrap($buf);
        return \Fb\Product_Backend\SearchProductBaseInfoRespond::getRootAsSearchProductBaseInfoRespond($respondBuf);

    }

}
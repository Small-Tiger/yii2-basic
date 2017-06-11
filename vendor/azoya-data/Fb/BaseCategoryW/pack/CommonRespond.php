<?php
/**
 * Created by PhpStorm.
 * User: htc
 * Date: 2016/4/27
 * Time: 15:25
 */

namespace Fb\BaseCategoryW\pack;


use Fb\Base\BasePack;
use Google\FlatBuffers\ByteBuffer;

class CommonRespond extends  BasePack
{
    public static function unpack($buf)
    {
        return \Fb\BaseCategoryW\CommonRespond::getRootAsCommonRespond(ByteBuffer::wrap($buf));
    }
}
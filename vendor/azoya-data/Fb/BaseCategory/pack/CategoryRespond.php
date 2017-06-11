<?php
/**
 * Created by PhpStorm.
 * User: htc
 * Date: 2016/4/27
 * Time: 14:57
 */

namespace Fb\BaseCategory\pack;


use Fb\Base\BasePack;
use Google\FlatBuffers\ByteBuffer;

class CategoryRespond extends  BasePack
{
    public static function unpack($buf)
    {
        return \Fb\BaseCategory\CategoryRespond::getRootAsCategoryRespond(ByteBuffer::wrap($buf));
    }

}
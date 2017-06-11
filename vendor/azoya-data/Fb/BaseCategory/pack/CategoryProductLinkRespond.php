<?php
/**
 * Created by PhpStorm.
 * User: htc
 * Date: 2017/1/12
 * Time: 15:46
 */

namespace Fb\BaseCategory\pack;


use Fb\Base\BasePack;
use Google\FlatBuffers\ByteBuffer;

class CategoryProductLinkRespond extends BasePack
{
    public static function unpack($buf)
    {
        return \Fb\BaseCategory\CategoryProductLinkRespond::getRootAsCategoryProductLinkRespond(ByteBuffer::wrap($buf));
    }

}
<?php
/**
 * Created by PhpStorm.
 * User: blake_sha
 * Date: 2016/4/27
 * Time: 14:43
 */

namespace Fb\BaseCategory\pack;


use Fb\Base\BasePack;
use Google\FlatBuffers\ByteBuffer;

class CategoryTreeRespond extends BasePack
{
    public static function unpack($buf)
    {
        return \Fb\BaseCategory\CategoryTreeRespond::getRootAsCategoryTreeRespond(ByteBuffer::wrap($buf));
    }



}
<?php
/**
 * Created by PhpStorm.
 * User: blake_sha
 * Date: 2016/4/26
 * Time: 13:10
 */

namespace Fb\BaseAttributes\pack;


use Fb\Base\BasePack;
use Google\FlatBuffers\ByteBuffer;

class GetProductClassAttributeRespond extends BasePack
{
    public static function unpack($buf)
    {
        return \Fb\BaseAttributes\GetProductClassAttributeRespond::getRootAsGetProductClassAttributeRespond(ByteBuffer::wrap($buf));
    }

}
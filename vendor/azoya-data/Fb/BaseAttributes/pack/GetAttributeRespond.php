<?php
/**
 * Created by PhpStorm.
 * User: htc
 * Date: 2016/4/25
 * Time: 16:00
 */

namespace Fb\BaseAttributes\pack;


use Fb\Base\BasePack;
use Google\FlatBuffers\ByteBuffer;

class GetAttributeRespond extends BasePack
{
    public static function unpack($buf){
       return \Fb\BaseAttributes\GetAttributeRespond::getRootAsGetAttributeRespond(ByteBuffer::wrap($buf));
    }
}
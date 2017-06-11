<?php
/**
 * Created by PhpStorm.
 * User: htc
 * Date: 2016/4/25
 * Time: 16:12
 */

namespace Fb\BaseAttributes\pack;


use Fb\Base\BasePack;
use Fb\BaseAttributes\AttributeValue;
use Google\FlatBuffers\ByteBuffer;
use Google\FlatBuffers\FlatbufferBuilder;

class Attribute extends BasePack
{
    public static function pack()
    {

    }



    public static function unpak($buf)
    {
        
        return \Fb\BaseAttributes\Attribute::getRootAsAttribute(ByteBuffer::wrap($buf));
    }

}
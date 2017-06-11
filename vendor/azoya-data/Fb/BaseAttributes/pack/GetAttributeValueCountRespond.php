<?php
/**
 * Created by PhpStorm.
 * User: blake_sha
 * Date: 2016/4/25
 * Time: 19:06
 */
namespace Fb\BaseAttributes\pack;
use Fb\Base\BasePack;
use Google\FlatBuffers\ByteBuffer;


Class GetAttributeValueCountRespond extends BasePack{

    public static function unpack($buf)
    {
        return \Fb\BaseAttributes\GetAttributeValueCountRespond::getRootAsGetAttributeValueCountRespond(ByteBuffer::wrap($buf));
    }




}



?>
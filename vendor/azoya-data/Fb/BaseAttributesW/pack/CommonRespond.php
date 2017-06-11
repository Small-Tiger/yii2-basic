<?php
/**
 * Created by PhpStorm.
 * User: htc
 * Date: 2016/4/26
 * Time: 14:30
 */

namespace Fb\BaseAttributesW\pack;


use Fb\Base\BasePack;
use Google\FlatBuffers\ByteBuffer;

class CommonRespond extends BasePack
{
    public static function unpack($buf)
    {
        return  \Fb\BaseCategoryW\CommonRespond::getRootAsCommonRespond(ByteBuffer::wrap($buf));
    }

}
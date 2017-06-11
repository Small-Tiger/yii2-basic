<?php

namespace Fb\BaseProductClassW\pack;

use Fb\Base\BasePack;
use Google\FlatBuffers\ByteBuffer;

class CommonRespond extends BasePack
{

    public static function unpack($buf)
    {
        $productBuff = ByteBuffer::wrap($buf);
        return \Fb\BaseProductClassW\CommonRespond::getRootAsCommonRespond($productBuff);
    }

}

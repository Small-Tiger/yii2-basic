<?php
/**
 * Created by PhpStorm.
 * User: zhengpenglin
 * Date: 2016/4/25
 * Time: 10:33
 */

namespace Fb\BaseProductClass\pack;


use Fb\Base\BasePack;

use Google\FlatBuffers\ByteBuffer;

class GetProductClassStatisticsRespond extends BasePack
{
    public static function unpack($buf)
    {
        $productBuff = ByteBuffer::wrap($buf);
        return \Fb\BaseProductClass\GetProductClassStatisticsRespond::getRootAsGetProductClassStatisticsRespond($productBuff);
    }
}
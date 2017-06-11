<?php
/**
 * Created by PhpStorm.
 * User: blake_sha
 * Date: 2016/9/1
 * Time: 17:43
 */

namespace Fb\Merchant\pack;


use Fb\Base\BasePack;
use Google\FlatBuffers\ByteBuffer;

class GetMerchantWebsiteRespond extends BasePack
{

    public static function unpack($buf)
    {
        $productBuff = ByteBuffer::wrap($buf);
        return \Fb\Merchant\GetMerchantWebsiteRespond::getRootAsGetMerchantWebsiteRespond($productBuff);
    }

}
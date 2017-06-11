<?php
/**
 * Created by PhpStorm.
 * User: zhengpenglin
 * Date: 2016/09/07
 * Time: 9:27
 */

namespace Fb\Merchant\pack;


use Fb\Base\BasePack;
use Fb\Merchant\Command;
use Fb\Merchant\UnionRequest;
use Google\FlatBuffers\FlatbufferBuilder;

class GetMerchantRequest extends BasePack
{

    public static function pack($merchantIds)
    {
        $builder = new FlatbufferBuilder(1);

        $merchantIds = \Fb\Merchant\GetMerchantRequest::createMerchantIdsVector($builder, $merchantIds);

        $requestData = \Fb\Merchant\GetMerchantRequest::createGetMerchantRequest($builder, $merchantIds);

        $unionData = UnionRequest::createUnionRequest($builder, Command::GetMerchantRequest, $requestData);

        $builder->finish($unionData);

        $buf = $builder->dataBuffer();

        return $buf;

    }
}
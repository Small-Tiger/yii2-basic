<?php

namespace Fb\ConfigureCenter\pack;

use Fb\Base\BasePack;
use \Google\FlatBuffers\FlatbufferBuilder;

class GetAllWebsiteRequest extends BasePack
{

    public static function pack($website_ids = array())
    {

        $builder = new FlatbufferBuilder(1);

        $value_ids = \Fb\ConfigureCenter\GetAllWebsiteRequest::createWebsiteIdsVector($builder, $website_ids);

        $requestData = \Fb\ConfigureCenter\GetAllWebsiteRequest::createGetAllWebsiteRequest($builder, $value_ids);

        $unionData = \Fb\ConfigureCenter\UnionRequest::createUnionRequest($builder, \Fb\ConfigureCenter\Command::GetAllWebsiteRequest, $requestData);

        $builder->finish($unionData);

        $buf = $builder->dataBuffer();

        return $buf;
    }

}

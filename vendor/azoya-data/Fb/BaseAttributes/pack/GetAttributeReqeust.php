<?php
/**
 * Created by PhpStorm.
 * User: zhengpenglin
 * Date: 2016/4/25
 * Time: 9:55
 */

namespace Fb\BaseAttributes\pack;


use Fb\BaseAttributes\GetAttributeRequest;
use Google\FlatBuffers\FlatbufferBuilder;

class GetAttributeReqeust
{
    public static function pack($categoryId,$attributeId,$name,$needValue=false)
    {

        $builder = new FlatbufferBuilder(1);

        $attributeIds = GetAttributeRequest::createAttributeIdVector($builder,$attributeId);

        $nameOffset = $builder->createString($name);

        $request = GetAttributeRequest::createGetAttributeRequest($builder,$categoryId,$attributeIds,$nameOffset,$needValue);

        $unionData = \Fb\BaseAttributes\UnionRequest::createUnionRequest($builder, \Fb\BaseAttributes\Command::GetAttributeRequest, $request);

        $builder->finish($unionData);

        $buf = $builder->dataBuffer();

        return $buf;
        
    }


}
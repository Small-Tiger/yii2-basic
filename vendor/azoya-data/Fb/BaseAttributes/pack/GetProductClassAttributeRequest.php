<?php
/**
 * Created by PhpStorm.
 * User: blake_sha
 * Date: 2016/4/25
 * Time: 19:16
 */

namespace Fb\BaseAttributes\pack;


use Fb\Base\BasePack;
use Fb\BaseAttributes\Command;
use Fb\BaseAttributes\UnionRequest;
use Google\FlatBuffers\FlatbufferBuilder;

class GetProductClassAttributeRequest extends BasePack
{

    public static function pack($webId,$productClassId,$attributeId,$needValue=false,$categoryId = 0)
    {
        $builder = new FlatbufferBuilder(1);

        $attributeIdOffset = array();
        if($attributeId){
            foreach ($attributeId as $key=>$value){
                $attributeIdOffset[$key] = intval($value);
            }
        }

        $attributeIdOffset = \Fb\BaseAttributes\GetProductClassAttributeRequest::createAttributeIdVector($builder,$attributeIdOffset);

        $request = \Fb\BaseAttributes\GetProductClassAttributeRequest::createGetProductClassAttributeRequest($builder,intval($webId),intval($categoryId),intval($productClassId),$attributeIdOffset,$needValue);

        $unionData = UnionRequest::createUnionRequest($builder,Command::GetProductClassAttributeRequest,$request);

        $builder->finish($unionData);

        return $builder->dataBuffer();


    }


}
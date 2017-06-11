<?php
namespace Fb\BaseAttributesW\pack;
use Fb\Base\BasePack;
use Fb\BaseAttributesW\Command;
use Fb\BaseCategoryW\UnionRequest;
use Google\FlatBuffers\FlatbufferBuilder;

/**
 * Created by PhpStorm.
 * User: htc
 * Date: 2016/4/26
 * Time: 14:01
 */
class UpdateAttributeRequest extends BasePack
{
    public static function pack($attributeId,$name,$values,$categoryId,$operatorId)
    {
        $builder = new FlatbufferBuilder(1);

        $nameOffset = $builder->createString($name);

        $valuesArray = array();
        foreach ($values as $val){
            if($val){
                $valuesArray[] = $builder->createString($val);
            }

        }
        

        $valuesOffset  = \Fb\BaseAttributesW\UpdateAttributeRequest::createValuesVector($builder,$valuesArray);

        $request = \Fb\BaseAttributesW\UpdateAttributeRequest::createUpdateAttributeRequest($builder,$attributeId,$nameOffset,$valuesOffset,$categoryId,$operatorId);

        $unionData = UnionRequest::createUnionRequest($builder,Command::UpdateAttributeRequest,$request);

        $builder->finish($unionData);

        return $builder->dataBuffer();

    }

}
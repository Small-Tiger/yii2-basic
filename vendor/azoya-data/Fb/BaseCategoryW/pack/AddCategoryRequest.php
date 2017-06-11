<?php
/**
 * Created by PhpStorm.
 * User: htc
 * Date: 2016/4/27
 * Time: 15:19
 */

namespace Fb\BaseCategoryW\pack;


use Fb\Base\BasePack;
use Fb\Base\KeyValue;
use Fb\BaseAttributesW\UnionRequest;
use Fb\BaseCategoryW\Command;
use Google\FlatBuffers\FlatbufferBuilder;

class AddCategoryRequest extends BasePack
{
    public static function pack($operatorId,$websiteId,$parentId,$name,$includeInMenu,$status,$attrValue)
    {
        $builder = new FlatbufferBuilder(1);

        $nameOffset = $builder->createString($name);

        $status = intval($status);
        $includeInMenu = intval($includeInMenu);

        $attrValueOffset = array();
        if ($attrValue && count($attrValue)){
            foreach ($attrValue as $key=>$value){
                $key = $builder->createString($key);
                $value = $builder->createString($value);
                $attrValueOffset[] = KeyValue::createKeyValue($builder,$key,$value);
            }
        }
        $attrValueOffset = \Fb\BaseCategoryW\AddCategoryRequest::createAttrValueVector($builder,$attrValueOffset);

        $request = \Fb\BaseCategoryW\AddCategoryRequest::createAddCategoryRequest($builder,intval($operatorId),intval($websiteId),intval($parentId),$nameOffset,$includeInMenu,$status,$attrValueOffset);

        $unionData = UnionRequest::createUnionRequest($builder,Command::AddCategoryRequest,$request);

        $builder->finish($unionData);

        return $builder->dataBuffer();

    }


}
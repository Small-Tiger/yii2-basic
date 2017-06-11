<?php
/**
 * Created by PhpStorm.
 * User: blake_sha
 * Date: 2016/4/27
 * Time: 15:28
 */

namespace Fb\BaseCategoryW\pack;


use Fb\Base\BasePack;
use Fb\Base\KeyValue;
use Fb\BaseCategoryW\Command;
use Fb\BaseCategoryW\UnionRequest;
use Google\FlatBuffers\FlatbufferBuilder;

class UpdateCategoryRequest extends BasePack
{
    public static function pack($operatorId,$websiteId,$categoryId,$name,$includeInMenu,$status,$attrValue)
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
        $attrValueOffset =  \Fb\BaseCategoryW\UpdateCategoryRequest::createAttrValueVector($builder,$attrValueOffset);

        $request = \Fb\BaseCategoryW\UpdateCategoryRequest::createUpdateCategoryRequest($builder,intval($operatorId),intval($websiteId),intval($categoryId),$nameOffset,$includeInMenu,$status,$attrValueOffset);

        $unionData = UnionRequest::createUnionRequest($builder,Command::UpdateCategoryRequest,$request);

        $builder->finish($unionData);

        return $builder->dataBuffer();

    }
}
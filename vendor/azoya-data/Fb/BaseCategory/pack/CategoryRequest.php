<?php
/**
 * Created by PhpStorm.
 * User: blake_sha
 * Date: 2016/4/27
 * Time: 14:47
 */

namespace Fb\BaseCategory\pack;


use Fb\Base\BasePack;
use Fb\BaseCategory\Command;
use Fb\BaseCategory\UnionRequest;
use Google\FlatBuffers\FlatbufferBuilder;

class CategoryRequest extends BasePack
{
    public static function pack($websiteId, $categoryIds, $attributes)
    {
        $builder = new FlatbufferBuilder(1);

        foreach ($attributes as $key => $value) {
            $attributes[$key] = $builder->createString($value);
        }
        if ($categoryIds && count($categoryIds) > 0) {
            foreach ($categoryIds as $key => $value) {
                $categoryIds[$key] = intval($value);
            }
        }

        $categoryIdsOffset = \Fb\BaseCategory\CategoryRequest::createCategoryIdsVector($builder, $categoryIds);
        $attributesOffset = \Fb\BaseCategory\CategoryRequest::createFieldsVector($builder, $attributes);

        $request = \Fb\BaseCategory\CategoryRequest::createCategoryRequest($builder, $websiteId, $categoryIdsOffset, $attributesOffset);

        $unionData = UnionRequest::createUnionRequest($builder, Command::CategoryRequest, $request);

        $builder->finish($unionData);

        return $builder->dataBuffer();


    }

}
<?php
/**
 * Created by PhpStorm.
 * User: blake_sha
 * Date: 2016/5/23
 * Time: 15:49
 */

namespace Fb\BaseCategoryW\pack;

use Fb\Base\BasePack;
use Fb\BaseCategoryW\Command;
use Google\FlatBuffers\FlatbufferBuilder;
use Fb\BaseCategoryW\UnionRequest;



class PubCategoryRequest extends BasePack
{
    public static function pack($operatorId,$websiteId)
    {
        $builder = new FlatbufferBuilder(1);
        $request = \Fb\BaseCategoryW\PubCategoryRequest::createPubCategoryRequest($builder,intval($operatorId),intval($websiteId));
        $unionData = UnionRequest::createUnionRequest($builder,Command::PubCategoryRequest,$request);
        $builder->finish($unionData);
        return $builder->dataBuffer();
    }

}
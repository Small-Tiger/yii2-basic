<?php

namespace Fb\BaseProductClass\pack;

use Fb\Base\BasePack;
use \Google\FlatBuffers\FlatbufferBuilder;

class GetProductClassByCategoryIdRequest extends BasePack
{

    public static function pack($website_id, $category_id, $fields = array(), $page_index, $num)
    {

        $builder = new FlatbufferBuilder(1);
        $attr_offset = array();
        if (count($fields) > 0) {

            foreach ($fields as $k => $v) {
                $attr_offset[$k] = $builder->createString($v);
            }

        }
        $fieldsOffset = \Fb\BaseProductClass\GetProductClassByCategoryIdRequest::createFieldsVector($builder,$attr_offset);

        $requestData = \Fb\BaseProductClass\GetProductClassByCategoryIdRequest::createGetProductClassByCategoryIdRequest($builder, $website_id, $category_id, $fieldsOffset, $page_index, $num);

        $unionData = \Fb\BaseProductClass\UnionRequest::createUnionRequest($builder, \Fb\BaseProductClass\Command::GetProductClassByCategoryIdRequest, $requestData);

        $builder->finish($unionData);

        $buf = $builder->dataBuffer();

        return $buf;
    }

}

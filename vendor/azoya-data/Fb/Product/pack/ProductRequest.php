<?php
/**
 * Created by PhpStorm.
 * User: zhengpenglin
 * Date: 2016/4/25
 * Time: 10:33
 */

namespace Fb\Product\pack;


use Fb\Base\BasePack;

use \Google\FlatBuffers\FlatbufferBuilder;

class ProductRequest extends BasePack
{

    public static function pack($website_id, $product_id, $attributes)
    {
        $builder = new FlatbufferBuilder(1);

        $attr_offset = array();
        foreach ($attributes as $k => $v) {
            $attr_offset[$k] = $builder->createString($v);
        }

        $fields = \Fb\Product\ProductRequest::createAttributesVector($builder, $attr_offset);
        $productData = \Fb\Product\ProductRequest::createProductRequest($builder, $website_id, $product_id, $fields);
        $unionData = \Fb\Product\UnionRequest::createUnionRequest($builder, \Fb\Product\Command::ProductRequest, $productData);

        $builder->finish($unionData);

        $buf = $builder->dataBuffer();

        return $buf;
    }
}
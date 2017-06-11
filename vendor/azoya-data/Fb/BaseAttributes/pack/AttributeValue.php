<?php
/**
 * Created by PhpStorm.
 * User: htc
 * Date: 2016/4/25
 * Time: 16:15
 */

namespace Fb\BaseAttributes\pack;


use Fb\Base\BasePack;
use Google\FlatBuffers\ByteBuffer;
use Google\FlatBuffers\FlatbufferBuilder;

class AttributeValue extends BasePack
{
    public static function pack($attributeValueId,$name)
    {
        $builder = new FlatbufferBuilder(1);

        $packeName = $builder->createString($name);

        $packObj = \Fb\BaseAttributes\AttributeValue::createAttributeValue($builder,$attributeValueId,$packeName);

        $builder->finish($packObj);

      return $builder->dataBuffer();
    }

    public static function unpack($buf)
    {
        return \Fb\BaseAttributes\AttributeValue::getRootAsAttributeValue(ByteBuffer::wrap($buf));
    }





}
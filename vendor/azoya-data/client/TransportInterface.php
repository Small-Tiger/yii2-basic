<?php

namespace data\client;

/**
 * Created by PhpStorm.
 * User: zhengpenglin
 * Date: 2016/4/22
 * Time: 16:05
 */
interface TransportInterface
{

    /**
     * 发送请求
     * @param $buf buf 内容指针
     * @return mixed
     */
    public function request(\Google\FlatBuffers\ByteBuffer &$buf);

}
<?php
/**
 * Created by PhpStorm.
 * User: zhengpenglin
 * Date: 2016/8/15
 * Time: 14:13
 */

namespace data\client\Transport\ExtSocket;


class UdpTransport extends Transport
{

    /**
     * 初始化传输层
     * UdpTransport constructor.
     * @param array $config
     */
    public function __construct($config = [])
    {
        parent::__construct($config);

        //初始化socket
        $this->create();
    }

    /**
     * socket 链接
     * @param $addr
     * @param int $port
     */
    public function create()
    {

        $this->socket = UDP_Hlb_Open();
        if ($this->socket <= 0) {
            throw new Exception("socket UDP_Hlb_Open error.socket error code:" . $this->socket, $this->socket);
        }

    }

    /**
     * 向服务器发送请求
     * 在这里进行UDP PACKET打包
     * @param $data
     */
    public function request(\Google\FlatBuffers\ByteBuffer &$request_buffer)
    {

        //获取buf数据
        $input_data = $request_buffer->data();

        //发送&&接收数据
        $result = $this->sendAndRecv($input_data);
        if (strpos($result, "error:") > 0) {
            throw new Exception("socket UDP_Hlb_SendAndRecv error.err msg:" . $result);
        } else {
            //返回data buffer
            $buffer = $this->getRecvBuf();
            return $buffer;
        }

    }

    /**
     * 发送并接收socket
     * @param $input
     * @return bool
     * @throws Exception
     */
    private function sendAndRecv($input)
    {

        $recv = UDP_Hlb_SendAndRecv($this->getSocket(), $this->getServerKey(), $input, $this->getTimeout());
        $this->setRecvBuf($recv);

        return $recv;
    }
}
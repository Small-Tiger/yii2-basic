<?php
/**
 * Created by PhpStorm.
 * User: zhengpenglin
 * Date: 2016/8/15
 * Time: 14:10
 */

namespace data\client\Transport\Socket;


class UdpTransport extends Transport
{

    /**
     * 初始化传输层
     * @param $host
     * @param $port
     * @throws Exception
     */
    public function __construct($config = [])
    {
        parent::__construct($config);

        //初始化socket
        $this->create();
    }

    /**
     * 初始化udp socket
     * @throws Exception
     */
    protected function create()
    {
        if (!($this->socket = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP))) {
            throw new \Exception("socket create error.socket error code:" . socket_last_error($this->socket));
        }
    }

    /**
     * 实现udp的request接口
     * @param ByteBuffer $request_buffer
     * @return \Google\FlatBuffers\ByteBuffer
     * @throws Exception
     */
    public function request(\Google\FlatBuffers\ByteBuffer &$request_buffer)
    {

        // 生成随机id
        $this->generateSeqNum();

        //发送超时时间设置
        socket_set_option($this->socket, SOL_SOCKET, SO_SNDTIMEO, array("sec" => intval($this->send_timeout / 1000000), "usec" => $this->send_timeout % 1000000));

        //接收超时时间设置
        socket_set_option($this->socket, SOL_SOCKET, SO_RCVTIMEO, array("sec" => intval($this->recv_timeout / 1000000), "usec" => $this->recv_timeout % 1000000));

        //构造自定义包
        $packet = Packet::pack($this->seq_num, $request_buffer);

        //写入socket
        $this->write($packet);

        return $this->read($this->seq_num);

    }

    /**
     * udp socket 写入
     * @param $input
     * @throws Exception
     */
    private function write($input)
    {
        if (!socket_sendto($this->socket, $input, strlen($input), 0, $this->host, $this->port)) {
            throw new \Exception("udp transport write error: " . socket_strerror(socket_last_error($this->socket)));
        }
    }

    /**
     * udp socket 读
     * @param $reqId
     * @return \Google\FlatBuffers\ByteBuffer
     * @throws Exception
     */
    private function read($reqId)
    {
        if (!($buf = socket_read($this->socket, $this->recv_length, PHP_BINARY_READ))) {
            throw new \Exception("udp transport read error: " . socket_strerror(socket_last_error($this->socket)));
        }

        return Packet::unpack($buf, $reqId);
    }

}
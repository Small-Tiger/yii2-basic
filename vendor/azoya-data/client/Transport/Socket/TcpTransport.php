<?php
/**
 * Created by PhpStorm.
 * User: zhengpenglin
 * Date: 2016/8/15
 * Time: 14:10
 */

namespace data\client\Transport\Socket;


class TcpTransport extends Transport
{

    /**
     * 初始化传输层
     * @param $host
     * @param $port
     * @throws \Exception
     */
    public function __construct($config = [])
    {
        parent::__construct($config);
    }

    /**
     * 初始化tcp socket
     * @throws \Exception
     */
    protected function create()
    {
        if (!($this->socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP))) {
            throw new \Exception("socket create error.socket error code:" . socket_last_error($this->socket));
        }
    }

    /**
     * 实现tcp的request接口
     * @param ByteBuffer $request_buffer
     * @return \Google\FlatBuffers\ByteBuffer
     * @throws \Exception
     */
    public function request(\Google\FlatBuffers\ByteBuffer &$request_buffer)
    {

        //初始化socket
        $this->create();

        // 生成随机id
        $this->generateSeqNum();

        //设置socket阻塞模式
        socket_set_block($this->socket);

        //发送超时时间设置
        socket_set_option($this->socket, SOL_SOCKET, SO_SNDTIMEO, array("sec" => intval($this->send_timeout / 1000000), "usec" => $this->send_timeout % 1000000));

        //接收超时时间设置
        socket_set_option($this->socket, SOL_SOCKET, SO_RCVTIMEO, array("sec" => intval($this->recv_timeout / 1000000), "usec" => $this->recv_timeout % 1000000));

        //构造自定义包
        $packet = Packet::pack($this->seq_num, $request_buffer);

        //与服务器建立连接
        $this->connect();

        //写入socket
        $this->write($packet);

        return $this->read($this->seq_num);

    }

    /**
     * 连接服务器
     * @throws \Exception
     */
    private function connect()
    {
        if (!socket_connect($this->socket, $this->host, $this->port)) {
            throw new \Exception("tcp transport connect error: " . socket_strerror(socket_last_error($this->socket)));
        }
    }


    /**
     * tcp socket 写入
     * @param $input
     * @throws \Exception
     */
    private function write($input)
    {
        if (!socket_write($this->socket, $input, strlen($input))) {
            throw new \Exception("tcp transport write error: " . socket_strerror(socket_last_error($this->socket)));
        }
    }

    /**
     * 这里不做分包处理，只要读取到一个完整的包，就返回
     * @param $reqId
     * @return \Google\FlatBuffers\ByteBuffer
     * @throws \Exception
     */
    private function read($reqId)
    {

        //读取默认包头
        if (!($headerBuf = socket_read($this->socket, Packet::DEFAULT_HEADER_LEN, PHP_BINARY_READ))) {
            throw new \Exception("tcp transport read error: " . socket_strerror(socket_last_error($this->socket)));
        }
        $len = Packet::unpackHeader($headerBuf, $reqId);

        //空包头，异常返回
        if ($len == 0) {
            throw new \Exception('internal error, please retry');
        }

        $buf = "";
        while (true) {

            if ($len <= 0) {
                break;
            }

            if (!($tmp = socket_read($this->socket, $len, PHP_BINARY_READ))) {
                throw new \Exception("tcp transport read error: " . socket_strerror(socket_last_error($this->socket)));
            } else {
                $buf = $buf . $tmp;
                $len = $len - strlen($tmp);
            }

        }

        return $buf;

    }
}
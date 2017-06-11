<?php
/**
 * Created by PhpStorm.
 * User: crazyzi
 * Date: 16-7-6
 * Time: 上午6:58
 */

namespace data\client\Transport\Socket;


class Packet {

    // 默认包头长度
    const DEFAULT_HEADER_LEN = 26;

    const H_CTX = 'ctx';
    const H_LEN = 'len';
    const H_VER = 'ver';
    const H_SEQ_ID = 'seqId';
    const H_CMD_ID = 'cmdId';
    const H_CLIENT_IP = 'clientIp';
    const H_RESV = 'resv';

    /**
     * 自定义header域
     * @var array
     */
    static $headers = [
        self::H_CTX => ['c', 72],
        self::H_LEN => ['N'],
        self::H_VER => ['C', 0],
        self::H_SEQ_ID => ['N'],
        self::H_CMD_ID => ['n', 0],
        self::H_CLIENT_IP => ['N', 0],
        self::H_RESV => ['a10', '0000000000']
    ];

    private $body;


    /**
     * 设置序列号
     * @param $id
     */
    private function setSeqId($id) {
        self::$headers[self::H_SEQ_ID][1] = $id;
    }

    /**
     * 设置包体，flatbuffer格式
     * @param \Google\FlatBuffers\ByteBuffer $body
     */
    private function setBody(\Google\FlatBuffers\ByteBuffer $body) {
        self::$headers[self::H_LEN][1] = self::DEFAULT_HEADER_LEN + strlen($body->data()); //fix bug取真实长度
        $this->body = $body->data();
    }

    public function getSeqId() {
        return self::$headers[self::H_SEQ_ID][1];
    }

    public function getLen() {
        return self::$headers[self::H_LEN][1];
    }


    /**
     * 生成包内容
     */
    private function generate() {
        $packet = [];
        foreach (self::$headers as $header) {
            $packet[] = pack($header[0], $header[1]);
        }
        $packet[] = $this->body;

        return implode('', $packet);
    }

    /**
     * 打包，携带自定义包头
     * @param $seqId
     * @param $body
     * @return string
     */
    public static function pack($seqId, $body) {
        $packet = new Packet();
        $packet->setSeqId($seqId);
        $packet->setBody($body);

        return $packet->generate();
    }

    /**
     * UDP解包
     * @param $buf
     * @param $reqId
     * @return \Google\FlatBuffers\ByteBuffer
     * @throws \Exception
     */
    public static function unpack($buf, $reqId) {
        $len = self::unpackHeader($buf, $reqId);

        //判断包是否完整
        $body = substr($buf, self::DEFAULT_HEADER_LEN);
        if ($len != strlen($body))
            throw new \Exception('invalid packet length: ' . $len);

        return $body;
    }

    /**
     * TCP解析包头
     * @param $buf
     * @param $reqId
     * @return int 包体长度
     * @throws \Exception
     */
    public static function unpackHeader($buf, $reqId) {
        $format = [];
        foreach (self::$headers as $key => $val) {
            $format[] = $val[0] . $key . '/';
        }

        $list = unpack(implode('', $format), $buf);
        if (empty($list) || count($list) != count(self::$headers))
            throw new \Exception('invalid packet headers');

        foreach ($list as $key => $val) {
            self::$headers[$key][1] = $val;
        }

        //验证包序
        if (self::$headers[self::H_SEQ_ID][1] != $reqId)
            throw new \Exception('invalid seq id');


        return self::$headers[self::H_LEN][1] - self::DEFAULT_HEADER_LEN;
    }

    /**
     * TCP返回包体（FB对象）
     * @param $buf
     * @return \Google\FlatBuffers\ByteBuffer
     */
    public static function unpackBody($buf) {
        return \Google\FlatBuffers\ByteBuffer::wrap($buf);
    }
}

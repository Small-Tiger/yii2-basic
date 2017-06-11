<?php
/**
 * Created by PhpStorm.
 * User: zhengpenglin
 * Date: 2016/8/15
 * Time: 14:30
 */

namespace data\client\Transport\Socket;


use data\client\Transport\PropertyTrait;
use data\client\TransportInterface;

abstract class Transport implements TransportInterface
{

    use PropertyTrait;

    /**
     * 用户请求标识
     * @var null
     */
    protected $seq_num = null;

    /**
     * 请求的服务器地址
     * @var null
     */
    protected $host = "";

    /**
     * 请求的服务器端口
     * @var int
     */
    protected $port = 0;

    /**
     * socket 指针
     * @var null
     */
    protected $socket = null;

    /**
     * udp socket recv len 参数的长度 65535-20-8
     * @var int
     */
    protected $recv_length = 65507;

    /**
     * socket request recv 接收生命周期的超时时间 单位：微秒 1秒=1000000微秒
     * @var int
     */
    protected $recv_timeout = 300000000;

    /**
     * socket sendto timeout 发送的timeout超时设置 单位：微秒 1秒=1000000微秒
     * @var int
     */
    protected $send_timeout = 3000000;

    /**
     * 初始化
     * Transport constructor.
     */
    public function __construct($config = [])
    {
        $this->configure($config);
    }

    /**
     * 创建socket
     * @return mixed
     */
    abstract protected function create();

    /**
     * 随机生成seq num
     */
    protected function generateSeqNum()
    {
        $rand = mt_rand();
        $this->seq_num = $rand;
    }

}
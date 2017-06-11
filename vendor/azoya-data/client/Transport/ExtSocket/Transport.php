<?php
/**
 * Created by PhpStorm.
 * User: zhengpenglin
 * Date: 2016/8/15
 * Time: 14:20
 */

namespace data\client\Transport\ExtSocket;


use data\client\Transport\PropertyTrait;
use data\client\TransportInterface;

abstract class Transport implements TransportInterface
{

    use PropertyTrait;

    /**
     * 请求服务器的server key
     * @var array
     */
    protected $server_key = null;

    /**
     * 默认可请求的服务器信息
     * @var array
     */
    protected $server_info = array();

    /**
     * socket 指针
     * @var null
     */
    protected $socket = null;

    /**
     * socket request recv 接收生命周期的超时时间 单位：微秒 1秒=1000000微秒
     * @var int
     */
    public $timeout = 20000000;

    /**
     * 接收到的数据
     * @var
     */
    protected $recv_buf;

    /**
     * 初始化
     * Transport constructor.
     */
    public function __construct($config = [])
    {
        $this->configure($config);
    }


    /**
     * 设置服务器KEY
     * @param $key
     */
    public function setServerKey($key)
    {
        $this->server_key = $key;
        return $this;
    }

    /**
     * 获取服务器KEY
     * @param $key
     * @return array
     */
    public function getServerKey()
    {
        return $this->server_key;
    }

    /**
     * 获取可访问的服务器地址数组
     * @return array
     */
    public function getServerInfo($key = null)
    {
        if ($key !== null && $key >= 0) {
            if (isset($this->server_info[$key])) {
                return $this->server_info[$key];
            } else {
                return false;
            }
        }

        return $this->server_info;
    }

    /**
     * 设置服务器地址
     * @param $addr
     */
    public function setServerInfo($server_info = array())
    {
        if (count($server_info) > 0) {
            $this->server_info = $server_info;
            return $this;
        } else {
            return false;
        }
    }

    /**
     * 获取socket指针
     */
    public function getSocket()
    {
        return $this->socket;
    }

    /**
     * 获取socket recv 超时设置
     * @return int
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    /**
     * 设置socket recv 超时时间
     * @param $sec
     */
    public function setTimeout($usec)
    {
        $this->timeout = $usec;
        return $this;
    }

    /**
     * set recv buf
     * @return mixed
     */
    public function setRecvBuf($buf)
    {
        $this->recv_buf = $buf;
        return $this;
    }

    /**
     * get recv buf
     * @return mixed
     */
    public function getRecvBuf()
    {
        return $this->recv_buf;
    }


}
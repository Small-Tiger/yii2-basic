<?php

namespace data\client;

use yii\base\Component;

abstract class Client extends Component
{
    /**
     * 传输方式
     */
    const UDP_TRANSPORT = "udp";
    const TCP_TRANSPORT = "tcp";

    /**
     * 传输者实例化对象
     * @var
     */
    public $transport;

    /**
     * 传输类型
     * @var
     */
    public $type;

    /**
     * transport 配置
     * @var array
     */
    public $config = [];

    /**
     * 抽象创建传输方式方法
     * @param $type
     * @return mixed
     */
    abstract protected function createTransport($type);

    /**
     * 创建传输方式
     * @param $type
     * @return mixed
     */
    public function create($type)
    {
        $this->type = $type;
        $this->transport = $this->createTransport($type);
        return $this->transport;
    }

    /**
     * 获取传输对象
     */
    public function getTransport()
    {
        return $this->transport;
    }

    /**
     * 获取配置信息
     * @return array
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * 返回传输类型
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * 发送请求
     * @param \Google\FlatBuffers\ByteBuffer $buf
     * @return mixed
     */
    public function request(\Google\FlatBuffers\ByteBuffer &$buf)
    {
        if (!$this->getTransport()) {
            $this->transport = $this->create($this->getType());
            return $this->getTransport()->request($buf);
        } else {
            return $this->getTransport()->request($buf);
        }
    }

}
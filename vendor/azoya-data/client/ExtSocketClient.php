<?php

namespace data\client;

use data\client\Transport\ExtSocket\TcpTransport;
use data\client\Transport\ExtSocket\UdpTransport;

class ExtSocketClient extends Client
{

    /**
     * 根据TYPE创建传输方式
     * @param $type
     * @return TcpTransport|UdpTransport
     */
    protected function createTransport($type)
    {
        switch ($type) {
            case parent::UDP_TRANSPORT:
                $transport = new UdpTransport($this->getConfig());
                return $transport;
                break;
            case parent::TCP_TRANSPORT:
                $transport = new TcpTransport($this->getConfig());
                return $transport;
                break;
            default:
                throw new \InvalidArgumentException("$type is not a valid transport");
        }
    }

}
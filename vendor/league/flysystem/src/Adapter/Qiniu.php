<?php
/**
 * Created by PhpStorm.
 * User: zhengpenglin
 * Date: 2016/10/8
 * Time: 13:35
 */

namespace League\Flysystem\Adapter;

use League\Flysystem\Adapter\AbstractAdapter;
use League\Flysystem\Adapter\Polyfill\NotSupportingVisibilityTrait;
use League\Flysystem\Adapter\Polyfill\StreamedReadingTrait;
use League\Flysystem\Adapter\Polyfill\StreamedWritingTrait;
use League\Flysystem\AdapterInterface;
use League\Flysystem\Config;
use Qiniu\Auth;
use Qiniu\Processing\Operation;
use Qiniu\Processing\PersistentFop;
use Qiniu\Storage\BucketManager;
use Qiniu\Storage\UploadManager;

class Qiniu extends AbstractAdapter
{
    use StreamedWritingTrait, StreamedReadingTrait;

    private $accessKey = null;
    private $secretKey = null;
    private $bucket = null;
    private $domain = null;
    private $isPrivate = false;


    private $auth = null;
    private $token = null;
    private $operation = null;
    private $uploadManager = null;
    private $bucketManager = null;

    public function __construct($accessKey, $secretKey, $bucket, $domain, $isPrivate)
    {
        $this->accessKey = $accessKey;
        $this->secretKey = $secretKey;
        $this->bucket = $bucket;
        $this->domain = $domain;
        $this->isPrivate = $isPrivate;
        $this->setPathPrefix($this->domain);

        $this->bucketManager = new BucketManager($this->getAuth());
        $this->uploadManager = new UploadManager();
    }

    /**
     * 获取七牛Auth对象
     * @return Auth
     */
    private function getAuth()
    {
        if ($this->auth == null) {
            $this->auth = new Auth($this->accessKey, $this->secretKey);
        }
        return $this->auth;
    }

    /**
     * 获取上传TOKEN
     * @param string $path 文件名称
     * @return string
     */
    private function getToken($path = null)
    {
        if ($this->token == null) {
            $this->token = $this->setToken($path);
        }
        return $this->token;
    }

    /**
     * 获取BucketManger 对象
     * @return BucketManager
     */
    private function getBucketManager()
    {
        if ($this->bucketManager == null) {
            $this->bucketManager = new BucketManager($this->getAuth());
        }
        return $this->bucketManager;
    }

    /**
     * @return UploadManager
     */
    private function getUploadManager()
    {
        if ($this->uploadManager == null) {
            $this->uploadManager = new UploadManager();
        }
        return $this->uploadManager;
    }

    /**
     * @return Operation
     */
    private function getOperation()
    {
        if ($this->operation == null) {
            $this->operation = new Operation($this->domain);
        }
        return $this->operation;
    }

    private function logQiniuError(Error $error)
    {
        //http://developer.qiniu.com/docs/v6/api/reference/codes.html
        $notLogCode = [612];

        /*if (!in_array($error->code(), $notLogCode)) {
            \Log::error('Qiniu: ' . $error->code() . ' ' . $error->message());
        }*/
    }

    /**
     * 设置token
     * @param null $path
     * @param int $expires
     * @param null $policy
     * @param bool|true $strictPolicy
     * @return string
     */
    public function setToken($path = null, $expires = 3600, $policy = null, $strictPolicy = true)
    {
        $auth = $this->getAuth();
        $this->token = $auth->uploadToken($this->bucket, $path, $expires, $policy, $strictPolicy);
        return $this->token;
    }

    /**
     * 返回处理
     * @param $ret
     * @param $error
     * @param null $key
     * @return bool
     */
    private function returnDeal($ret, $error, $key = null)
    {
        if ($error !== null) {
            $this->logQiniuError($error);
            return false;
        }
        if ($key !== null && isset($ret[$key])) {
            return $ret[$key];
        }
        return $ret;
    }

    /**
     * 更新文件
     * @param string $path
     * @param string $contents
     * @param Config $config
     * @return bool
     */
    public function update($path, $contents, Config $config)
    {
        return $this->write($path, $contents, $config);
    }

    /**
     * 重命名
     * @param string $path
     * @param string $newpath
     * @return bool
     */
    public function rename($path, $newpath)
    {
        $bucketMgr = $this->getBucketManager();
        list($ret, $error) = $bucketMgr->move($this->bucket, $path, $this->bucket, $newpath);

        return $this->returnDeal($ret, $error);
    }

    /**
     * 文件写入
     * @param string $path
     * @param string $contents
     * @param Config $config
     * @param bool $isPutFile
     * @return bool
     * @throws \Exception
     */
    public function write($path, $contents, Config $config, $isPutFile = false)
    {
        $token = $this->getToken($path);
        $params = $config->get('params', null);
        $mime = $config->get('mime', 'application/octet-stream');
        $checkCrc = $config->get('checkCrc', false);

        $uploadMgr = $this->getUploadManager();
        if ($isPutFile) {
            list($ret, $error) = $uploadMgr->putFile($token, $path, $contents, $params, $mime, $checkCrc);
        } else {
            list($ret, $error) = $uploadMgr->put($token, $path, $contents, $params, $mime, $checkCrc);
        }

        return $this->returnDeal($ret, $error);
    }

    /**
     * 复制
     * @param string $path
     * @param string $newpath
     * @return bool
     */
    public function copy($path, $newpath)
    {
        $bucketMgr = $this->getBucketManager();

        list($ret, $error) = $bucketMgr->copy($this->bucket, $path, $this->bucket, $newpath);
        return $this->returnDeal($ret, $error);
    }

    /**
     * 删除文件
     * @param string $path
     */
    public function delete($path)
    {
        list(, $err) = $this->getBucketManager()->delete($this->bucket, $path);
        return $err === null;
    }

    /**
     * 删除目录
     * @param string $dirname
     * @return bool
     */
    public function deleteDir($dirname)
    {
        $files = $this->listContents($dirname);
        foreach ($files as $file) {
            $this->delete($file['path']);
        }
        return true;
    }

    /**
     * 创建目录
     * @param string $dirname
     * @param Config $config
     * @return array
     */
    public function createDir($dirname, Config $config)
    {
        return ['path' => $dirname];
    }

    /**
     * 判断是否有
     * @param string $path
     * @return bool
     */
    public function has($path)
    {
        $meta = $this->getMetadata($path);
        if ($meta) {
            return true;
        }
        return false;
    }

    /**
     * 读取文件
     * @param string $path
     * @return array
     */
    public function read($path)
    {
        $location = $this->applyPathPrefix($path);
        return array('contents' => file_get_contents($location));
    }

    /**
     * 列举文件
     * @param string $directory
     * @param bool $recursive
     * @return array
     */
    /**
     * @inheritdoc
     */
    public function listContents($directory = '', $recursive = false)
    {
        $files = [];
        foreach ($this->listDirContents($directory) as $k => $file) {
            $pathInfo = pathinfo($file['key']);
            $files[] = array_merge($pathInfo, $this->normalizeData($file), [
                'type' => isset($pathInfo['extension']) ? 'file' : 'dir',
            ]);
        }
        return $files;
    }

    /**
     * @param $directory
     * @param null $start
     * @return array
     */
    protected function listDirContents($directory, $start = null)
    {
        list($item, $start, $err) = $this->getBucketManager()->listFiles($this->bucket, $directory, $start);
        if ($err !== null) {
            return [];
        } elseif (!empty($start)) {
            $item = array_merge($item, $this->listDirContents($directory, $start));
        }
        return $item;
    }

    /**
     * @param array $file
     * @return array
     */
    protected function normalizeData(array $file)
    {
        return [
            'type' => 'file',
            'path' => $file['key'],
            'size' => $file['fsize'],
            'mimetype' => $file['mimeType'],
            'visibility' => $this->isPrivate ? AdapterInterface::VISIBILITY_PRIVATE : AdapterInterface::VISIBILITY_PUBLIC,
            'timestamp' => (int)($file['putTime'] / 10000000) //Epoch 时间戳
        ];
    }

    /**
     * 获取资源Metadata信息
     * @param string $path
     * @return bool
     */
    public function getMetadata($path)
    {
        $bucketMgr = $this->getBucketManager();

        list($ret, $error) = $bucketMgr->stat($this->bucket, $path);
        return $this->returnDeal($ret, $error);
    }

    /**
     * 获取文件大小
     * @param string $path
     * @return array|bool
     */
    public function getSize($path)
    {
        $stat = $this->getMetadata($path);
        if ($stat) {
            return array('size' => $stat['fsize']);
        }
        return false;
    }

    /**
     * 获取文件的MIME类型
     * @param string $path
     * @return array|bool
     */
    public function getMimetype($path)
    {
        $stat = $this->getMetadata($path);
        if ($stat) {
            return array('mimetype' => $stat['mimeType']);
        }
        return false;
    }

    /**
     * 获取上传时间
     * @param string $path
     * @return array|bool
     */
    public function getTimestamp($path)
    {
        $stat = $this->getMetadata($path);
        if ($stat) {
            return array('timestamp' => $stat['putTime']);
        }
        return false;
    }

    /**
     * 获取私有下载链接
     * @param $path 文件名称
     * @param int $expires 有效时间
     * @return string
     */
    public function privateDownloadUrl($path, $expires = 3600)
    {
        $auth = $this->getAuth();
        $location = $this->applyPathPrefix($path);
        $authUrl = $auth->privateDownloadUrl($location, $expires);

        return $authUrl;
    }

    /**
     * 对资源文件进行异步持久化处理
     * @param string $path 待处理的源文件
     * @param string|array $fops 待处理的pfop操作，多个pfop操作以array的形式传入。
     * @return bool
     */
    public function persistentFop($path = null, $fops = null)
    {
        $auth = $this->getAuth();

        $pfop = new PersistentFop($auth, $this->bucket);
        list($id, $error) = $pfop->execute($path, $fops);
        return $this->returnDeal($id, $error);
    }

    /**
     * 获取持久化文件状态
     * @param $id
     * @return array
     */
    public function persistentStatus($id)
    {
        return PersistentFop::status($id);
    }

    /**
     * 从指定URL抓取资源，并将该资源存储到指定空间中
     * @param $url
     * @param $key
     * @return bool
     */
    public function fetch($url, $key)
    {
        $bucketMgr = $this->getBucketManager();
        list($ret, $error) = $bucketMgr->fetch($url, $this->bucket, $key);
        return $this->returnDeal($ret, $error, 'key');
    }

    /**
     * 获取下载链接
     * @param null $path
     * @return string
     */
    public function downloadUrl($path = null)
    {
        $location = $this->applyPathPrefix($path);
        return $location;
    }

    /**
     * 获取图片信息
     * @param null $path
     * @return bool
     */
    public function imageInfo($path = null)
    {
        $operation = $this->getOperation();
        list($ret, $error) = $operation->execute($path, 'imageInfo');
        return $this->returnDeal($ret, $error);
    }

    /**
     * 获取图片Exif信息
     * @param null $path
     * @return bool
     */
    public function imageExif($path = null)
    {
        $operate = $this->getOperation();
        list($ret, $error) = $operate->execute($path, 'exif');
        return $this->returnDeal($ret, $error);
    }

    /**
     * 获取图片预览地址
     * @param null $path
     * @param null $ops
     * @return string
     */
    public function imagePreviewUrl($path = null, $ops = null)
    {
        $operate = $this->getOperation();
        $url = $operate->buildUrl($path, $ops);
        return $url;
    }

    /**
     * @inheritdoc
     */
    public function getVisibility($path)
    {
        return [
            'visibility' => $this->isPrivate ? AdapterInterface::VISIBILITY_PRIVATE : AdapterInterface::VISIBILITY_PUBLIC
        ];
    }

    /**
     * @inheritdoc
     */
    public function setVisibility($path, $visibility)
    {
        if ($this->isPrivate) {
            return false;
        }
        return compact('visibility');
    }
}
<?php
namespace XXGail\ContentSecurity;

class SDKController{

    protected $accessKeyId = null;
    protected $accessKeySecret = null;
    protected $version = '2019-12-30';
    protected $regionId = 'cn-shanghai';
    protected $scheme = 'https';

    public function __construct()
    {
        $this->accessKeyId = config('content_security.accessKeyId');
        $this->accessKeySecret = config('content_security.accessKeySecret');
    }

    public function sdk(){

    }
}


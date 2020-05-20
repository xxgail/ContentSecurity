<?php

namespace XXGail\ContentSecurity;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Illuminate\Routing\Router;

class ServiceProvider extends BaseServiceProvider
{

    /**
     * 在注册后进行服务的启动。
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/path/to/config/content_security.php' => config_path('content_security.php'),
        ]);
    }

    /**
     * 在容器中注册绑定。
     *
     * @return void
     */
    public function register()
    {

    }
}
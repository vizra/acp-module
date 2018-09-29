<?php namespace Vizra\Modules\Acp;

use SuperV\Platform\Domains\Droplet\DropletServiceProvider;
use Vizra\Modules\Acp\Ports\ApiPort;
use Hub;

class AcpModuleServiceProvider extends DropletServiceProvider
{
    public function register()
    {
        parent::register();

        Hub::register(ApiPort::class);
    }

    public function boot()
    {
        parent::boot();
    }
}
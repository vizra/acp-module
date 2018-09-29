<?php namespace Vizra\Modules\Acp;

use Barryvdh\Cors\HandleCors;
use SuperV\Platform\Domains\Droplet\DropletServiceProvider;
use SuperV\Platform\Domains\Port\Port;

class AcpModuleServiceProvider extends DropletServiceProvider
{

    public function register()
    {
        parent::register();

        \Hub::register((new Port)->hydrate([
            'slug'     => 'api',
            'guard'    => 'superv-api',
            'hostname' => 'api.svtestx.dev.io',
            'middlewares' => [
                HandleCors::class
            ],
            'navigationSlug' => 'acp'
        ]));

    }

    public function boot()
    {
        parent::boot();
    }
}
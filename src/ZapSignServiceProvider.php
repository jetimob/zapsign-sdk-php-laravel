<?php

declare(strict_types=1);

namespace Jetimob\ZapSign;

use Illuminate\Container\Container;
use Illuminate\Support\ServiceProvider;
use Jetimob\ZapSign\Console\InstallZapSignPackage;

class ZapSignServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $src = realpath($raw = __DIR__ . '/../config/zapsign.php') ?: $raw;

        if ($this->app->runningInConsole()) {
            $this->publishes([
                $src => config_path('zapsign.php')
            ], 'config');

            $this->commands([
                InstallZapSignPackage::class,
            ]);
        }

        $this->mergeConfigFrom($src, 'zapsign');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('jetimob.zapsign', function (Container $app) {
            return new ZapSign($app['config']['zapsign'] ?? []);
        });

        $this->app->alias('jetimob.zapsign', ZapSign::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return string[]
     */
    public function provides()
    {
        return [
            'jetimob.zapsign',
        ];
    }
}

<?php

namespace Jeffreyvr\PaverForLaravel;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Jeffreyvr\Paver\Paver;
use Jeffreyvr\PaverForLaravel\Components\PaverComponent;

class PaverServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->publishes([
            __DIR__.'/../config/paver.php' => config_path('paver.php'),
        ], 'paver-config');

        $this->mergeConfigFrom(
            __DIR__.'/../config/paver.php',
            'paver'
        );

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'paver');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/paver'),
        ]);

        $this->bootPaver();
    }

    public function boot()
    {
        Blade::component('paver', PaverComponent::class);
    }

    public function bootPaver()
    {
        $this->app->singleton(Paver::class, function ($app) {
            $paver = Paver::instance();

            $paver->alpine(config('paver.alpine'));
            $paver->debug(config('paver.debug'));

            foreach (config('paver.blocks', []) as $block) {
                $paver->registerBlock($block);
            }

            if ($headTemplate = config('paver.frame.head_template')) {
                $paver->frame->headHtml = view($headTemplate);
            }

            if ($footerTemplate = config('paver.frame.footer_template')) {
                $paver->frame->footerHtml = view($footerTemplate);
            }

            if ($endpoints = config('paver.endpoints')) {
                // Deprecated: only present in a published config that predates
                // the single endpoint. Checked first so mergeConfigFrom filling
                // in the new 'endpoint' default does not override it.
                $paver->api->setEndpoints($endpoints);
            } else {
                $paver->api->setEndpoint(config('paver.endpoint', '/paver'));
            }

            if (config('paver.csrf')) {
                $paver->api->setHeader('X-CSRF-TOKEN', csrf_token());
            }

            return $paver;
        });
    }
}

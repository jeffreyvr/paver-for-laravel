<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Registered Blocks
    |--------------------------------------------------------------------------
    |
    | Here you may specify the blocks that should be available within your
    | instance of Paver. Simply provide the class name of each block.
    |
    */

    'blocks' => [
        // Jeffreyvr\Paver\Blocks\Example::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Alpine.js
    |--------------------------------------------------------------------------
    |
    | This option controls whether Paver should automatically include Alpine.js.
    | You can disable this if you wish to manage the loading manually.
    |
    */

    'alpine' => true,

    /*
    |--------------------------------------------------------------------------
    | Frame Templates
    |--------------------------------------------------------------------------
    |
    | Define the templates for the frame. These templates will be used for
    | the head and footer sections of the editor frame.
    |
    */

    'frame' => [
        'head_template' => null,
        'footer_template' => null,
    ],

    /*
    |--------------------------------------------------------------------------
    | API Endpoint
    |--------------------------------------------------------------------------
    |
    | The single endpoint Paver talks to. Point a POST route at it that hands
    | the request to Jeffreyvr\Paver\Endpoints\Handler::run(), for example:
    |
    |     Route::middleware('paver')->post('/paver', fn () => Handler::run());
    |
    */

    'endpoint' => '/paver',

    /*
    | Deprecated: a separate endpoint per action. Still honoured when the
    | 'endpoint' above is null, but Paver's per-action setup is deprecated and
    | will be removed. Prefer the single endpoint.
    |
    | 'endpoints' => [
    |     'options' => '/options',
    |     'render' => '/render',
    |     'fetch' => '/fetch',
    |     'resolve' => '/resolve',
    | ],
    */

    /*
    |--------------------------------------------------------------------------
    | CSRF Protection
    |--------------------------------------------------------------------------
    |
    | If your application uses CSRF protection, you may enable it here to
    | include the CSRF token in requests made to Paver endpoints.
    |
    */

    'csrf' => true,

    /*
    |--------------------------------------------------------------------------
    | Debug Mode
    |--------------------------------------------------------------------------
    |
    | Enabling this option will allow Paver to log additional information to
    | the console, which can assist in debugging during development.
    |
    */

    'debug' => false,

];

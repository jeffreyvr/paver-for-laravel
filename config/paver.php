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
    | API Endpoints
    |--------------------------------------------------------------------------
    |
    | Here you may specify the endpoints used by Paver. You can customize the
    | URIs according to your application needs.
    |
    */

    'endpoints' => [
        'options' => '/options',
        'render' => '/render',
        'fetch' => '/fetch',
        'resolve' => '/resolve',
    ],

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

<?php

return [
    /**
     * Register blocks.
     */
    'blocks' => [
        // Jeffreyvr\Paver\Blocks\Example::class
    ],

    /**
     * Flag to either have Paver load Alpine.js, or otherwise, load it yourself.
     */
    'alpine' => true,

    /**
     * Frame.
     */
    'frame' => [
        'head_template' => null,
        'footer_template' => null,
    ],

    /**
     * Endpoints.
     */
    'endpoints' => [
        'options' => '/options',
        'render' => '/render',
        'fetch' => '/fetch',
        'resolve' => '/resolve',
    ],

    /**
     * Add CSRF token to paver endpoint requests.
     */
    'csrf' => true,

    /**
    * Enabling debug mode will let Paver log info to the console.
    */
   'debug' => false,
];

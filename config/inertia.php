<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Server Side Rendering
    |--------------------------------------------------------------------------
    |
    | These options configures if and how Inertia uses Server Side Rendering
    | to pre-render the initial visits made to your application's pages.
    |
    | You can specify a custom SSR bundle path, or omit it to let Inertia
    | try and automatically detect it for you.
    |
    | Do note that enabling these options will NOT automatically make SSR work,
    | as a separate rendering service needs to be available. To learn more,
    | please visit https://inertiajs.com/server-side-rendering
    |
    */

    'ssr' => [

        'sidecar' => [
            // The Sidecar function that handles the SSR for Vite builds.
            'handler' => \Hammerstone\Sidecar\Inertia\ViteSSR::class,

            // Log some stats on how long each Lambda request takes.
            'timings' => false,

            // Throw exceptions, should they occur.
            'debug' => env('APP_DEBUG', false),

            // Compile Ziggy routes with the Lambda function.
            'ziggy' => false
        ],


        'enabled' => true,

        'url' => 'http://127.0.0.1:13714',

        // 'bundle' => base_path('bootstrap/ssr/ssr.mjs'),

    ],

    /*
    |--------------------------------------------------------------------------
    | Testing
    |--------------------------------------------------------------------------
    |
    | The values described here are used to locate Inertia components on the
    | filesystem. For instance, when using `assertInertia`, the assertion
    | attempts to locate the component as a file relative to any of the
    | paths AND with any of the extensions specified here.
    |
    */

    'testing' => [

        'ensure_pages_exist' => true,

        'page_paths' => [

            resource_path('js/Pages'),

        ],

        'page_extensions' => [

            'js',
            'jsx',
            'svelte',
            'ts',
            'tsx',
            'vue',

        ],

    ],

];

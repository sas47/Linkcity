<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Assets Manifest
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default asset manifest that should be used.
    | The "theme" manifest is recommended as the default as it cedes ultimate
    | authority of your application's assets to the theme.
    |
    */

    'theme' => 'vite',

    /*
    |--------------------------------------------------------------------------
    | Assets Manifests
    |--------------------------------------------------------------------------
    |
    | Manifests contain lists of assets that are referenced by static keys that
    | point to dynamic locations, such as a cache-busted location.
    |
    */

    'manifests' => [
        'theme' => [
            'path' => get_theme_file_path('public'),
            'url' => get_theme_file_uri('public'),
            'bundles' => get_theme_file_path('public/dist/manifest.json')
        ]
    ]
];

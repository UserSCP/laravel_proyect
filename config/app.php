<?php
return [

'name' => env('APP_NAME', 'Laravel'),

'env' => env('APP_ENV', 'production'),

'debug' => (bool) env('APP_DEBUG', false),

'url' => env('APP_URL', 'http://localhost'),

'timezone' => env('APP_TIMEZONE', 'UTC'),

'locale' => env('APP_LOCALE'),

'fallback_locale' => env('APP_FALLBACK_LOCALE'),

'faker_locale' => env('APP_FAKER_LOCALE'),

'cipher' => 'AES-256-CBC',

'key' => env('APP_KEY'),

'previous_keys' => array_filter(explode(',', env('APP_PREVIOUS_KEYS', ''))),

'maintenance' => [
    'driver' => env('APP_MAINTENANCE_DRIVER', 'file'),
    'store' => env('APP_MAINTENANCE_STORE', 'database'),
],

];

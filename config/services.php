<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'facebook' => [
        // 'client_id' => env('GITHUB_CLIENT_ID'),
        'client_id' =>'654488539790480',
        // 'client_secret' => env('GITHUB_CLIENT_SECRET'),
        'client_secret' => '985a9dc44688e57780a3b6f952a91f69',
        // 'redirect' => 'http://example.com/callback-url',
        'redirect' => 'http://localhost:8000/login/facebook/callbackpobitro',
    ],
    'google' => [
        // 'client_id' => env('GITHUB_CLIENT_ID'),
        'client_id' =>'60966894343-o4gi7t9nqip7hvbq6q3416hrla18t8ec.apps.googleusercontent.com',
        // 'client_secret' => env('GITHUB_CLIENT_SECRET'),
        'client_secret' => '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',
        // 'redirect' => 'http://example.com/callback-url',
        'redirect' => 'http://localhost:8000/login/google/callback',
    ],

];

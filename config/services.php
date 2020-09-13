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
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'github' => [
        'client_id' => env('GITHUB_ID'),
        'client_secret' => env('GITHUB_SECRET'),
        'redirect' => env('GITHUB_URL'),
    ],
    'twitter' => [
        'client_id' => 'TWITTER_CLIENT_ID',
        'client_secret' => 'TWITTER_CLIENT_SECRET',
        'redirect' => 'TWITTER_CALLBACK_URL',
    ],
    'google' => [
        'client_id' => '54933990167-b3sqh8el9umggnej1bjpr1685lp7avt8.apps.googleusercontent.com',
        'client_secret' => 'XqlyzRMCalcWiE8VTwKLP6Rw',
        'redirect' => 'http://127.0.0.1:8000/google/callback',
    ],
    'linkedin' => [
        'client_id' => env('LINKEDIN_CLIENT_ID'),         // Your LinkedIn Client ID
        'client_secret' => env('LINKEDIN_CLIENT_SECRET'), // Your LinkedIn Client Secret
        'redirect' => env('LINKEDIN_CALLBACK_URL'),       // Your LinkedIn Callback URL
    ],
    'facebook' => [
        'client_id' => env('FACEBOOK_CLIENT_ID'),
        'client_secret' => env('FACEBOOK_CLIENT_SECRET'),
        'redirect' => env('FACEBOOK_CALLBACK_URL'),
    ],

];

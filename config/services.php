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
    'google' => [
        'client_id' => '110143147525-hbq44c2mpc16gipai5gkmrr85jtedm14.apps.googleusercontent.com',
        'client_secret' => '1ovPMUn-oWN4btugrjY27zKY',
        'redirect' => 'http://127.0.0.1:8000/callback',
    ],
    'github' => [
        'client_id' => 'Iv1.d4b4006bff5975ad',
        'client_secret' => '2b68ccf1fcdc9e872b54539e385589f64e8cc46c',
        'redirect' => 'http://127.0.0.1:8000/callback/github',
    ],

];

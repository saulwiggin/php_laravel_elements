<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
      'client_id' => env('168859163742530'),
      'client_secret' => env('5fd755a63ffc4bd0391c9022773f8c3c'),
      'redirect' => '/home',
    ],

    'twitter' => [
      'client_id' => env('GITHUB_CLIENT_ID'),
      'client_secret' => env('GITHUB_CLIENT_SECRET'),
      'redirect' => 'http://your-callback-url',
    ],

    'google' => [
      'client_id' => env('111105486367-pvoscidc8fkv5pt6q7862q9of232o3tf.apps.googleusercontent.com'),
      'client_secret' => env('RTUjNqak-cP8EG-21m6-VuaE'),
      'redirect' => '/home',
    ],

    'linkedin' => [
      'client_id' => env('GITHUB_CLIENT_ID'),
      'client_secret' => env('GITHUB_CLIENT_SECRET'),
      'redirect' => 'http://your-callback-url',
    ]

];

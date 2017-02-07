<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => '',
        'secret' => '',
    ],

    'mandrill' => [
        'secret' => '',
    ],

    'ses' => [
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => 'App\User',
        'secret' => '',
    ],

    'facebook' => [
        'client_id' => '487537054755778',
        'client_secret' => '37307d4157f7d97e3e6e4f6585beef33',
        'redirect' => '',
    ],

    'google' => [
        'client_id' =>  '1075679225261-cmmm6e8rnbqfg2hblm8gn2ks1pcttk9l.apps.googleusercontent.com',
        'client_secret' => '3mahaQXpLwbp_AhHzSkwKhd0',
        'redirect' => '',
    ],

    'twitter' => [
        'client_id' => 'ZmqOQGvOZqRyfBOVHjlnoQLcM',
        'client_secret' => 'fnyapOLBYMgUgRljBQeJ4ZroTVdU06vVC1cGCgjvqPfJCVqCKN',
        'redirect' => '',
    ]


];

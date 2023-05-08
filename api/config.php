<?php
require_once 'vendor/autoload.php';
require_once 'class-db.php';
  
define('GOOGLE_CLIENT_ID', '520472442725-5jqdefffcrogqd4eehe9r0unvbu7ce1g.apps.googleusercontent.com');

define('GOOGLE_CLIENT_SECRET', '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');
  
$config = [
    'callback' => 'https://bitswits.co/callback.php',
    'keys'     => [
                    'id' => GOOGLE_CLIENT_ID,
                    'secret' => GOOGLE_CLIENT_SECRET
                ],
    'scope'    => 'https://www.googleapis.com/auth/spreadsheets',
    'authorize_url_parameters' => [
            'approval_prompt' => 'force', // to pass only when you need to acquire a new refresh token.
            'access_type' => 'offline'
    ]
];
  
$adapter = new Hybridauth\Provider\Google( $config );
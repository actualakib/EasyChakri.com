<?php

// Gmail OAuth 2.0 Configuration

return [
    'client_id' => 'YOUR_CLIENT_ID',
    'client_secret' => 'YOUR_CLIENT_SECRET',
    'redirect_uri' => 'YOUR_REDIRECT_URI',
    'scopes' => [
        'https://www.googleapis.com/auth/gmail.send',
        'https://www.googleapis.com/auth/gmail.readonly',
    ],
];

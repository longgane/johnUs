<?php

return [
    'allowed_subject' => [
        'Withdrawal',
        'Guild'
    ],
    'subject' => [
        /**
         * Withdrawal
         */
        'Withdrawal' => [
            '*'      => ['isAuthenticated'],
            'delete' => ['isUser'],
            'update' => ['isUser'],
            'create' => ['isUser'],
            'list'   => ['isAuthenticated'],
            'get'    => ['isAuthenticated'],
        ]
    ],

];
 
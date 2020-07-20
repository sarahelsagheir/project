<?php

return [
    'role_structure' => [
        'admin' => [
            'users' => 'c,r,u,d',
            'acl' => 'c,r,u,d',
            'profile' => 'r,u',
            'books' => 'c,r,u,d'

        ],
       
        'user' => [
            'profile' => 'r,u',
            'books' => 'c,r,u,d'
        ],

        'book_store' => [
            'profile' => 'r,u',
            'books' => 'c,r,u,d'
        ],
    ],
    'permission_structure' => [
        'cru_user' => [
            'profile' => 'c,r,u'
        ],
    ],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];

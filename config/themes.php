<?php

return [
    'default' => 'default',

    'themes' => [
        'default' => [
            'views_path' => 'resources/themes/default/views',
            'assets_path' => 'public/themes/default/assets',
            'name' => 'Default'
        ],

         'dipalha' => [
             'views_path' => 'resources/themes/velocity/views',
             'assets_path' => 'public/themes/velocity/assets',
             'name' => 'DiPalha',
             'parent' => 'default'
         ]

//        'velocity' => [
//            'views_path' => 'resources/themes/velocity/views',
//            'assets_path' => 'public/themes/velocity/assets',
//            'name' => 'Velocity',
//            'parent' => 'default'
//        ],
    ]
];
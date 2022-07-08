<?php

return [
    'menu1' => [
        'title' => 'Gösterge Paneli',
        'icon' => 'tachometer-alt',
        'href' => 'dashboard',
        'sub_menu' => false,
    ],
    'menu2' => [
        'title' => 'Kategori',
        'icon' => 'tags',
        'href' => '#',
        'sub_menu' => [
            'menu1' => [
                'title' => 'Listeleme',
                'href' => 'category.index'
            ],
            'menu2' => [
                'title' => 'Ekleme',
                'href' => 'category.create'
            ]
        ]
    ],
    'menu3' => [
        'title' => 'Makale',
        'icon' => 'paperclip',
        'href' => '#',
        'sub_menu' => [
            'menu1' => [
                'title' => 'Listeleme',
                'href' => 'article.index'
            ],
            'menu2' => [
                'title' => 'Ekleme',
                'href' => 'article.create'
            ]
        ]
    ]
];

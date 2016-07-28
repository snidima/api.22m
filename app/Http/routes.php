<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

$data = [
    [
        'id' => 0,
        'name' => 'Футболка мужская',
        'sex' => 1,
        'color' => 1,
        'type' => 1,
        'description' => 'Жеская акула на желтом фоне',
        'rate' => 2,
        'views' => 10,
        'price' => 1500,
        'tags' => [
            'акула',
            'море',
            'отдых',
            'агрессия',
            'зубы',
        ],
        'images' => [
            'small' => 'http://api.22m/images/t-shirt.jpg',
            'big' => 'http://api.22m/images/t-shirt-2.jpg'
        ]
    ],

    [
        'id' => 0,
        'name' => 'Футболка женская',
        'sex' => 2,
        'color' => 1,
        'type' => 1,
        'description' => 'Непонятные кассеты и еще что-то',
        'rate' => 4,
        'views' => 53,
        'price' => 750,
        'tags' => [
            'музыка',
            'кассета',
            'секс',
            'цветная'
        ],
        'images' => [
            'small' => 'http://api.22m/images/t-shirt-7.jpg',
            'big' => 'http://api.22m/images/t-shirt-8.jpg'
        ]
    ],
    [
        'id' => 0,
        'name' => 'Футболка мужская',
        'sex' => 1,
        'color' => 1,
        'type' => 1,
        'description' => 'Непонятные кассеты и еще что-то',
        'rate' => 4,
        'views' => 53,
        'price' => 750,
        'tags' => [
            'музыка',
            'кассета',
            'секс',
            'цветная'
        ],
        'images' => [
            'small' => 'http://api.22m/images/t-shirt-5.jpg',
            'big' => 'http://api.22m/images/t-shirt-6.jpg'
        ]
    ],
    [
        'id' => 0,
        'name' => 'Футболка мужская',
        'sex' => 1,
        'color' => 1,
        'type' => 1,
        'description' => 'Непонятные кассеты и еще что-то',
        'rate' => 4,
        'views' => 53,
        'price' => 750,
        'tags' => [
            'музыка',
            'кассета',
            'секс',
            'цветная'
        ],
        'images' => [
            'small' => 'http://api.22m/images/t-shirt-3.jpg',
            'big' => 'http://api.22m/images/t-shirt-4.jpg'
        ]
    ],
    [
        'id' => 0,
        'name' => 'Футболка мужская',
        'sex' => 1,
        'color' => 1,
        'type' => 1,
        'description' => 'Жеская акула на желтом фоне',
        'rate' => 2,
        'views' => 10,
        'price' => 1500,
        'tags' => [
            'акула',
            'море',
            'отдых',
            'агрессия',
            'зубы',
        ],
        'images' => [
            'small' => 'http://api.22m/images/t-shirt.jpg',
            'big' => 'http://api.22m/images/t-shirt-2.jpg'
        ]
    ],

    [
        'id' => 0,
        'name' => 'Футболка женская',
        'sex' => 2,
        'color' => 1,
        'type' => 1,
        'description' => 'Непонятные кассеты и еще что-то',
        'rate' => 4,
        'views' => 53,
        'price' => 750,
        'tags' => [
            'музыка',
            'кассета',
            'секс',
            'цветная'
        ],
        'images' => [
            'small' => 'http://api.22m/images/t-shirt-7.jpg',
            'big' => 'http://api.22m/images/t-shirt-8.jpg'
        ]
    ],
    [
        'id' => 0,
        'name' => 'Футболка мужская',
        'sex' => 1,
        'color' => 1,
        'type' => 1,
        'description' => 'Непонятные кассеты и еще что-то',
        'rate' => 4,
        'views' => 53,
        'price' => 750,
        'tags' => [
            'музыка',
            'кассета',
            'секс',
            'цветная'
        ],
        'images' => [
            'small' => 'http://api.22m/images/t-shirt-5.jpg',
            'big' => 'http://api.22m/images/t-shirt-6.jpg'
        ]
    ],
    [
        'id' => 0,
        'name' => 'Футболка мужская',
        'sex' => 1,
        'color' => 1,
        'type' => 1,
        'description' => 'Непонятные кассеты и еще что-то',
        'rate' => 4,
        'views' => 53,
        'price' => 750,
        'tags' => [
            'музыка',
            'кассета',
            'секс',
            'цветная'
        ],
        'images' => [
            'small' => 'http://api.22m/images/t-shirt-3.jpg',
            'big' => 'http://api.22m/images/t-shirt-4.jpg'
        ]
    ],
];

shuffle($data);

Route::get('products', function () use($data){
    return response()->json($data)->header('Access-Control-Allow-Origin', '*');
});
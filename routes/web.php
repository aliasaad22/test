<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about', [
        'informatie' => [
            [
                'name' => 'Ali',
                'mail' => 'ali@example.com',
                'age' => 30
            ],
            [
                'name' => 'Mohamed',
                'mail' => 'mohamed@example.com',
                'age' => 25
            ],
            [
                'name' => 'Nicoel',
                'mail' => 'nicoel@example.com',
                'age' => 18
            ]
        ]
    ]);
});
Route::get('/products', function () {
    return view('products', [
        'products' => [
            [
                'name' => 'Laptop',
                'price' => 899,
                'description' => 'Krachtige laptop voor werk en studie.'
            ],
            [
                'name' => 'Headphones',
                'price' => 49,
                'description' => 'Comfortabele koptelefoon met diepe bass.'
            ],
            [
                'name' => 'Smartwatch',
                'price' => 120,
                'description' => 'Slim horloge met hartslagmeter.'
            ]
        ]
    ]);
});


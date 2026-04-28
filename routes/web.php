<?php

use App\Http\Controllers\PageController;

<<<<<<< HEAD
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

=======
Route::get('/', [PageController::class, 'home']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/about', [PageController::class, 'about']);
>>>>>>> 3f94b3819423fc70a796243d7cc58ba7153b96c1

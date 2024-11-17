<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['name' => 'Hitesh ai']);
});

Route::get('/product', function () {
    return view('product.index');
});


Route::get('/teas', function () {
    $teas = [
        ['name' => 'one', 'id' => 1],
        ['name' => 'two', 'id' => 2],
        ['name' => 'three', 'id' => 3],
    ];
    return view('teas.index', ['teas' => $teas]);
});

Route::get('/tea/{id}', function ($id) {
    $teas = [
        ['name' => 'one', 'id' => 1],
        ['name' => 'two', 'id' => 2],
        ['name' => 'three', 'id' => 3],
    ];
    return view('teas.teadetails', ['tea' => $teas[$id - 1]]);
});

<?php

// Basic Laravel-like routing demo

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    return [
        ['id' => 1, 'name' => 'Alice'],
        ['id' => 2, 'name' => 'Bob'],
    ];
});
Route::get('/user', [UserController::class, 'index']);

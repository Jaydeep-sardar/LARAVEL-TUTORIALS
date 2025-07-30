<?php

// Basic Laravel-like routing demo

Route::get('/', function () {
    return 'Welcome to the Laravel Demo Homepage!';
});

Route::get('/users', function () {
    return [
        ['id' => 1, 'name' => 'Alice'],
        ['id' => 2, 'name' => 'Bob'],
    ];
});

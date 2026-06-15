<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::prefix('institucional')->group(function () {
    Route::get('/missao', function () {
        return view('missao');
    });

    Route::get('/valores', function () {
        return view('valores');
    });
});

Route::get('/contato', function () {
    return view('contato');
});

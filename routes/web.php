<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->view('test')->header('Content-Type', 'text/plain');
});

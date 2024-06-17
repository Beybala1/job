<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web.frontend.index');
});

Route::get('/admin', function () {
    return view('web.backend.index');
});



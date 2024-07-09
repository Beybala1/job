<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '{locale}', 'middleware' => ['setlocale']], function() {
    Route::get('/', [HomeController::class, 'index'])->name('home');
});

// Heç bir route görsənmir
// 'prefix' => '{locale}', buna görədir
Auth::routes();

Route::get('/', function () {
    return redirect(app()->getLocale());
});

Route::get('/admin', function () {
    return view('web.backend.index');
});

<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})-> name('home');

Route::get('/about', [TestController::class, 'about'])-> name('about');

Route::get('/contacts', [TestController::class, 'contacts'] )-> name('contacts');

Route::get('/showIndex', [MainController::class, 'showIndex'] )-> name('showIndex');
Route::get('/showArray', [MainController::class, 'showArray'] )-> name('showArray');
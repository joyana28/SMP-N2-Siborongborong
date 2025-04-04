<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolSliderController;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/school-slider', [SchoolSliderController::class, 'index'])->name('school.slider');

Route::get('/', function () {
    return view('welcome');
});
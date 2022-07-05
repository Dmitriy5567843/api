<?php


use App\Http\Controllers\RegistrationController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LinesController;
use App\Http\Controllers\Api\StationController;

Route::get('/', function () {
    return view('layout.app');
})->name('main');

Route::post('/registration/as', [RegistrationController::class, 'index']
)->name('registration-form-post');

Route::get('/registration/asa', [RegistrationController::class, 'welcomUser']
)->name('registration-form-data');

Route::get('/registration', function (){
    return view('register');
})->name('registration-form-get');


//
//Route::post('/register',
//    [RegisterController::class, 'index']
//)->name('register');



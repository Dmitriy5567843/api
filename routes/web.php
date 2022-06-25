<?php


use App\Http\Controllers\RegistrationController;
use Illuminate\Http;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('layout.app');
})->name('main');

Route::post('/registration/as', [RegistrationController::class, 'index']
)->name('registration-form-post');

Route::get('/registration', function (){
    return view('register');
})->name('registration-form-get');


//
//Route::post('/register',
//    [RegisterController::class, 'index']
//)->name('register');



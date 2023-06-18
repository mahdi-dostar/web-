<?php

use App\Http\Middleware\Auth;
use App\Http\Middleware\isAdmin;
use App\Http\Middleware\NotAuth;
// use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

Route::get('/home', function(){
        return view('CarStoreHtmlFiles.home');
})->name('home');

Route::get('/Usedcar', function(){
    return view('CarStoreHtmlFiles.Usedcar');
})->name('Usedcar');

Route::get('/newcar', function(){
    return view('CarStoreHtmlFiles.newcar');
})->name('newcar');

Route::get('/contact', function(){
    return view('CarStoreHtmlFiles.contact');
})->name('contact');

Route::get('/buycar', function(){
    return view('CarStoreHtmlFiles.buycar');
})->name('buycar');

Route::get('/About', function(){
    return view('CarStoreHtmlFiles.About');
})->name('About');

Route::get('/form1', function(){
    return view('CarStoreHtmlFiles.form1');
});

Route::get('/login', function(){
    return view('CarStoreHtmlFiles.login');
});

Route::get('/form',[CarController::class,"create"]);
Route::post('/form',[CarController::class,"store"]);
Route::get('/loginform',[LoginformController::class,"create"]);
Route::post('/loginform',[LoginformController::class,"store"]);
Route::get('/signup',[SignupController::class,"create"]);
Route::post('/signup',[SignupController::class,"store"]);



<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PublicController@showHome')
        ->name('Home');

Route::get('/login', 'PublicController@showLogin')
        ->name('LoginPage');

Route::get('/register', 'PublicController@showRegister')
        ->name('RegisterPage');

Route::get('/catalogo', 'PublicController@showCatalogo')
        ->name('Catalogo');

Route::get('/faq', 'PublicController@showFaq')
        ->name('FaqPage');
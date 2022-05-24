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


Auth::routes();

Route::get('/catalogo', 'PublicController@showCatalogo')
        ->name('Catalogo');

Route::get('/faq', 'PublicController@showFaq')
        ->name('FaqPage');

Route::get('/regolamento', 'PublicController@showRegolamento')
        ->name('RegolamentoPage');

Route::get('/user', 'UserController@index')
        ->name('user')->middleware('can:isUser');



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


Auth::routes();

Route::get('/', 'PublicController@showHome')
        ->name('Home');

Route::get('/catalogo', 'PublicController@showCatalogo')
        ->name('Catalogo');

Route::get('/faq', 'PublicController@showFaq')
        ->name('FaqPage');

Route::get('/regolamento', 'PublicController@showRegolamento')
        ->name('RegolamentoPage');



Route::get('/messaggi', 'UserController@showMsg')
        ->name('msgPage')
        ->middleware('auth');

Route::get('/user', 'UserController@index')
        ->name('user')
        ->middleware('can:isLocatario');

Route::get('/profilo', 'UserController@showProfile')
        ->name('profilo')->middleware("can:isLocatario");

Route::get('/profilo/modifica', 'UserController@showModificaProfilo')
        ->name('mostra_modifica_profilo')->middleware("can:isLocatario");


Route::post('/profilo/modifica', 'UserController@modificaProfilo')
        ->name('modifica_profilo')->middleware("can:isLocatario");











Route::get('/gestionefaq', 'UserController@gestioneFaq')
        ->name('gestioneFaq')
        ->middleware('can:isAdmin');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/stats', 'UserController@showStats')
        ->name('statsPage')
        ->middleware('can:isAdmin');

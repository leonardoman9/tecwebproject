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
Route::post('/catalogo', 'SearchController@search')
        ->name('RicercaCatalogo');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/catalogo/{num}', 'UserController@showAnn')
        ->name('Ann');
});


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
        ->name('profilo');

Route::get('/profilo/modifica', 'UserController@showModificaProfilo')
        ->name('mostra_modifica_profilo')->middleware("auth");


Route::post('/profilo/modifica', 'UserController@modificaProfilo')
        ->name('modifica_profilo')->middleware("auth");



Route::post('/gestionefaq', 'UserController@creaFaq')
        ->name('crea_faq')->middleware("can:isAdmin");
Route::get('/gestionefaq', 'UserController@gestioneFaq')
        
        ->name('gestioneFaq')
        ->middleware('can:isAdmin');

Route::get('/modifica_faq/{id}', 'userController@showModificaFaq')
        ->name('modifica_faq')->middleware("can:isAdmin");

//Tale rotta:
//- è di tipo post
//- è associata al metodo "modificaFaq" del controller "Controller4"
Route::post('/modifica_faq/{id}', 'userController@modificaFaq')
        ->name('modifica_faq')->middleware("can:isAdmin");

//Tale rotta:
//- è di tipo get
//- è associata al metodo "eliminaFaq" del controller "Controller4"
Route::get('/elimina_faq/{id}', 'userController@eliminaFaq')
        ->name('elimina_faq')->middleware("can:isAdmin");


Route::get('/gestionefaq/{num}', 'UserController@modificaFaq')
        ->name('modificaFaq')
        ->middleware('can:isAdmin');

Route::view('/form_faq', 'form_faq')
        ->name('form_faq')->middleware("can:isAdmin");

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/stats', 'UserController@showStats')
        ->name('statsPage')
        ->middleware('can:isAdmin');



//rote per l'inserimento di un alloggio

Route::get('/alloggio', 'PostController@inserisciAlloggio') ->name('inserisci_alloggio') ;
       
Route::post('/create_alloggio', 'PostController@createAlloggio')->name('alloggio.create');

Route::get('/alloggios', 'PostController@getalloggio');

Route::get('/alloggios/{id_alloggio}', 'PostController@getalloggioById');

Route::get('/cancelli_alloggio/{id_alloggio}', 'PostController@cancelliAlloggio');
      
//Route::get('/modifica_alloggio/{id}', 'UserController@modificaAlloggio');

//Route::post('/salva_modifica', 'UserController@salveModifica')->name('alloggio.salvato');

        
        

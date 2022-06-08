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

Route::group(['middleware' => 'auth'], function(){
    Route::get('/catalogo/{num}', 'UserController@showAnn')
        ->name('Ann');
    
    Route::get('/profilo/modifica', 'UserController@showModificaProfilo')
        ->name('mostra_modifica_profilo')->middleware("auth");
    
    Route::post('/catalogo', 'SearchController@search')
        ->name('RicercaCatalogo')
        ->middleware('auth');
    
    
    Route::post('/profilo/modifica', 'UserController@modificaProfilo')
        ->name('modifica_profilo')->middleware("auth");

});


Route::group(['middleware' => 'can:isLocatario'], function(){
   Route::get('/user', 'UserController@index')
        ->name('user')
        ->middleware('can:isLocatario');
});


Route::get('/profilo', 'UserController@showProfile')
        ->name('profilo');

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => 'can:isLocatore'], function(){
             
Route::get('/mieialloggi', 'PostController@getalloggio')
        ->name('alloggiLocatore');
        
Route::get('/mieialloggi/richieste/{annId}', 'PostController@showRichieste')
        ->name('RichiesteLocazione');

Route::get('/mieialloggi/accettata/{opzId}/{id_alloggio}/{id_opzionante}', 'PostController@accettaRichiesta')
        ->name('AccettaRichiesta');

Route::get('/mieialloggi/nuovo', 'PostController@inserisciAlloggio')
        ->name('nuovoAlloggio');

Route::post('/mieialloggi', 'PostController@createAlloggio')
        ->name('creazioneAlloggio');
Route::get('/cancelli_alloggio/{id_alloggio}', 'PostController@cancelliAlloggio')
        ->name('cancellaAlloggio');


Route::get('/modifica_alloggio/{id}', 'PostController@modificaAlloggio')
        ->name('modificaAlloggio');
Route::post('/modifica_alloggio/{id}', 'PostController@updateAlloggio')
        ->name('updateAlloggio');
Route::get('/mieialloggi/{id}', 'PostController@getalloggioById')
        ->name('visualizzaAlloggio');

    //rotte per l'inserimento di un alloggio
/*
ì

Route::get('/mieialloggi', 'PostController@getalloggio')
        ->name('alloggiLocatore')
        ->middleware('can:isLocatore');

Route::get('/alloggi/{id}', 'UserController@getalloggioById');


      
Route::get('/modifica_alloggio/{id}', 'UserController@modificaAlloggio');

//Route::post('/salva_modifica', 'UserController@salveModifica')->name('alloggio.salvato');

        */
});

Route::group(['middleware' => 'can:isAdmin'], function(){
    Route::get('/stats', 'UserController@showStats')
        ->name('statsPage')
        ->middleware('can:isAdmin');
    Route::post('/gestionefaq', 'UserController@creaFaq')
        ->name('crea_faq')->middleware("can:isAdmin");

Route::post('/stats', 'UserController@showStatsFilt')
        ->name('StatFiltrate')
        ->middleware('can:isAdmin');    

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
});

Route::get('/messaggio/{annId}', 'userController@inviaMessaggio')
        ->name('messaggio')
        ->middleware('auth');

Route::get('/messaggi', 'UserController@showMsg')
        ->name('msgPage')
        ->middleware('auth');

Route::post('/messaggi', 'userController@messinviato')
        ->name('inviaMessaggio')
        ->middleware('auth');
Route::get('messaggi/{ann}', 'userController@showDestMsgPage')
        ->name('msgConDest')
        ->middleware('auth');

Route::get('/rispondi/{id}', 'userController@rispondiMsg')
        ->name('rispondi')
        ->middleware('auth');

Route::get('/opzionamenti', 'userController@showOpzionamenti')
        ->name('opzionamenti')
        ->middleware('can:isLocatario');

Route::get('/opzionamenti/cancella/{id}', 'userController@cancellaOpzionamento')
        ->name('cancellaOpzionamento')
        ->middleware('can:isLocatario');
<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\alloggio;

class PostController extends Controller
{
    public function inserisciAlloggio(){
        return view('inserisci_alloggio');
       } 

       public function createAlloggio(Request $request){
        $post = new alloggio();
       // $post->tipologia = $request->tipologia;
        $post->data_inserimento = $request->data_inserimento;
        $post->canone = $request->canone;
        $post->dimensione = $request->dimensione;
        $post->citta = $request->citta;
        $post->indirizzo = $request->indirizzo;
        $post->data_inizio_locazione = $request->data_inizio_locazione;
        $post->data_fine_locazione = $request->data_fine_locazione;
        $post->numero_camere = $request->numero_camere;
        $post->numero_posto_letto_totale = $request->numero_posto_letto_totale;
        $post->numero_letti_nella_camera = $request->numero_letti_nella_camera; 
        $post->descrizione = $request->descrizione;
        $post->etat = $request->etat;
        //$post->added_by = $request->locatore;
        $post->save();
        return back()->with('alloggio_creato', 'Hai inserito un nuovo annuncio !');
       }   

       public function getalloggio(){
        $alloggios = alloggio::orderBy('id_alloggio', 'DESC')->get();
        return view('alloggios', compact('alloggios'));
    }
}

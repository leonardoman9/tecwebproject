<?php

namespace App\Http\Controllers;


use App\Models\User;
use Auth;
use App\Models\FAQ;
use App\Models\foto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\InserimentoRequest;
use App\Models\alloggio;
use Illuminate\Support\Facades\Storage;


class PostController extends Controller
{
    public function inserisciAlloggio(){
        return view('inserisci_alloggio');
       } 

       public function createAlloggio(InserimentoRequest $request){
        $Authenticated = Auth::user();
        $post = new alloggio();
        $post->tipologia = $request->tipologia;
        $post->data_inserimento = '2022-01-01';
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
        $post->added_by = $Authenticated->username;
        $post->save();
        
        $foto = new foto();
        $file = $request->file('image');
        if($file!=null){
             $path = $file->store('\\public\\foto');
             $foto->path = $path ;
        $foto->id_alloggio = $post->id;
        $foto->save();
        }
       $alloggios = alloggio::where('added_by', '=', Auth::user()->username)->get();
          return view('alloggios')
                ->with('alloggios', $alloggios);
       }
       
           

       public function getalloggio(){
        $alloggios = alloggio::where('added_by', '=', Auth::user()->username)->get();
        return view('alloggios', compact('alloggios'));
    }
    public function getalloggioById($id_alloggio){
        $alloggio = new alloggio();
        $foto = new foto();
         $selected = $alloggio::where('id_alloggio','=', $id_alloggio)->first();
        if(Auth::user()->username != $selected->added_by){
             return view('errors/403');
         }else{
             $selectedFoto = $foto::where('id_alloggio', '=', $id_alloggio)->first();
        return view('singollo_alloggio')
                ->with('post', $selected)
                ->with ('foto', $selectedFoto);
         }
    }
    
    public function cancelliAlloggio($id_alloggio){
        $alloggio = new alloggio();
        $selected=$alloggio::where('id_alloggio',$id_alloggio)->first();
        if($selected===null || Auth::user()->username != $selected->added_by){
             return view('errors/403');
        } else{
         $fotos= new Foto();
         alloggio::where('id_alloggio',$id_alloggio)->delete();
         $fotos::where('id_alloggio', $id_alloggio)->delete();
         return back()->with('cancelli_alloggio', 'Alloggio cancellato con successo');
        }
     }
     public function modificaAlloggio($id_alloggio){
        $selected = alloggio::where('id_alloggio',$id_alloggio)->first();
        if($selected===null || Auth::user()->username != $selected->added_by){
             return view('errors/403');
        }
        else{
            $foto = foto::where('id_alloggio', $id_alloggio)->first();
            return view('modificaAlloggio')->with('selected', $selected)->with('foto', $foto);
         
         }
     }
     public function updateAlloggio(InserimentoRequest $request, $idAlloggio){
         
        $found = alloggio::where('id_alloggio', $idAlloggio);
        $found->update([
            'tipologia' => $request->tipologia,
            'dimensione' => $request->dimensione,
            'canone' => $request->canone,
            'citta' => $request->citta,
            'indirizzo' => $request->indirizzo,
             'data_inizio_locazione' => $request->data_fine_locazione,
            'numero_camere' => $request->numero_camere,
            'numero_posto_letto_totale' => $request->numero_posto_letto_totale,
            'numero_letti_nella_camera' => $request->numero_letti_nella_camera,
            'descrizione' => $request->descrizione,
        ]);
         
        $foto = foto::where('id_alloggio', $idAlloggio);
        $file = $request->file('image');
        if($file!=null){
             $path = $file->store('\\public\\foto');
             $foto->update([path => $path]);
        }
       $alloggios = alloggio::where('added_by', '=', Auth::user()->username)->get();

          return view('alloggios')
                ->with('alloggios', $alloggios);
         
     }
}

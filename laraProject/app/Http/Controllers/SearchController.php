<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Ricerca;
use App\Models\alloggio;
use App\Models\foto;
use App\Models;
use App\Models\FAQ;
use Illuminate\Database\Eloquent\Model;



class SearchController extends Controller
{
    public function search(Ricerca $request) {
        $alloggio = new alloggio();
        $foto = new foto();
        $results = $alloggio::query()
                ->where('citta', 'LIKE',"%{$request['citta']}%")
                //->where('dimensione', '=<', $request['dimensionemax'])
                //->where('dimensione', '=', $request['dimensionemin'])
                //->where('canone', '=<', $request['prezzomax'])
                //->where('canone', '>=', $request['prezzomin'])/*
               // ->where('numero_camere', '=', $request['numerocamere'])
               // ->where('numero_posto_letto_totale', '=', $request['numeropostiletto'])
               // ->where('numero_letti_nella_camera', '=', $request['lettinellacamera'])
                ->where('tipologia', '=', $request['tipologia'])
                ->get();
        
        return view('catalogo')
                ->with('results', $results)
                ->with('allFotos', $foto->returnAllFotos());
                       
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Ricerca;
use App\Models\alloggio;
use App\Models\foto;
use App\Models;
use App\Models\FAQ;
use App\Models\servizio;
use Illuminate\Database\Eloquent\Model;



class SearchController extends Controller
{
   public function search(Ricerca $request) {
        $alloggio = new alloggio();
        $foto = new foto();
              
           $results = $alloggio::query()
                ->where('citta', 'LIKE',"%{$request['citta']}%")
                ->where('tipologia', '=', $request['tipologia'])
                ->whereDate('data_inizio_locazione', '>=', $request['data_inizio_locazione'])
                ->whereDate('data_fine_locazione', '<=', $request['data_fine_locazione'])->get();

        if ($request['dimensionemax'] !=null ){
            $results=$results->where('dimensione', '<=', $request['dimensionemax']);
        }
        if ($request['dimensionemin'] !=null ){
            $results=$results->where('dimensione', '>=', $request['dimensionemin']);
        }
         if ($request['prezzomax'] !=null ){
            $results=$results->where('canone', '<=', $request['prezzomax']);
        }  
        if ($request['prezzomin'] !=null ){
            $results=$results->where('canone', '>=', $request['prezzomin']);
        }  
        if ($request['numeropostiletto'] !=null){                             
            $results=$results->where('numero_posto_letto_totale', '=', $request['numeropostiletto']);
        } 
        if ($request['lettinellacamera'] !=null){                             
            $results=$results->where('numero_letti_nella_camera', '=', $request['lettinellacamera']);
        }
        if ($request['numerocamere'] !=null){                             
            $results=$results->where('numero_camere', '=', $request['numerocamere']);
        } 
        
        
        return view('catalogo')
                ->with('results', $results)
                ->with('request', $request)
                ->with('allFotos', $foto->returnAllFotos());
                       
    }}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Ricerca;
use App\Models\alloggio;
use App\Models\foto;
class SearchController extends Controller
{
    public function search(Ricerca $request) {
        $alloggio = new alloggio();
        $paginatedAlloggio = $alloggio->paginate(1);
        $foto = new foto();
        
        $results = $alloggio::where('canone', '>', 0)->get();
              return view('PROVA')
                ->with('alloggi', $results)
                ->with('request', $request->all())
                ->with('allFotos', $foto->returnAllFotos());
                       
    }
}

<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use App\Models\User;
use Auth;
use App\Models\FAQ;
use App\Models\foto;
use App\Models\Opzionamento;
use App\Models\servizio;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\InserimentoRequest;
use App\Models\alloggio;
use Illuminate\Support\Facades\Storage;
use DB;

class PostController extends Controller
{
      protected $_faqs;
    protected $FAQ;
    private $alloggio;
    protected $servizi;
    protected $opzionamenti;
    
     public function __construct() {
        $this->middleware('auth');
        $this->FAQ = new FAQ;
        $this->alloggio = new alloggio;
        $this->servizi = new  servizio();
        $this->opzionamenti = new Opzionamento();
                
    }
    public function inserisciAlloggio(){
        return view('inserisci_alloggio');
       } 

       public function createAlloggio(InserimentoRequest $request){
        $Authenticated = Auth::user();
        $post = new alloggio();
        $serv = new servizio();
        $post->tipologia = $request->tipologia;
        $post->data_inserimento = Carbon::now()->format('Y-m-d');
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
        
        $id = DB::table('alloggios')
                ->orderBy('timestamp', 'desc')
                ->first()
                ->id_alloggio;
        $serv->id_alloggio = $id;
           if($request['cucina']!=null){
                 $serv->cucina = $request['cucina'];
           } else {$serv->cucina = false;}
       if($request['locRicr']!=null){
                 $serv->localeRicreativo = $request['locRicr'];
       }    else {$serv->localeRicreativo = false;}
       if($request['angoloStudio']!=null){
           $serv->angoloStudio = $request['angoloStudio'];
       } else  {$serv->angoloStudio = false;}
       
        $serv->save();
        
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
             $servizi = servizio::where('id_alloggio', $id_alloggio)->first();
        return view('singollo_alloggio')
                ->with('post', $selected)
                ->with('servizi', $servizi)
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
         $path = $fotos->where('id_alloggio',$id_alloggio)
                        ->select('path')
                        ->get();
          @unlink($path);
         alloggio::where('id_alloggio',$id_alloggio)->delete();
         $fotos::where('id_alloggio', $id_alloggio)->delete();
         servizio::where('id_alloggio', $id_alloggio)->delete();
         return back()->with('cancelli_alloggio', 'Alloggio cancellato con successo');
        }
     }
     public function modificaAlloggio($id_alloggio){
        $selected = alloggio::where('id_alloggio',$id_alloggio)->first();
        $servizio = servizio::where('id_alloggio', $id_alloggio)->first();
        if($selected===null || Auth::user()->username != $selected->added_by){
             return view('errors/403');
        }
        else{
            $foto = foto::where('id_alloggio', $id_alloggio)->first();
            return view('modificaAlloggio')
                    ->with('selected', $selected)
                    ->with('servizi', $servizio)
                    ->with('foto', $foto);
         
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
             foto::where('id_alloggio', $idAlloggio)->delete();
             $path = $file->store('\\public\\foto');
             $newFoto = new Foto();
             $newFoto->id_alloggio = $idAlloggio;
             $newFoto->path = $path;
             $newFoto->save();
        }
       $alloggios = alloggio::where('added_by', '=', Auth::user()->username)->get();

          return view('alloggios')
                ->with('alloggios', $alloggios);
         
     }
     public function showRichieste($id_alloggio){
         $users = DB::table('users')->get();
         $allRichieste = DB::table('opzionamenti')
                 ->where('id_alloggio', $id_alloggio)
                 ->get();
         
          $joinedTable = DB::table('opzionamenti')
                                    ->where('opzionamenti.id_alloggio', $id_alloggio)
                                    ->join('alloggios', 'alloggios.id_alloggio', '=', 'opzionamenti.id_alloggio')
                                    ->join('users', 'users.id', '=', 'opzionamenti.id_opzionante')
                                    ->get();
          
          
         return view('richiesteAlloggio')
                ->with('richiesteAlloggio', $joinedTable);
     }
     
     public function accettaRichiesta($opzId, $id_alloggio, $id_opzionante){
      
         $result = DB::table('opzionamenti')
                 ->where('id_alloggio', $id_alloggio)
                 ->where('id_opzionante', $id_opzionante)->update([
                     'accettata' => 1,
                 ]);
         DB::table('opzionamenti')
                 ->where('id_alloggio', $id_alloggio)
                 ->where('accettata', 0)
                 ->delete();
         
         return view('richiestaAccettata')->with('result', $result)
                             ->with('id_alloggio', $id_alloggio)
                             ->with('id_opzionante', $id_opzionante);
     }
}

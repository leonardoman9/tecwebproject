<?php

namespace App\Http\Controllers;

use App\Models\User_model;
use Auth;
use App\Models\FAQ;
use App\Models\alloggio;
use App\Models\foto;
use App\Http\Requests\UpdateProfileRequest;
use App\Http\Requests\FaqCreateRequest;
use App\Http\Requests\FaqUpdateRequest;
use Illuminate\Support\Facades\Hash;


class userController extends Controller {

    
    protected $_faqs;
    protected $FAQ;
    
    public function __construct() {
        $this->middleware('auth');
        $this->FAQ = new FAQ;
    }

    public function index() {
        return view('user');
    }

    public function showProfile() {
        $id = Auth::user()->id;
        
        return view('profilo');
                        
    }

    //Restituisce la pagina dove si può modificare il profilo dell'utente
    public function showModificaProfilo() {
        $utente = Auth::user();
        return view('modifica_profilo')
                        ->with('utente', $utente);
                       
    }

    public function modificaProfilo(UpdateProfileRequest $request) {
        $utente = Auth::user();

        if ($request->nome != null) {
            $utente->update([
                'nome' => $request->nome,
            ]);
        }
        if ($request->password != null) {
            $utente->update([
                'password' => Hash::make($request->password),
            ]);
        }

        return redirect(route('profilo'));
    }
    
    public function gestioneFaq(){
        $faq = new FAQ();
        return view('adminsFaqs')
             ->with('allFaqs', $faq->returnFaqs());
    }
        
    //Metodo che crea una faq
    public function creaFaq(FaqCreateRequest $request) {
        $faq = new FAQ();
        $faq->fill($request->all());
        $faq->save();
        return view('adminsFaqs')
                ->with('allFaqs', $faq->returnFaqs());
    }
    
    public function showModificaFaq($id) {
        $faqAll= new FAQ();
        $faq = $this->FAQ->getFaqById($id)->first();
        if ($faq == null) {
            return redirect(route('faq'))->with('error', 'Non puoi modificare una faq inesistente!');
        }
        return view('modifica_faq')
                ->with('faq', $faq);
    }
   
   public function modificaFaq(FaqUpdateRequest $request, $id) {
        $faq = $this->FAQ->getFaqById($id);
        $faqAll = new FAQ();
        if ($request->domanda != null) {
            $faq->update([
                'domanda' => $request->domanda,
            ]);
        }
        if ($request->risposta != null) {
            $faq->update([
                'risposta' => $request->risposta,
            ]);
        }
        return view ('adminsFaqs')
                ->with('allFaqs', $faqAll->returnFaqs());
    }
    
    public function eliminaFaq($id) {
        $faqAll = new FAQ();
        $faq = $this->FAQ->getFaqById($id)->first();
        if ($faq == null) {
            return view ('adminsFaqs')
            ->with('allFaqs', $faqAll->returnFaqs());;
//            return redirect(route('adminsFaqs'))->with('error', 'Non puoi eliminare una faq inesistente!');
        } else {
            $faq->delete();
           return view ('adminsFaqs')
            ->with('allFaqs', $faqAll->returnFaqs());; 
//            return redirect(route('adminsFaqs'))->with('message', 'Faq eliminata con successo!');
        }
    }
   
    
    
    public function showStats(){
        return view('statsPage');
    }
    public function showMsg(){
        return view('msgPage');
    }

public function showAnn($ann) {
        $alloggio = new alloggio();
        $foto = new foto();
        $fotos = $foto->returnAllFotos();
        $toShow = $alloggio::where('id_alloggio', '=', $ann)->first();
        if($toShow === null) {
            return redirect('/');;
        }
        $poster = $alloggio::where('id_alloggio', '=', $ann);
        $selectedFoto = $foto::where('id_alloggio', '=', $toShow->id_alloggio)->first();
        if($selectedFoto === null){
            $selectedFoto=0;
        }
        return view('annuncioPage')
                ->with('ann', $toShow)
                ->with('poster', $poster)
                ->with('foto', $selectedFoto);
   }
   
   
   public function showFaqPage($faq) {
       $faqs = new FAQ();
       $selectedFaq= $faqs::where('id', '=', $faq)->get();
       return view('gestisciFaq')
       ->with('faq', $selectedFaq);
   }

   //rota per l'inserimento di un alloggio

   public function inserisciAlloggio(){
    return view('inserisci_alloggio');
   } 

   public function createAlloggio(Request $request){
    $post = new alloggio();
    $post->tipologia = $request->tipologia;
    $post->data_inserimento = $request->data_inserimento;
    $post->canone = $request->canone;
    $post->dimenzione = $request->dimenzione;
    $post->citta = $request->citta;
    $post->indirizzo = $request->indirizzo;
    $post->data_inizio_locazione = $request->data_inizio_locazione;
    $post->data_fine_locazione = $request->data_fine_locazione;
    $post->numero_camere = $request->numero_camere;
    $post->numero_posto_letto_totale = $request->numero_posto_letto_totale;
    $post->numero_letti_nella_camera = $request->numero_letti_nella_camera;
    $post->descrizione = $request->descrizione;
    $post->etat = $request->etat;
    $post->save();
    return back()->with('alloggio_creato', 'Hai inserito un nuovo annuncio !');
   }


   public function getalloggio(){
        $alloggi = alloggio::orderBy('id', 'DESC')->get();
        return view('alloggi', compact('alloggi'));
   }

        public function getalloggiotById($id){
            $post = alloggio::where('id',$id)->first();
            return view('singolo_alloggio', compact('post'));
   }

   public function cancelliAlloggio($id){
        alloggio::where('id',$id)->delete();
        return back()->with('alloggio_cancellato', 'lalloggio è stato cancellato con successo'); 

    }

    public function modificaAlloggio($id){
        $post = alloggio::find($id);
        return view('modifica_alloggio', compact('post'));
    }

    public function salveModifica(Request $request){
        $post = new alloggio();
        $post->tipologia = $request->tipologia;
        $post->data_inserimento = $request->data_inserimento;
        $post->canone = $request->canone;
        $post->dimenzione = $request->dimenzione;
        $post->citta = $request->citta;
        $post->indirizzo = $request->indirizzo;
        $post->data_inizio_locazione = $request->data_inizio_locazione;
        $post->data_fine_locazione = $request->data_fine_locazione;
        $post->numero_camere = $request->numero_camere;
        $post->numero_posto_letto_totale = $request->numero_posto_letto_totale;
        $post->numero_letti_nella_camera = $request->numero_letti_nella_camera;
        $post->descrizione = $request->descrizione;
        $post->etat = $request->etat;
        $post->save();
        return back()->with('alloggio_creato', 'Hai inserito un nuovo annuncio !');
   }
}
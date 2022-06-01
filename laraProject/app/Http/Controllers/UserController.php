<?php

namespace App\Http\Controllers;

use App\Models\User_model;
use Auth;
use App\Models\FAQ;
use App\Models\alloggio;
use App\Models\foto;
use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Support\Facades\Hash;


class userController extends Controller {

    
    protected $_faqs;
    
    public function __construct() {
        $this->middleware('auth');
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
     public function modificaFaq($faqnum){
        $faq = new FAQ();
        $selectedFaq = $faq::where('id','=',$faqnum)->first();
         if($selectedFaq === null) {
            return redirect('/');
        }
        return view('gestisciFaq')
                ->with('faq', $selectedFaq);
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
        $toShow = $alloggio::where('id_alloggio', '=', $ann)->first();
        if($toShow === null) {
            return redirect('/');
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
}
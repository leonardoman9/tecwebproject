<?php

namespace App\Http\Controllers;

use App\Models\User_model;
use Auth;
use App\Models\FAQ;
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
        return view('gestisciFaq')
             ->with('allFaqs', $faq->returnFaqs());
    }
    
    public function showStats(){
        return view('statsPage');
    }
    public function showMsg(){
        return view('msgPage');
    }
    
}

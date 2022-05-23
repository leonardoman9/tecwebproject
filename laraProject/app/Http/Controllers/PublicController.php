<?php

namespace App\Http\Controllers;

use App\Models;
use App\Models\FAQ;
use App\Models\alloggio;
use app\Models\utente;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use auth;



class PublicController extends Controller
{
    
    protected $_catalogoPubb;
    protected $_faqs;
    protected $utente;
    
    public function _construct(){ 
        $this->_faqs = new FAQ();
        log($this->faqs);
    }
   
   
    public function showHome() {
        
        $alloggio = new alloggio();
     //  $this->_catalogoPubb = new alloggio;
     //  $latestAnn = $this->_catalogoPubb->getUltimiAlloggi();
        //Prende l'id dell'utente
        $id = \Auth::id();
        //Se l'utente si è autenticato prende anche gli eventi a cui parteciperà altrimenti no
        if ($id != null) {
        return view('home')
                ->with('latestAnn', $alloggio->returnLatest());
        }
        else
        {
        return view('home')
                ->with('latestAnn', $alloggio->returnLatest());}
        
   }

   public function showCatalogo() {
       return view('catalogopubb');
   }
   
    public function showFaq() {
        
        $faq = new FAQ();
        return view('faq')
             ->with('allFaqs', $faq->returnFaqs());
    }
    public function showRegolamento() {
        return view('regolamentoduso');
    }
    
   }

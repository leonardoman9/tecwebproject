<?php

namespace App\Http\Controllers;

use App\Models;
use App\Models\FAQ;
use App\Models\alloggio;
use App\Models\foto;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;



class PublicController extends Controller
{
    
    protected $_catalogoPubb;
    protected $_faqs;
    
    public function _construct(){ 
        $this->_faqs = new FAQ();
        log($this->faqs);
    }
   
   
    public function showHome() {
          
        $alloggio = new alloggio();
        $foto = new foto();
        $id = \Auth::id();
        //Se l'utente si è autenticato prende anche gli eventi a cui parteciperà altrimenti no
        if ($id != null) {
        return view('home')
                ->with('latestAnn', $alloggio->returnLatest(5))
                ->with('allFotos', $foto->returnAllFotos());
        }
        else
        {
        return view('home')
                ->with('latestAnn', $alloggio->returnLatest(5))
                ->with('allFotos', $foto->returnAllFotos());
        
   }
        
        $alloggio = new alloggio();
        $foto = new foto();
       return view('home')
                ->with('latestAnn', $alloggio->returnLatest(5));
                
    }
       public function showCatalogo() {
        $alloggio = new alloggio();
        $alloggio = $alloggio->orderBy('data_inserimento');
        $paginatedAlloggio = $alloggio->paginate(10);
        $foto = new foto();
              return view('catalogo')
                ->with('latestAnn', $paginatedAlloggio)
                ->with('allFotos', $foto->returnAllFotos());
        
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

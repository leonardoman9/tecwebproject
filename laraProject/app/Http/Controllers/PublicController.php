<?php

namespace App\Http\Controllers;

use App\Models;
use App\Models\FAQ;
use App\Models\alloggio;
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
     //  $this->_catalogoPubb = new alloggio;
     //  $latestAnn = $this->_catalogoPubb->getUltimiAlloggi();
       return view('home')
                ->with('latestAnn', $alloggio->returnLatest());
    }
   public function showLogin() {
       return view('login');
   }
  
   public function showRegister() {
       return view('register');
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

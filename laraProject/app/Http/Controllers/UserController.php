<?php

namespace App\Http\Controllers;

use App\Models\User_model;
use Auth;
use App\Models\FAQ;

class userController extends Controller {

    
    protected $_faqs;
    
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('user');
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

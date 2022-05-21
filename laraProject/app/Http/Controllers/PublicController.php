<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function showHome() {
        return view('home');
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
        return view('faq');
    }
   
    public function showRegolamento() {
        return view('regolamentoduso');
    }
    
   }

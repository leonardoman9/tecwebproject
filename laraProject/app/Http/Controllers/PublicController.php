<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function showHome() {
        return view('welcome');
    }
   public function showLogin() {
       return view('login');
   }
  
   public function showRegister() {
       return view('register');
   }

   public function catalogo() {
       return view('catalogo');
   }
   
    public function showFaq() {
        return view('faq');
    }
   
   }

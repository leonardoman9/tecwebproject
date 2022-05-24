<?php

namespace App\Http\Controllers;

use App\Models\User_model;
use Auth;

class userController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('user');
    }

}

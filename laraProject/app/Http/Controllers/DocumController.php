<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DocumController extends Controller
{
  public function download($file_name) {
    $file_path = public_path('files/'.$file_name);
    return response()->download($file_path);
  }
}

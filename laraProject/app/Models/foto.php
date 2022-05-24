<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class foto extends Model
{
   protected $table = 'fotos';
    protected $primarykey = 'foto_id';
    public $timestamps = false;
    
    
    public function returnAllFotos(){
        return foto::all();
        }
    }


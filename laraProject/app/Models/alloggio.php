<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class alloggio extends Model
{
    protected $table = 'alloggios';
    protected $primarykey = 'id_alloggio';
    public $timestamps = false;

    public function returnLatest(){
        return  alloggio::all();
    }
    
}
     


<?php

namespace App\Models;
use App\Concerns\Filterable;
use Illuminate\Database\Eloquent\Model;
class alloggio extends Model
{
    use Filterable;
    protected $table = 'alloggios';
    protected $primarykey = 'id_alloggio';
    public $timestamps = false;

    public function returnLatest(int $n){
        return alloggio::latest('timestamp')->take($n)->get();

    }
    
    public function returnAll(){
        return alloggio::all();
    }
    
}
     


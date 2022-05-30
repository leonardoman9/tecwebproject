<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\alloggio;

class foto extends Model
{
   protected $table = 'fotos';
    protected $primarykey = 'foto_id';
    public $timestamps = false;
    
    
    public function returnAllFotos(){
        return foto::all();
        }
    
    public function findFotoByAnnId($annId){
        $foto = new foto();
        $alloggio = new alloggio();
        $annunci = $alloggio->returnAll();
        foreach($annunci as $ann){
            if($foto->id_alloggio == $annId) {
                return $ann;
            }
        }
        return $foto->first();
    }
        
        
    }


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Resources\utente;

class utente extends Model {
    //Funzione che restituisce l'utente con un determinato id
    public function getUserById(int $id) {
        $utente=utente::where('id', $id);
        return $utente;
    }

   

}

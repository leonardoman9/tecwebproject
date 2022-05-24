<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Resources\User;

class utente extends Model {
    //Funzione che restituisce l'utente con un determinato id
    public function getUserById(int $id) {
        $user=User::where('id', $id);
        return $user;
    }

   

}

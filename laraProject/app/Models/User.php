<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Resources\User;

class User extends Model {
    public function getUserById(int $id) {
        $user=User::where('id', $id);
        return $user;
    }

   

}

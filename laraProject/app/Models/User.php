<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Resources\User;

class User extends Model {
    public function getUserById(int $id) {
        $user=$this::where('id', $id);
        return $user;
    }
    public function getUserIdByUsername($username){
        $userId = $this->where('username', $username);
        return $userId;
    }

   

}

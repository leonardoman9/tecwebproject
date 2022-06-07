<?php

namespace App;

use DB;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'cognome', 'username', 'password', 'role', 'genere', 'eta',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function hasRole($role) {
        $role = (array)$role;
        return in_array($this->role, $role);
    }
    public static function getUserById(int $id) {
        $user=DB::table('users')->where('id', $id)
                ->first();
        return $user;
    }
    public static function getUserIdByUsername($username){
        $userId = DB::table('users')->where('username', $username)
                ->value('id');
        return $userId;
    }
}

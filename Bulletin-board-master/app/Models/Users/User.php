<?php

namespace App\Models\Users;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Posts;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'username','email','password','admin_role',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function post()
    {
        return $this->hasMany(Post::class);
    }
}

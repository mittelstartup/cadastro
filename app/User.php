<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'facebook_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    //Relationships

    public function comprovantematricula(){
        return $this->hasMany('App\Models\ComprovanteMatricula');
    }

    public function curriculo(){
        return $this->hasOne('App\Models\Curriculo');
    }

    public function infos(){
        return $this->hasOne('App\Models\Infos');
    }
}

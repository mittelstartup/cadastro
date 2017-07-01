<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Infos extends Model
{
    //
    protected $table = 'info_estagiario';

    protected $fillable = [
        'user_id', 'instituicao', 'curso', 'telefone'
    ];

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}

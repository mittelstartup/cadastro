<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ComprovanteMatricula extends Model
{
    protected $table = 'comprovante_matricula';

    protected $fillable = [
        'user_id', 'arquivo'
    ];
    //Relationships

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}

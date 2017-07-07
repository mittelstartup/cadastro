<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curriculo extends Model
{
    protected $table = 'curriculo';

    protected $fillable = [
        'user_id', 'arquivo'
    ];
    //Relationships

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}

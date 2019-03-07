<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'nome','descricao'
    ];

    public function produto(){
        return $this->hasMany('App\Categoria');
    }
}

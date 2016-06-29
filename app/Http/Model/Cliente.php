<?php

namespace App\\\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model {
    
    protected $fillable = ['nome', 'numero', 'complemento', 'telefone'];
}

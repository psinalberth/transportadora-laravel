<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use App\Http\Model\Cliente;
use App\Http\Model\Endereco;

class Frete extends Model {
    
	protected $table = 'fretes';

    protected $fillable = ['descricao', 'data_saida', 'data_chegada', 'peso', 'valor'];

    public function cliente() {
    	return $this->hasOne('App\Http\Model\Cliente');
    }

    public function endereco() {
    	return $this->hasOne('App\Http\Model\Endereco');
    }
}

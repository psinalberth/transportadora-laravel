<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

use App\Http\Model\Cliente;
use App\Http\Model\Frete;

class Endereco extends Model {
    
    protected $table = 'enderecos';

    protected $hidden = ['id'];

    protected $fillable = ['cep', 'logradouro', 'complemento', 'uf', 'cidade', 'bairro'];

    public function clientes() {
    	return $this->hasMany('App\Http\Model\Cliente', 'endereco_id');
    }

    public function fretes() {
    	return $this->belongsToMany('App\Http\Model\Frete');
    }
}

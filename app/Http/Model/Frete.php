<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use App\Http\Model\Cliente;
use App\Http\Model\Endereco;

class Frete extends Model {
    
	protected $table = 'fretes';

    protected $fillable = ['descricao', 'data_saida', 'data_chegada', 'peso', 'valor', 'cliente_id', 'endereco_id'];

    public function cliente() {
    	return $this->belongsTo('App\Http\Model\Cliente');
    }

    public function endereco() {
    	return $this->belongsTo('App\Http\Model\Endereco');
    }
}

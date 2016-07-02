<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

use App\Http\Model\Endereco;
use App\Http\Model\Frete;

class Cliente extends Model {
    
	protected $table = 'clientes';

	protected $hidden = ['endereco_id'];

    protected $fillable = ['nome', 'numero', 'complemento', 'telefone', 'endereco_id'];

    public function endereco() {
    	return $this->belongsTo('App\Http\Model\Endereco');
    }

    public function fretes() {
    	return $this->hasMany('App\Http\Model\Frete', 'cliente_id');
    }
}

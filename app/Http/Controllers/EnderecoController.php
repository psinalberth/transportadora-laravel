<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Repositories\EnderecoRepository as Enderecos;

class EnderecoController extends Controller {
    
    private $enderecos;

    public function __construct(Enderecos $enderecos) {
    	$this->enderecos = $enderecos;
    }

    public function findByCep($cep) {
    	return $this->enderecos->allBy('cep', $cep);
    }
}

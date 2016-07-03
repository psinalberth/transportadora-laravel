<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Model\Endereco;

class EnderecoController extends Controller {
    
    protected $endereco = null;

    public function __construct(Endereco $endereco) {
    	$this->endereco = $endereco;
    }

    public function findByCep($cep) {

    	$endereco = Endereco::where('cep', '=', $cep)->get();

    	return $endereco;
    }
}

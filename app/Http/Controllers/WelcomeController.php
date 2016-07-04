<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ClienteRepository as Clientes;
use App\Repositories\EnderecoRepository as Enderecos;
use App\Repositories\FreteRepository as Fretes;
use App\Http\Requests;

class WelcomeController extends Controller {

	private $clientes;
	private $enderecos;
	private $fretes;
	
	public function __construct(Clientes $clientes, Enderecos $enderecos, Fretes $fretes) {

		$this->clientes = $clientes;
		$this->enderecos = $enderecos;
		$this->fretes = $fretes;
	}

	public function index() {
		return view('welcome')->with('clientes', $this->clientes->count())-> with('fretes', $this->fretes->count())->with('enderecos', $this->enderecos->count());
	}
}

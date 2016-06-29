<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\ClienteRequest;
use App\Http\Requests\EnderecoRequest;
use App\Http\Controllers\Controller;
use App\Http\Model\Cliente;
use App\Http\Model\Endereco;

class ClientesController extends Controller {

	protected $cliente  = null;
	protected $endereco = null;

	public function __construct(Cliente $cliente, Endereco $endereco) {
		$this->cliente = $cliente;
		$this->endereco = $endereco;
	}

	public function index() {

		$clientes = Cliente::with('endereco')->get();

		return view('clientes.clientes')->with('clientes', $clientes);
	}

	public function teste() {

		return Cliente::with('endereco')->get();
	}

	public function editar() {

		$cliente = Cliente::with('endereco')->findOrFail($id);

		return $cliente;
	}

	public function store(Request $request, Cliente $cliente, Endereco $endereco) {
		
		$endereco = new Endereco($request->all());
		$cliente = new Cliente($request->all());
		
		$endereco->save();
		$endereco->clientes()->save($cliente);

		return $cliente;
	}

	public function dummy() {

		return view('welcome');
	}
}

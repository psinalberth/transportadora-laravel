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

	public function create() {
		
		return view('clientes.novo-cliente');
	}

	public function show($id) {

		$cliente = Cliente::with('endereco')->findOrFail($id);

		return $cliente;
	}

	public function update(Request $request, $id) {
		
		$cliente = $this->show($id);

		$cliente->update($request->all());

		return redirect('transportadora/clientes');
	}

	public function edit($id) {

		$cliente = $this->show($id);

		return view('clientes.editar-cliente')->with('cliente', $cliente);
	}

	public function store(Request $request, Cliente $cliente, Endereco $endereco) {
		
		$endereco = new Endereco($request->all());
		$cliente = new Cliente($request->all());
		
		$endereco->save();
		$endereco->clientes()->save($cliente);

		return redirect('transportadora/clientes');
	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\Cliente;
use App\Http\Model\Endereco;
use App\Repositories\ClienteRepository as Clientes;

class ClientesController extends Controller {

	private $clientes;

	public function __construct(Clientes $clientes) {
		$this->clientes = $clientes;
	}

	public function index() {
		return view('clientes.clientes')->with('clientes', $this->clientes->all());
	}

	public function create() {	
		return view('clientes.novo-cliente');
	}

	public function show($id) {
		return $this->clientes->find($id, 'endereco');
	}

	public function edit($id) {
		return view('clientes.editar-cliente')->with('cliente', $this->show($id));
	}

	public function update(Request $request, $id) {
		
		$cliente = $this->show($id);

		$cliente->endereco->update($request->all());

		// $endereco->update($request->all());

		$cliente->update($request->all());

		dd($cliente);

		return redirect('transportadora/clientes');
	}

	public function store(Request $request, Cliente $cliente, Endereco $endereco) {
		
		$endereco = new Endereco($request->all());
		$cliente = new Cliente($request->all());
		
		$endereco->save();
		$endereco->clientes()->save($cliente);

		return redirect('transportadora/clientes');
	}
}

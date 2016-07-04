<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\Cliente;
use App\Repositories\ClienteRepository as Clientes;
use App\Repositories\EnderecoRepository as Enderecos;

class ClientesController extends Controller {

	private $clientes;
	private $enderecos;

	public function __construct(Clientes $clientes, Enderecos $enderecos) {
		
		$this->clientes = $clientes;
		$this->enderecos = $enderecos;
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

	public function destroy($id) {

		$this->clientes->delete($id);

		return redirect('transportadora/clientes');
	}

	public function update(Request $request, $id) {
		
		$cliente = $this->clientes->find($id);

		$endereco = $this->enderecos->findBy('cep', $request->cep);

		if ($endereco == null) {
			$endereco = $this->enderecos->save($request->except('_token', '_method'));
		}

		$endereco->clientes()->save($cliente);

		$cliente->update($request->except('_token', '_method'));

		return redirect('transportadora/clientes');
	}

	public function store(Request $request) {
		
		$endereco = $this->enderecos->findBy('cep', $request->cep);

		if ($endereco == null) {
			$endereco = $this->enderecos->save($request->all());
		}

		$cliente = new Cliente($request->all());
		$endereco->clientes()->save($cliente);

		return redirect('transportadora/clientes');
	}
}

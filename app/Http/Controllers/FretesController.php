<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Model\Frete;
use App\Http\Model\Cliente;
use App\Http\Controllers\ClientesController;

class FretesController extends Controller {

	protected $cliente = null;
	protected $frete = null;


	public function __construct(Frete $frete, Cliente $cliente) {

		$this->frete = $frete;
		$this->cliente = $cliente;
	}
    
    public function index() {

    	$fretes = Frete::with('cliente')->get();

    	return view('fretes.fretes')->with('fretes', $fretes);
    }

    public function show($id) {

        $frete = Frete::with('cliente', 'endereco')->find($id);

        return $frete;
    }

    public function create() {

    	$clientes = Cliente::get()->lists('nome', 'id');

    	return view('fretes.novo-frete')->with('clientes', $clientes);
    }

    public function store(Request $request, Frete $frete, Cliente $cliente) {

    	$cliente = Cliente::with('endereco')->find($request['cliente']);
        $endereco = $cliente->endereco;

    	$frete = new Frete($request->all());
        $frete->cliente()->associate($cliente);
        $frete->endereco()->associate($cliente->endereco);
        $frete->save();

    	dd($frete);
    	
		// return redirect('transportadora/clientes');
    }

    public function edit($id) {

        $frete = $this->show($id);

        $clientes = Cliente::get()->lists('nome', 'id');

        return view('fretes.editar-frete')->with('clientes', $clientes)->with('frete', $frete);
    }
}

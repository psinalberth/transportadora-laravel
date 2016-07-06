<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Model\Frete;
use App\Repositories\ClienteRepository as Clientes;
use App\Repositories\EnderecoRepository as Enderecos;
use App\Repositories\FreteRepository as Fretes;

class FretesController extends Controller {

    private $clientes;
    private $fretes;
    private $enderecos;

	public function __construct(Clientes $clientes, Enderecos $enderecos, Fretes $fretes) {

		$this->fretes = $fretes;
		$this->enderecos = $enderecos;
        $this->clientes = $clientes;
	}
    
    public function index() {
        return view('fretes.fretes')->with('fretes', $this->fretes->all());
    }

    public function create() {  
        return view('fretes.novo-frete')->with('clientes', $this->clientes->all()->lists('nome', 'id'));
    }

    public function show($id) {
        return $this->fretes->find($id, 'endereco', 'cliente');
    }

    public function edit($id) {
        return view('fretes.editar-frete')->with('frete', $this->show($id))->with('clientes', $this->clientes->all()->lists('nome', 'id'));
    }

    public function destroy($id) {
        return redirect('transportadora/fretes')->with('frete', $this->fretes->delete($id))->with('flash_message', 'Registro excluído com sucesso!');;
    }

    public function store(Request $request) {

        $endereco = $this->enderecos->findBy('cep', $request->cep);
        $cliente = $this->clientes->find($request->cliente);

        if ($endereco == null) {
            $endereco = $this->enderecos->save($request->all());
        }

    	$frete = new Frete($request->all());
        $frete->cliente()->associate($cliente);
        $frete->endereco()->associate($endereco);
        $frete->save();
    	
		return redirect('transportadora/fretes')->with('flash_message', 'Registro salvo com sucesso!');;
    }
}

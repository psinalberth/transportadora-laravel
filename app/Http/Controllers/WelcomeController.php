<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Model\Cliente;
use App\Http\Model\Frete;
use App\Http\Model\Endereco;
use App\Http\Requests;

class WelcomeController extends Controller {
    
	public function index() {

		$clientes = Cliente::count();
		$fretes = Frete::count();

		return view('welcome')->with('clientes', $clientes)->with('fretes', $fretes);
	}

}

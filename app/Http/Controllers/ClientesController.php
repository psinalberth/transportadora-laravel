<?php

namespace App\Http\Controllers;

class ClientesController extends Controller {

	public function index() {

		return view('clientes.clientes');
	}
}

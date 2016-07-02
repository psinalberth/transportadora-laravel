<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Model\Frete;

class FretesController extends Controller {
    
    public function index() {

    	$fretes = Frete::with('cliente')->with('endereco')->get();

    	return view('fretes.fretes')->with('fretes', $fretes);
    }
}

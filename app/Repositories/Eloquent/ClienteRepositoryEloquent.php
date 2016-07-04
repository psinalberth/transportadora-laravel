<?php

namespace App\Repositories\Eloquent;

use App\Repositories\ClienteRepository;
use App\Repositories\Eloquent\RepositoryEloquent;
use App\Http\Model\Cliente;

class ClienteRepositoryEloquent extends RepositoryEloquent implements ClienteRepository {

	function model() {

		return Cliente::class;
	}
}
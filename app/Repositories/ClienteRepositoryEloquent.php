<?php

namespace App\Repositories;

use App\Repositories\ClienteRepository;
use App\Repositories\Eloquent\Repository;
use App\Http\Model\Cliente;

class ClienteRepositoryEloquent extends Repository implements ClienteRepository {

	function model() {

		return Cliente::class;
	}
}
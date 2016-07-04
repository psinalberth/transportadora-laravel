<?php

namespace App\Repositories\Eloquent;

use App\Repositories\FreteRepository;
use App\Repositories\Eloquent\RepositoryEloquent;
use App\Http\Model\Frete;

class FreteRepositoryEloquent extends RepositoryEloquent implements FreteRepository {

	function model() {

		return Frete::class;
	}
}
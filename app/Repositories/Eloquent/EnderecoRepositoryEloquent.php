<?php

namespace App\Repositories\Eloquent;

use App\Repositories\EnderecoRepository;
use App\Repositories\Eloquent\RepositoryEloquent;
use App\Http\Model\Endereco;

class EnderecoRepositoryEloquent extends RepositoryEloquent implements EnderecoRepository {

	function model() {

		return Endereco::class;
	}
}
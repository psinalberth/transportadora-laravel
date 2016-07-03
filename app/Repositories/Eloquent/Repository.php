<?php 

namespace App\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Container\Container as Application;
use App\Repositories\RepositoryInterface;

abstract class Repository implements RepositoryInterface {

	private $application;

	protected $model;

	public function __construct(Application $application) {

		$this->application = $application;
		$this->makeModel();
	}

	abstract function model();

	public function makeModel() {

		$model = $this->application->make($this->model());

		return $this->model = $model;
	}

	public function create() {

	}

	public function find($id, $with = []) {

		if (isset($with) && $with != '') {
			
			return $this->model->with($with)->find($id);
		}

		return $this->model->find($id);
	}

	public function all($columns = array('*')) {
		return $this->model->get($columns);
	}

	public function update() {

	}

	public function delete() {

	}
}
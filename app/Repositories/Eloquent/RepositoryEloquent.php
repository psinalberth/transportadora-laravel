<?php 

namespace App\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Container\Container as Application;
use App\Repositories\Repository;

abstract class RepositoryEloquent implements Repository {

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

	public function save($data) {
		return $this->model->create($data);
	}

	public function find($id, $with = []) {

		if (isset($with) && $with != '') {
			
			return $this->model->with($with)->find($id);
		}

		return $this->model->find($id);
	}

	public function findBy($key, $value, $with = []) {

		if (isset($with) && $with != '') {
			
			return $this->model->where($key, "=", $value)->with($with)->first();
		}

		return $this->model->where($key, "=", $value)->first();

	}

	public function all($columns = array('*')) {
		return $this->model->get($columns);
	}

	public function count() {
		return $this->model->count();
	}

	public function allBy($key, $value, $with = []) {

		if (isset($with) && $with != '') {
			
			return $this->model->where($key, "=", $value)->with($with)->get();
		}

		return $this->model->where($key, "=", $value)->get();

	}

	public function update($data, $id) {
		return $this->model->where('id', '=', $id)->update($data);
	}

	public function delete($id) {
		return $this->model->destroy($id);
	}
}
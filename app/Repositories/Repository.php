<?php 
	
namespace App\Repositories;

/**
* @
* @author Inalberth
**/

interface Repository {

	public function save($data);

	public function find($id, $with = []);

	public function findBy($key, $value, $with = []);

	public function all($columns = array('*'));

	public function allBy($key, $value, $with = []);

	public function update($data, $id);

	public function delete($id);
}

	

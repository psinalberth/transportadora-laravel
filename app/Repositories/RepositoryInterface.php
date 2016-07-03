<?php 
	
namespace App\Repositories;

/**
* @
* @author Inalberth
**/

interface RepositoryInterface {

	public function create();

	public function find($id, $with = array('*'));

	public function all($columns = array('*'));

	public function update();

	public function delete();
}

	

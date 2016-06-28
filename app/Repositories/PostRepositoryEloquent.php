<?php

namespace App\Repositories;

use App\Entities\Post;
use App\Repositories\PostRepository;

use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class PostRepositoryEloquent
 * @package namespace App\Repositories;
 */

class PostRepositoryEloquent extends BaseRepository implements PostRepository {
	/**
	 * Specify Model class name
	 *
	 * @return string
	 */
	public function model() {
		return Post::class ;
	}

	/**
	 * Boot up the repository, pushing criteria
	 */
	public function boot() {
		$this->pushCriteria(app(RequestCriteria::class ));
	}
}

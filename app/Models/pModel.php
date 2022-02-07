<?php

namespace App\Models;

use CodeIgniter\Model;

class pModel extends Model
{
	protected $table = 'creator';
	protected $allowedFields = [
		'names',
		'twitter',
	];

	public function getProfile($slug = false)
	{
		if ($slug == false) {
			return $this->findAll();
		}

		return $this->where(['names' => $slug])->first();
	}
}
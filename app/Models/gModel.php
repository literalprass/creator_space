<?php

namespace App\Models;

use CodeIgniter\Model;

class gModel extends Model
{
	protected $table = 'glry';
	protected $allowedFields = [
		'title',
		'type',
		'category',
		'description',
		'creator',
		'image'
	];

	public function getGal($slug = false)
	{
		if ($slug == false) {
			return $this->findAll();
		}

		return $this->where(['title' => $slug])->first();
	}
}
<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
	protected $table                = 'user';
	protected $primaryKey           = 'id';
	protected $returnType           = '\App\Entities\User';
	protected $allowedFields        = [
		'username', 'password', 'salt', 'avatar', 'role', 'created_by', 'created_date', 'updated_by', 'updated_date'
	];
	protected $useTimeStamp			= false;
}

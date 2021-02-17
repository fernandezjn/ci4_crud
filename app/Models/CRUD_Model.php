<?php

namespace App\Models;

use CodeIgniter\Model;

class CRUD_Model extends Model{
	protected $table = 'tbl_student';
	protected $primaryKey = 'id';
	protected $useAutoIncrement = true;
	protected $allowedFields = ['name', 'student_number', 'course','year_level'];

}

?>
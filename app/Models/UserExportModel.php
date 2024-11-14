<?php

namespace App\Models;

use CodeIgniter\Model;

class UserExportModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'email', 'password', 'role', 'created_at', 'updated_at'];
}

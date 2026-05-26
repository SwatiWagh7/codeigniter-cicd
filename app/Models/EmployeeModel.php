<?php

namespace App\Models;

use CodeIgniter\Model;

class EmployeeModel extends Model
{
    protected $table = 'employees';

    protected $primaryKey = 'id';

    protected $allowedFields = [
        'employee_id',
        'name',
        'email',
        'department',
        'designation',
        'status'
    ];
}

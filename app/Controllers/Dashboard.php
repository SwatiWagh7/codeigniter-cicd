<?php

namespace App\Controllers;

use App\Models\EmployeeModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $model = new EmployeeModel();

        $data['totalEmployees'] = $model->countAll();

        $data['activeEmployees'] =
            $model->where('status', 'Active')->countAllResults();

        $data['inactiveEmployees'] =
            $model->where('status', 'Inactive')->countAllResults();

        return view('dashboard', $data);
    }
}

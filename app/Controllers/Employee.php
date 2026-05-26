<?php

namespace App\Controllers;

use App\Models\EmployeeModel;

class Employee extends BaseController
{
    public function index()
    {
        $model = new EmployeeModel();

        $data['employees'] = $model->findAll();

        return view('employees/index', $data);
    }

    public function create()
    {
        return view('employees/create');
    }

    public function store()
    {
        $model = new EmployeeModel();

        $model->save([
            'employee_id' => $this->request->getPost('employee_id'),
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'department' => $this->request->getPost('department'),
            'designation' => $this->request->getPost('designation'),
            'status' => $this->request->getPost('status')
        ]);

        return redirect()->to('/employee');
    }
}

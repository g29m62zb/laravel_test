<?php

namespace App\Repositories;

use App\Models\Employee;

class EmployeeRepository
{
    private $model;

    public function __construct(Employee $employee)
    {
        $this->model = $employee;
    }

    public function store(array $params)
    {
        return $this->model->create($params);
    }
}

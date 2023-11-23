<?php

namespace App\Repositories;

use App\Models\Filial;

class FilialRepository
{
    private $model;

    public function __construct(Filial $filial)
    {
        $this->model = $filial;
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function getById(int $id)
    {
        /**
         * В принципе через scope-модель можно это было сделать...
         */
        return $this->model->where('id', '=', $id)->with(['employees' => function ($query) {
            $query->orderBy('first_name', 'asc');
        }])->get();
    }

    public function store(array $params)
    {
        return $this->model->create($params);
    }
}

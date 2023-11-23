<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Repositories\EmployeeRepository;
use Illuminate\Http\Response;

class EmployeeController extends Controller
{
    private $employeeRepository;

    public function __construct(EmployeeRepository $employeeRepository)
    {
        $this->employeeRepository = $employeeRepository;
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(EmployeeRequest $employeeRequest)
    {
        $data = $employeeRequest->validated();

        return response()->json(
            [
                'success' => true,
                'data' => $this->employeeRepository->store(
                    [
                        'first_name' => $data['first_name'],
                        'last_name' => $data['last_name'],
                        'filial_id' => $data['filial_id'],
                        'position_id' => $data['position_id']
                    ]
                ),
            ],
            Response::HTTP_CREATED
        );
    }
}

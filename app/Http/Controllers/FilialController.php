<?php

namespace App\Http\Controllers;

use App\Http\Requests\FilialRequest;
use App\Models\Manufacture;
use App\Repositories\FilialRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FilialController extends Controller
{
    private $filialRepository;

    public function __construct(FilialRepository $filialRepository)
    {
        $this->filialRepository = $filialRepository;
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(
            [
                'success' => true,
                'data' => $this->filialRepository->getAll(),
            ],
            Response::HTTP_OK
        );
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function get(int $id)
    {
        return response()->json(
            [
                'success' => true,
                'data' => $this->filialRepository->getById($id),
            ],
            Response::HTTP_OK
        );
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(FilialRequest $filialRequest)
    {
        $data = $filialRequest->validated();

        return response()->json(
            [
                'success' => true,
                'data' => $this->filialRepository->store(
                    [
                        'name' => $data['name'],
                        'manufacture_id' => Manufacture::MANUFACTURE_ID
                    ]
                )
            ],
            Response::HTTP_CREATED
        );
    }
}

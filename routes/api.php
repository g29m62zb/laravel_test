<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FilialController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/filials', [FilialController::class, 'index']);
Route::get('/filial/{id}', [FilialController::class, 'get']);
Route::post('/filials', [FilialController::class, 'store']);
Route::post('/employees',[EmployeeController::class, 'store']);

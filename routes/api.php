<?php

use App\Http\Controllers\PatientController;
use App\Models\Patient;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/patients',[PatientController::class, 'index']);
Route::post('/patients',[PatientController::class, 'store']);
Route::get('/patients/{id}',[PatientController::class, 'show']);
Route::put('/patients/{id}',[PatientController::class, 'update']);
Route::delete('/patients/{id}',[PatientController::class, 'destroy']);
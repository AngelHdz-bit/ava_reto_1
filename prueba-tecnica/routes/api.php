<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareaController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/create-tareas', [TareaController::class,'store']);
Route::get('/get-tareas', [TareaController::class,'show']);
Route::delete('/delete-tarea/{id}', [TareaController::class,'destroy']);
Route::put('/tareas/{id}', [TareaController::class, 'update']);

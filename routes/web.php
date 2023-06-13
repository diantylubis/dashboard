<?php

use App\Http\Controllers\DashboardController;

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SquadController;
use App\Http\Controllers\StatusController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/dashboard',[DashboardController::class,'index']);
Route::get('/status', [StatusController::class, 'index']);
Route::get('/project', [ProjectController::class, 'index']);
Route::get('/squad', [SquadController::class, 'index']);

Route::post('/insert-data', [DataController::class, 'store']);
Route::post('/filter-data', [DataController::class, 'filterData']);
Route::put('/update-data/{id}', [DataController::class, 'update']);
Route::get('/data/{id}', [DataController::class, 'show']);
Route::get('/data', [DataController::class, 'index']);
Route::delete('/delete-data/{id}', [DataController::class, 'destroy']);
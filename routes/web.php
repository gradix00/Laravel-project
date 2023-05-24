<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

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
Route::get('puchalski/51537/show', [PeopleController::class, 'show']);
Route::get('puchalski/51537/show/{id}', [PeopleController::class, 'index']);
Route::put('puchalski/51537/update/{id}', [PeopleController::class, 'update']);
Route::post('puchalski/51537/create', [PeopleController::class, 'create']);
Route::delete('puchalski/51537/delete/{id}', [PeopleController::class, 'delete']);

Route::get('/', function () {
    return view('welcome');
});
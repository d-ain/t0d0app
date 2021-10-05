<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ToDoController::class, 'index']);
Route::post('/add', [ToDoController::class, 'create']);
Route::post('/update/{id}', [ToDoController::class, 'update']);
Route::post('/delete/{id}', [ToDoController::class, 'delete']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AdminController;
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

Route::get('/', [UsersController::class, 'index']);
Route::get('/regis', [UsersController::class, 'create']);
Route::post('/auth', [UsersController::class, 'auth']);
Route::post('/regis', [UsersController::class, 'store']);

// ADMIN
Route::get('/dashboard', [AdminController::class, 'index']);

//
Route::get('/gejala', [AdminController::class, 'gejala']);
Route::get('/delete_gejala/{id}', [AdminController::class, 'delete_gejala']);
Route::get('/detail_edit_gejala/{id}', [AdminController::class, 'detail_edit_gejala']);
Route::post('/input_gejala', [AdminController::class, 'input_gejala']);
Route::post('/update_data_gejala/{id}', [AdminController::class, 'update_data_gejala']);

Route::get('/penyakit', [AdminController::class, 'penyakit']);
Route::post('/input_penyakit', [AdminController::class, 'input_penyakit']);
Route::post('/update_data_penyakit/{id}', [AdminController::class, 'update_data_penyakit']);
Route::get('/detail_edit_penyakit/{id}', [AdminController::class, 'detail_edit_penyakit']);

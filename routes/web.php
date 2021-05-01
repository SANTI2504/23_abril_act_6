<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CompanyController;
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

//ruta raiz
Route::redirect('/', 'empleados');

//rutas de employees
//ruta tipo get para index
Route::get('empleados', [EmployeeController::class, 'index']);

//rutta tipo get para create
Route::get('empleados/crear', [EmployeeController::class, 'create']);

//ruta tipo post para store
Route::post('empleados',[EmployeeController::class, 'store']);

//ruta de tipo get para edit
Route::get('empleados/editar/{id}', [EmployeeController::class, 'edit']);

//ruta de tipo put para update
Route::put('empleados/{id}',[EmployeeController::class, 'update']);

//ruta de tipo get para show
Route::get('empleados/{id}', [EmployeeController::class, 'show']);

//ruta de tipo delete para destroy
Route::delete('empleados/{id}', [EmployeeController::class, 'destroy']);


// rutas de Company
//ruta de tipo get
Route::get('empresas', [CompanyController::class, 'index']);

//ruta de tipo get para create
Route::get('empresas/crear', [CompanyController::class, 'create']);

//ruta de tipo post para store
Route::post('empresas', [CompanyController::class, 'store']);

//ruta de tipo get para show
Route::get('empresas/{id}', [CompanyController::class, 'show']);

//ruta de tipo get para edit
Route::get('empresas/editar/{id}', [CompanyController::class, 'edit']);

// ruta de tipo put para update
Route::put('empresas/{id}',[CompanyController::class, 'update']);

//ruta de tipo delete para destroy
Route::delete('empresas/{id}',[CompanyController::class, 'destroy']);







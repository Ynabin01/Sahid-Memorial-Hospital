<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SahitmemorialController; 



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


Route:: get('/', [SahitmemorialController::class,'index']);
Route::get('/about', [SahitmemorialController::class,'about']);
Route::get('/ourservices', [SahitmemorialController::class,'ourservices']);
Route::get('/department-main', [SahitmemorialController::class,'departmentMain']);
Route::get('/department', [SahitmemorialController::class,'department']);
Route::get('/doctors', [SahitmemorialController::class,'doctors']);
Route::get('/newsevent', [SahitmemorialController::class,'newsevent']);
Route::get('/newsdetails', [SahitmemorialController::class,'newsdetails']);
Route::get('/contactus', [SahitmemorialController::class,'contactus']);
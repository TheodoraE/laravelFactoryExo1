<?php

use App\Http\Controllers\BatimentController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TypeFormationController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [BatimentController::class, 'index']);
Route::get('/formations', [FormationController::class, 'index']);
Route::get('/typeFormations', [TypeFormationController::class, 'index']);
Route::get('/students', [StudentController::class, 'index']);
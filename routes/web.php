<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
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

Route::get('/', [ProjectController::class, 'index']);
Route::get('/home', [ProjectController::class, 'create']);
Route::post('/proj',[ProjectController::class, 'store']);
Route::delete('home/delete/{id}', [ProjectController::class, 'destroy']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/contact', [ContactController::class, 'create']);
Route::post('/store', [ContactController::class, 'store']);
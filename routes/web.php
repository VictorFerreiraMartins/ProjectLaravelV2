<?php

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
use App\Http\Controllers\EventController;

Route::get('/',[EventController::class,'index']);

Route::get('/events/create',[EventController::class,'create']);

Route::post('/events', [EventController::class,'store']);

Route::delete('/events',[EventController::class,'destroy']);

Route::get('/events/list',[EventController::class,'list']);

Route::get('/events/remove',[EventController::class,'remove']);

Route::get('/contact',[EventController::class,'contact']);


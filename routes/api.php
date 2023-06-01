<?php

use App\Http\Controllers\landController;
use App\Http\Controllers\locationController;
use App\Http\Controllers\placeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::resource('location',locationController::class);
// Route::resource('land',landController::class);
// Route::post('/location/filter',[locationController::class,'search']);
Route::get('/location/getall',[locationController::class,'index']);
Route::get('/location/getbyid/{id}',[locationController::class,'getById']);
Route::post('/location/add',[locationController::class,'store']);
Route::put('/location/update/{location}',[locationController::class,'update']);
Route::delete('/location/delete/{id}',[locationController::class,'delete']);
// Route::get('/location/find/{id}',[landController::class,'show']);
Route::get('/land/getall',[landController::class,'index']);
Route::get('/land/getbyid/{id}',[landController::class,'getById']);
Route::post('/land/add',[landController::class,'store']);
Route::put('/land/update/{land}',[landController::class,'update']);
Route::delete('/land/delete/{id}',[landController::class,'delete']);
// Route::get('/login', [UserController::class,"login"]);
Route::get('/house/getall',[placeController::class,'index']);
Route::get('/house/getbyid/{id}',[placeController::class,'getById']);
Route::post('/house/add',[placeController::class,'store']);
Route::put('/house/update/{place}',[placeController::class,'update']);
Route::delete('/house/delete/{id}',[placeController::class,'delete']);
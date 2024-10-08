<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get("insertRecord",[App\Http\Controllers\InsertRecord::class,'insert']);
Route::get("updaterecord",[App\Http\Controllers\UpdateRecord::class,'update']);
Route::get("deleterecord/{id}",[App\Http\Controllers\DeleteRecord::class,'delete']);
Route::get("getRecord/{id}",[App\Http\Controllers\GetRecord::class,'get']);
Route::get("getAll/{id}",[App\Http\Controllers\GetRecord::class,'all']);




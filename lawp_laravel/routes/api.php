<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('user',\App\Http\Controllers\api\UserControllerApi::class);

Route::get('departament',[\App\Http\Controllers\api\DepartamentControllerApi::class,'index'])->name('departament.index');
Route::get('departament/{id}',[\App\Http\Controllers\api\DepartamentControllerApi::class,'show'])->name('departament.show');
Route::get('municipality/{id}',[\App\Http\Controllers\api\MunicipalityControllerApi::class,'index']);

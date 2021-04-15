<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
Route::post('/user/login','\App\Http\Controllers\api\UserControllerApi@authenticate');
Route::post('/user/register','\App\Http\Controllers\api\UserControllerApi@register');

Route::group(['middleware'=>['jwt.verify']],function(){
    Route::get('user','\App\Http\Controllers\api\UserControllerApi@getAuthenticatedUser');

    Route::group(['middleware'=>['is_admin']],function(){
        Route::get('users',[\App\Http\Controllers\api\UserControllerApi::class,'index']);
    });
});
//Route::apiResource('user',\App\Http\Controllers\api\UserControllerApi::class);

Route::post('/business/register',[\App\Http\Controllers\api\BusinessControllerApi::class,'register']);
Route::post('/business/login',[\App\Http\Controllers\api\BusinessControllerApi::class,'authenticate']);

Route::group(['middleware'=>['jwt.bus.verify']],function(){
    Route::get('/business',[\App\Http\Controllers\api\BusinessControllerApi::class,'index']);
});



Route::get('departament',[\App\Http\Controllers\api\DepartamentControllerApi::class,'index'])->name('departament.index');
Route::get('departament/{id}',[\App\Http\Controllers\api\DepartamentControllerApi::class,'show'])->name('departament.show');
Route::get('municipality/{id}',[\App\Http\Controllers\api\MunicipalityControllerApi::class,'index']);



<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/user/login','\App\Http\Controllers\api\UserControllerApi@authenticate');
Route::post('/user/register','\App\Http\Controllers\api\UserControllerApi@register');

Route::group(['middleware'=>['jwt.verify']],function(){
    Route::get('/user','\App\Http\Controllers\api\UserControllerApi@getAuthenticatedUser');
    Route::post('/pqr',[\App\Http\Controllers\api\PqrControllerApi::class,'store']);
    Route::post('/business/register',[\App\Http\Controllers\api\BusinessControllerApi::class,'register']);
    Route::get('/pqr/user/{id}',[\App\Http\Controllers\api\PqrControllerApi::class,'showForUser']);
    Route::put('/pqr/{id}',[\App\Http\Controllers\api\PqrControllerApi::class,'update']);
    Route::delete('/pqr/{id}',[\App\Http\Controllers\api\PqrControllerApi::class,'destroy']);
    Route::put('/user/{id}',[\App\Http\Controllers\api\UserControllerApi::class,'update']);
    Route::delete('/user/{id}',[\App\Http\Controllers\api\UserControllerApi::class,'destroy']);

    Route::group(['middleware'=>['is_admin']],function(){
        Route::get('users',[\App\Http\Controllers\api\UserControllerApi::class,'index']);
    });

    Route::group(['middleware'=>['is_business']],function (){
        Route::get('business/{id}',[\App\Http\Controllers\api\BusinessControllerApi::class,'show']);
        Route::get('/pqr/business/{id}',[\App\Http\Controllers\api\PqrControllerApi::class,'showForBus']);

    });
});


//Route::apiResource('/pqr',\App\Http\Controllers\api\PqrControllerApi::class);


Route::get('departament',[\App\Http\Controllers\api\DepartamentControllerApi::class,'index'])->name('departament.index');
Route::get('departament/{id}',[\App\Http\Controllers\api\DepartamentControllerApi::class,'show'])->name('departament.show');
//Route::get('municipality/{id}',[\App\Http\Controllers\api\MunicipalityControllerApi::class,'index']);



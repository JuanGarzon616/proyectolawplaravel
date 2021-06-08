<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api as api;


Route::post('/user/login/', [api\UserControllerApi::class, 'authenticate']);
Route::post('/user/register/', [api\UserControllerApi::class, 'register']);

Route::group(['middleware' => ['jwt.verify']], function () {

    Route::put('/user/{id}', [api\UserControllerApi::class, 'update']);
    Route::delete('/user/{id}', [api\UserControllerApi::class, 'destroy']);
    Route::get('/user/', [api\UserControllerApi::class, 'getAuthenticatedUser']);
    Route::post('/response/', [api\ResponseControlleApi::class, 'store']);
    Route::get('/response/{id}', [api\ResponseControlleApi::class, 'show']);
    Route::get('/response/', [api\ResponseControlleApi::class, 'index']);
    Route::get('/getbusi/', [api\BusinessControllerApi::class, 'selectBusi']);

    Route::group(['middleware' => ['is_normal_user']], function () {
        Route::post('/pqr/', [api\PqrControllerApi::class, 'store']);
        Route::post('/pqr/affair/', [api\PqrControllerApi::class, 'selectUserAffair']);
        Route::post('/business/register/', [api\BusinessControllerApi::class, 'register']);
        Route::get('/pqr/user/{id}', [api\PqrControllerApi::class, 'showForUser']);
        Route::put('/pqr/{id}', [api\PqrControllerApi::class, 'update']);
        Route::delete('/pqr/{id}', [api\PqrControllerApi::class, 'destroy']);
    });

    Route::group(['middleware' => ['is_admin']], function () {
        Route::get('/users/', [api\UserControllerApi::class, 'index']);
        Route::get('/business/', [api\BusinessControllerApi::class, 'index']);
    });

    Route::group(['middleware' => ['is_business']], function () {
        Route::get('/business/{id}', [api\BusinessControllerApi::class, 'show']);
        Route::get('/pqr/business/{id}', [api\PqrControllerApi::class, 'showForBus']);
        Route::put('/business/{id}', [api\BusinessControllerApi::class, 'update']);
        Route::delete('/business/{id}', [api\BusinessControllerApi::class, 'destroy']);

    });
});

Route::get('/departament/', [api\DepartamentControllerApi::class, 'index'])->name('departament.index');
Route::get('/departament/{id}', [api\DepartamentControllerApi::class, 'show'])->name('departament.show');
Route::get('/economicsectors/',[api\DepartamentControllerApi::class, 'economic']);


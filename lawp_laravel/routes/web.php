<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

//Route::resource('attachments',\App\Http\Controllers\AttachmentController::class);

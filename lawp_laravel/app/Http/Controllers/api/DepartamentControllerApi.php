<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\departament;
use App\Models\municipality;
use Illuminate\Http\Request;

class DepartamentControllerApi extends Controller
{

    public function index()
    {
        return departament::class->municipalities()->get();
    }
/*
    public function show($id)
    {
        //
    }
*/
}

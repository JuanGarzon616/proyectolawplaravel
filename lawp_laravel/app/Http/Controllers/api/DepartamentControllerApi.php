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
        return departament::get();
    }

    public function show($id)
    {

        return municipality::select('id','name')->where('fk_departaments_id', $id)->get();
    }

}

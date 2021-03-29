<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\municipality;
use Illuminate\Http\Request;

class MunicipalityControllerApi extends Controller
{
    public function index($id){
        return municipality::where('fk_departaments_id');
    }
}

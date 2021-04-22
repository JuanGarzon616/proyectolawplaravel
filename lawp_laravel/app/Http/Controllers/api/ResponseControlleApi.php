<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\response;
use Illuminate\Http\Request;

class ResponseControlleApi extends Controller
{

    public function index()
    {
        return response::get();
    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {
        return response::where('fk_pqr_id', $id)->get();
    }

}

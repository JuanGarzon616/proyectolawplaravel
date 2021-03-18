<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\user;
use Illuminate\Http\Request;

class UserControllerApi extends Controller
{

    public function index()
    {
        $users = user::get();
        return $users->toArray();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        try {
            $users = user::create($request->except('fk_rol_id'));
            $mensaje = ['mensaje'=>'succesful'];
        } catch(\Illuminate\Database\QueryException $ex){
            $find = $this->show($request->document);

            //dd($find['user']);

            if($find['user'] !== null ){
                $mensaje = ['mensage'=>'Documento ya usado.'];
            }else{
                $mensaje = ['mensage'=>'Solo se permiten numeros'];
            }
        }

        return $mensaje;
    }

    public function show($id)
    {
        //$users = user::where('names','like','%'.$id.'%')->get();
        $users = user::find($id);
        $data = ['user'=>$users];/*
        try {
            $users = user::find($id);
            $data = ['user'=>$users];
        }catch(\Illuminate\Database\QueryException $e){
            $data = ['user'=>$e];
        }*/
        return $data;
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}

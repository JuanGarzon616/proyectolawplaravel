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
            $email = $this->ifEmail($request->mail);
            $document = $this->show($request->document);
            //dd($email['email']);
            //dd($document['user']);

            if($document['user'] !== null ){
                $mensaje = ['mensage'=>'Documento ya usado.'.$ex];
            }elseif($email['email'] !== null){
                $mensaje = ['mensage'=>'Correo ya utilizado'.$ex];
            }else{
                $mensaje = ['mensage'=>'Correo o email mal'.$ex];
            }
        }

        return $mensaje;
    }
    public function ifEmail($mail){
        $email = user::('mail','like',$mail)->get();
        $emailerification = ['email'=>$email];

        return $emailerification;
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

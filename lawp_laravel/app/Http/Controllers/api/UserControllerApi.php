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

            if(!empty($email['email'])){
                $mensaje = ['mensage'=>'Correo ya utilizado'];
            }elseif($document !== null ){
                $mensaje = ['mensage'=>'Documento ya usado.'.$ex];
            }else{
                $mensaje = ['mensage'=>'Algun campo contiene un caracter no deseado revisa.'];
            }
        }

        return $mensaje;
    }
    public function ifEmail($mail){
        $email = user::where('mail','like',$mail)->get();
        $emailerification = ['email'=>$email->toArray()];
        return $emailerification;
    }

    public function show($id)
    {
        //$users = user::where('names','like','%'.$id.'%')->get();
        $users = user::find($id);
        $data = ['user'=>$users];
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

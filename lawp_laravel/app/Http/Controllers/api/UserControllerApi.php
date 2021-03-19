<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserControllerApi extends Controller
{

    public function index()
    {
        $users = user::get();
        return $users->toArray();
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'document'=>'required|unique:users,document|integer|max:99999999999999999',
            'names'=>'required|max:50',
            'last_names'=>'required|max:50',
            'direcction'=>'required|max:50',
            'tellephone1'=>'required|integer|max:99999999999999999',
            'tellephone2'=>'integer|nullable|max:99999999999999999',
            'mail'=>'required|unique:users,mail|max:50|regex:/^[^0-9][_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/',
            'password'=>'required|min:10|max:30|same:password2',
            //'password2'=>'required|min:10|max:30',
            'token'=>'nullable|max:225',
            'fk_document_type_id'=>'required|integer|max:5',
            //'fk_rol_id'=>'integer|max:10',
            'fk_municipality_id'=>'required|integer',
            'created_at'=>'nullable|date|after:start_date',
            'updated_at'=>'nullable|date|after:start_date'
        ]);

        //dd($prueba);

        //return user::create($request->except('fk_rol_id'));
        return user::create([
            'document'=>$request->document,
            'names'=>$request->names,
            'last_names'=>$request->last_names,
            'direcction'=>$request->direcction,
            'tellephone1'=>$request->tellephone1,
            'tellephone2'=>$request->tellephone2,
            'mail'=>$request->mail,
            'password'=>Hash::make($request->password),
            'token'=>$request->token,
            'fk_document_type_id'=>$request->fk_document_type_id,
            'fk_municipality_id'=>$request->fk_municipality_id,
            'created_at'=>$request->created_at,
            'updated_at'=>$request->updated_at
        ]);

        /*$request->user()->fill([
                'password' => Hash::make($request->newPassword)
            ])->save();*/
        /*try {



            $mensaje = ['mensaje'=>'succesful'];
        } catch(\Illuminate\Database\QueryException $ex){
            //$mensaje = ['response' =>'error'.$ex];
            $email = $this->ifEmail($request->mail);
            $document = $this->show($request->document);

            if(!empty($document['user'])){
                $mensaje = ['mensage'=>'Documento ya utilizado'];
            }elseif(!empty($email['email'])){
                $mensaje = ['mensage'=>'Correo ya utilizado'];
            }else{
                $mensaje = ['mensage'=>'Algun campo contiene un caracter no deseado revisa.'];
            }
        }*/

        //return $mensaje;
    }
    /*public function ifEmail($mail){
        $email = user::where('mail','like',$mail)->get();
        return ['email'=>$email->toArray()];
    }*/

    public function show($id)
    {
        //$users = user::where('names','like','%'.$id.'%')->get();
        $users = user::where('document','like',$id)->get();
        return ['user'=>$users->toArray()];
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

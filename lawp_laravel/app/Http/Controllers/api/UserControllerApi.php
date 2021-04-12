<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Contracts\JWTSubject;

class UserControllerApi extends Controller
{

    public function index()
    {
        $users = user::get();
        return $users->toArray();
    }

    public function store(userRequest $request)
    {
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
    }

    public function show($id)
    {
        return user::select('document')->where('document',$id)->get();
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
    public function ifEmail($mail){
        return user::select('mail')->where('mail',$mail)->get();
    }

}

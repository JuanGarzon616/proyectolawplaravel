<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\user;
//use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
//use Tymon\JWTAuth\Contracts\JWTSubject;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Facades\JWTAuth;

class UserControllerApi extends Controller
{
    public function authenticate(Request $request){
        $credenetial = $request->only('mail','password');
        try{
            if(! $token = JWTAuth::attempt($credenetial)){
                return response()->json(['error'=>'Invalid Credentials'],400);
            }
        }catch(JWTException $e){
            return response()->json(['error'=>'no se pudo crear token']);
        }
        return response()->json(compact('token'));
    }

    public function getAuthenticatedUser()
    {
        try {
            if (!$user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['user_not_found'], 404);
            }
        } catch (TokenExpiredException $e) {
            return response()->json(['token_expired'], $e->getStatusCode());
        } catch (TokenInvalidException $e) {
            return response()->json(['token_invalid'], $e->getStatusCode());
        } catch (JWTException $e) {
            return response()->json(['token_absent'], $e->getStatusCode());
        }
        return response()->json(compact('user'));
    }


    public function index()
    {
        return user::get();
    }

    public function register(UserRequest $request)
    {
        $user = user::create([
            'document'=>$request->document,
            'names'=>$request->names,
            'last_names'=>$request->last_names,
            'direcction'=>$request->direcction,
            'tellephone1'=>$request->tellephone1,
            'tellephone2'=>$request->tellephone2,
            'mail'=>$request->mail,
            'password'=>Hash::make($request->password),
            'token'=>$request->token,
            'image'=>$request->image,
            'fk_document_type_id'=>$request->fk_document_type_id,
            'fk_municipality_id'=>$request->fk_municipality_id,
            'created_at'=>$request->created_at,
            'updated_at'=>$request->updated_at
        ]);

        $token = JWTAuth::fromUser($user);

        return response()->json(compact('user','token'),201);
    }

    public function show($id)
    {
        return user::where('id',$id)->get();
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

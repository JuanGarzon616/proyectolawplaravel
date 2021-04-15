<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\BusinessRequest;
use App\Models\business;
use Carbon\Carbon;
use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Facades\JWTAuth;

class BusinessControllerApi extends Controller
{

    //protected $guard ="business";

    public function authenticate(Request $request){
        //Config::set('jwt.user', 'App\Admin');
        Config::set('auth.providers.users.model', business::class);
        $credenetial = $request->only('mail','password');
        try{
            if(!$token = JWTAuth::attempt($credenetial)){
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
        return business::get();
    }


    public function register(BusinessRequest $request)
    {
        $business = business::create([
            'bussiness_name'=>$request->bussiness_name,
            'nit'=>$request->nit,
            'name'=>$request->name,
            'tellephone1'=>$request->tellephone1,
            'tellephone2'=>$request->tellephone2,
            'mail'=>$request->mail,
            'password'=>Hash::make($request->paswword),
            'member_remaining'=>carbon::now()->addMonth(),
            'fk_economic_sector_id'=>$request->esector,
            'fk_municipality_id'=>$request->fk_municipality_id
        ]);

        $token = JWTAuth::fromUser($business);

        return response()->json(compact('business','token'),201);
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

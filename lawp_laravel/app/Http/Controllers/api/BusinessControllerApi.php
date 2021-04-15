<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\BusinessRequest;
use App\Models\business;
use App\Models\user;
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
    public function index()
    {
        return business::get();
    }


    public function register(BusinessRequest $request)
    {
        $business = business::create([
            'bussiness_name'=>$request->bussiness_name,
            'nit'=>$request->nit,
            'legal_name'=>$request->legal_name,
            'constitution_date'=>$request->cdate,
            'tellephone1'=>$request->tellephone1,
            'tellephone2'=>$request->tellephone2,
            'mail'=>$request->mail,
            'member_remaining'=>carbon::now()->addMonth(),
            'fk_economic_sector_id'=>$request->esector,
            'fk_municipality_id'=>$request->fk_municipality_id
        ]);

        user::where('id',$request->id)->update(['fk_business_id'=>$business->id,'is_admin'=>3]);

        return response()->json(compact('business'),201);
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

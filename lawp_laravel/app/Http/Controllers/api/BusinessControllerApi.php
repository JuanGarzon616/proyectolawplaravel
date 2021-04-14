<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\BusinessRequest;
use App\Models\business;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;

class BusinessControllerApi extends Controller
{
    public function index()
    {
        return business::get();
    }

    public function create()
    {
        //
    }

    public function store(BusinessRequest $request)
    {
        return $business = business::create([
            'bussiness_name'=>$request->bussiness_name,
            'nit'=>$request->nit,
            'name'=>$request->name,
            'tellephone1'=>$request->tellephone1,
            'tellephone2'=>$request->tellephone2,
            'mail'=>$request->mail,
            'password'=>Hash::make($request->paswword),
            'member_remaining'=>carbon::now()->addMonth(),
            'fk_economic_sector_id'=>$request->esector,
            'fk_municipality_id'=>$request->fk_municipality_id,
            /*'created_at'=>$request->created_at,
            'updated_at'=>$request->updated_at*/

        ]);

        /*$token = JWTAuth::fromUser($user);

        return response()->json(compact('business','token'),201);*/
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

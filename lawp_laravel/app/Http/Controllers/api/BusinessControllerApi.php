<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\BusinessRequest;
use App\Http\Requests\BusinessUpdateRequest;
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
    public function selectBusi(){
        return business::select('id','bussiness_name','mail')->get();

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

        user::where('id',$request->id)->update(['fk_business_id'=>$business->id,'is_admin'=>2]);

        return response()->json(compact('business'),201);
    }

    public function show($id)
    {
        return business::find($id);
    }

    public function update(BusinessUpdateRequest $request, $id)
    {
        $update = business::find($id)->update([
            'tellephone1'=>$request->tellephone1,
            'tellephone2'=>$request->tellephone2
        ]);

        $msg = 'Business Updated '.$update;

        return response()->json(compact('msg'));
    }

    public function destroy($id)
    {
        $delete = business::destroy($id);

        $msg = 'Business Deleted '.$delete;

        return response()->json(compact('msg'));
    }
}

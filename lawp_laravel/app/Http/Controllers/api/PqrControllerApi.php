<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PqrRequest;
use App\Models\attachment;
use App\Models\pqr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PqrControllerApi extends Controller
{

    public function index()
    {
        return pqr::get();
    }

    public function store(PqrRequest $request)
    {
        $pqr = pqr::create([
            'affair'=>$request->affair,
            'description'=>$request->description,
            'date'=>$request->date,
            'fk_user_id'=> $request->fk_user_id,
            'fk_bussiness_id'=>$request->fk_bussiness_id
        ]);

        if($request->attachment){

            foreach ($request->attachment as $adjunto){

                //dd($adjunto['archive']->getRealPath());
                //dd($adjunto['archive']->store('public/files'));
                $name = $adjunto['archive']->getClientOriginalName();
                $adjunto['archive']->move('storage/files',$name);

                $adj = attachment::create([
                    'url'=>$adjunto['url'],
                    'archive'=>'http://127.0.0.1:8000/storage/files/'.$name,
                    'fk_pqr_id'=>$pqr['id']
                ]);
            }

            return response()->json(compact('pqr','adj'));
        }

        return response()->json(compact('pqr'));
    }

    public function showForUser($id)
    {
        return pqr::where('fk_user_id',$id)->get();
    }

    public function showForBus($id)
    {
        return pqr::where('fk_bussiness_id',$id)->get();
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
/*
 *
 {

    "affair": "prueba",
    "description":"<h1>holaprueba</h1>",
    "date":"2021/04/15",
    "fk_user_id": 1,
    "fk_bussiness_id": 1,
    "attachment": [{
        "url": "ho568lakase.com",
        "archive": null
    },{
        "url": "aa",
        "archive": null
    },{
        "url": "23e.com",
        "archive": null
    }]
}*/

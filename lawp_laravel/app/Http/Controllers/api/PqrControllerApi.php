<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PqrRequest;
use App\Models\attachment;
use App\Models\pqr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PqrControllerApi extends Controller
{

    public function index()
    {
        return pqr::get();
    }

    public function store(PqrRequest $request)
    {
        $pqr = pqr::create([
            'affair' => $request->affair,
            'description' => $request->description,
            'date' => $request->date,
            'fk_user_id' => $request->fk_user_id,
            'fk_bussiness_id' => $request->fk_bussiness_id
        ]);

        if ($request->attachment) {

            foreach ($request->attachment as $adjunto) {

                $name = 'Adjunto '.Str::random(50) . '.' . $adjunto['archive']->getClientOriginalExtension();
                $adjunto['archive']->move('storage/files', $name);

                $adj = attachment::create([
                    'url' => $adjunto['url'],
                    'archive' => 'http://127.0.0.1:8000/storage/files/' . $name,
                    'fk_pqr_id' => $pqr['id']
                ]);
            }

            return response()->json(compact('pqr', 'adj'));
        }

        return response()->json(compact('pqr'));
    }

    public function showForUser($id)
    {
        return pqr::with('attachments')->with('responses')->where('fk_user_id', $id)->orderBy('created_at','DESC')->get();
    }
    public function selectUserAffair(Request $request){
        return pqr::with('attachments')->with('responses')->where([
            ['fk_user_id', $request->id],
            ['affair','like',$request->name.'%']
        ])->get();
    }

    public function showForBus($id)
    {
        return pqr::with('attachments')->with('responses')->where('fk_bussiness_id', $id)->orderBy('created_at','DESC')->get();
    }

    public function update(Request $request, $id)
    {
        //dd($request->status);
        //return pqr::find($request->id)->update(['fk_status_id'=>$request->status]);
        return pqr::where('id', $id)->update(['fk_status_id' => $request->status]);
    }

    public function destroy($id)
    {
        return pqr::destroy($id);
    }
}

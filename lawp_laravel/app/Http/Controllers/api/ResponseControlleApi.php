<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ResponseRequest;
use App\Models\attachment;
use App\Models\response;
use Illuminate\Support\Str;

class ResponseControlleApi extends Controller
{

    public function index()
    {
        return response::get();
    }

    public function store(ResponseRequest $request)
    {
        $rpn = response::create([
            'response_pqr'=>$request->response,
            'fk_pqr_id'=>$request->pqrid
        ]);

        if($request->attachment) {

            foreach ($request->attachment as $adjunto) {

                $name = Str::random(50).'.'.$adjunto['archive']->getClientOriginalExtension();
                $adjunto['archive']->move('storage/files', $name);

                $adj = attachment::create([
                    'url' => $adjunto['url'],
                    'archive' => 'http://127.0.0.1:8000/storage/files/'.$name,
                    'fk_response_id' => $rpn->id
                ]);
            }
        }

        return response()->json(compact('rpn','adj'));
    }

    public function show($id)
    {
        return response::where('fk_pqr_id', $id)->get();
    }

}

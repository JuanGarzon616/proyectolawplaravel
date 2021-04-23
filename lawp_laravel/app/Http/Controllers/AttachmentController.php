<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\attachment;

class AttachmentController extends Controller
{
    public function index()
    {
        $this->attachment=attachment::get();
        //return view();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->attachment=attachment::create($request->all());
        //return redirect()->route('')->with('status','se ha guardado el adjunto.');
    }

    public function show($id)
    {
        $this->attachment=attachment::find($id);
    }

    public function edit($id)
    {
        //
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

<?php

namespace App\Http\Controllers;

use App\Models\Penitipan;
use Illuminate\Http\Request;

class PenitipanController extends Controller
{

    public function index()
    {

        $penitipan = Penitipan::all();
        return view('penitipan.penitipan-index',compact('penitipan'));
    }

    public function create()
    {
        return view('penitipan.penitipan-create');
    }

    public function Store(Request $request)
    {
        Penitipan::create($request->all());

        return redirect()->route('penitipan');
    }
    public function edit($id)
    {
        $penitipan = Penitipan::find($id);

        return view('penitipan.penitipan-edit',compact('penitipan'));
    }
    public function update(Request $request,$id)
    {
        $penitipan = Penitipan::find($id);

        $penitipan->update($request->all());


        return redirect()->route('penitipan');
    }
    public function delete($id)
    {
        $penitipan = Penitipan::find($id);
        $penitipan->delete();

        return redirect()->route('penitipan');
    }
}

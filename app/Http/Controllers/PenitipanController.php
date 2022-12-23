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

    public function edit($id)
    {

    }
    public function update(Request $request,$id)
    {

    }
    public function delete($id)
    {

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VienPhi;

class VienPhiController extends Controller
{
    public function getdanhsach()
    {
        $vienphis = VienPhi::all();
        return view('vienphi.danhsach',compact('vienphis'));
    }

    public function postthem(Request $req){
        dd($req->all());
    }
}

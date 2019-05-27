<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GiuongBenh;
use App\PhongBenh;

class AjaxController extends Controller
{
    public function getgiuongbenh(Request $request){
        $msg = '';

       $giuongbenh = GiuongBenh::where('PhongBenh_id',$request->PhongBenh_id)->get();

       foreach($giuongbenh as $gb)
       {
           $msg = $msg.'<option value="'.$gb->id.'"">'.$gb->tenGiuongBenh.'</option>';
       }
       return $msg;
   }
}

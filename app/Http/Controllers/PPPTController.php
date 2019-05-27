<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PhuongPhapPhauThuat;

class PPPTController extends Controller
{
    public function getdanhsach()
    {
        $pppt = PhuongPhapPhauThuat::all();
        return view('phuongphapphauthuat.danhsach',compact('pppt'));
    }
    public function getthem()
    {
        return view('phuongphapphauthuat.them');
    }
    public function postthem(Request $request)
    {
        $pppt = new PhuongPhapPhauThuat;
        $this->validate($request,[
            'tenPP'=>'required|min:3|max:100',
        ],
        [
            'tenPP.required'=>'Bạn chưa nhập tên loại sản phẩm',
            'tenPP.min'=>'Tên thể loại có độ dài từ 3 đến 100 ký tự',
            'tenPP.max'=>'Tên thể loại có độ dài từ 3 đến 100 ký tự',
        ]);
        $pppt->tenPP = $request->tenPP;
        $pppt->ghiChu = $request->ghiChu;
        $pppt->save();
        return redirect('admin/pppt/danhsach')->with('message','Thêm thành công');
    }
    public function getsua($id)
    {
        $pppt = PhuongPhapPhauThuat::find($id);
        return view('phuongphapphauthuat.sua',compact('pppt'));
    }
    public function postsua(Request $request,$id)
    {
        $pppt = PhuongPhapPhauThuat::find($id);
        $this->validate($request,[
            'tenPP'=>'required|min:3|max:100',
        ],
        [
            'tenPP.required'=>'Bạn chưa nhập tên loại sản phẩm',
            'tenPP.min'=>'Tên thể loại có độ dài từ 3 đến 100 ký tự',
            'tenPP.max'=>'Tên thể loại có độ dài từ 3 đến 100 ký tự',
        ]);
        $pppt->tenPP = $request->tenPP;
        $pppt->ghiChu = $request->ghiChu;
        $pppt->save();
        return redirect('admin/pppt/danhsach')->with('message','Sửa thành công');
    }
    public function getxoa($id)
    {
        $pppt = PhuongPhapPhauThuat::find($id);
        $pppt->delete();
        return redirect('admin/pppt/danhsach')->with('message','Xóa thành công');
    }
}

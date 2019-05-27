<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChucVu;

class ChucVuController extends Controller
{
    public function getdanhsach()
    {
        $chucvus = ChucVu::all();
        return view('chucvu.danhsach',compact('chucvus'));
    }
    public function getthem()
    {
        return view('chucvu.them');
    }
    public function postthem(Request $request)
    {
        $chucvu = new ChucVu;
        $this->validate($request,[
            'tenChucVu'=>'required|min:3|max:100',
        ],
        [
            'tenChucVu.required'=>'Bạn chưa nhập tên chức vụ',
            'tenChucVu.min'=>'Tên chức vụ có độ dài từ 3 đến 100 ký tự',
            'tenChucVu.max'=>'Tên chức vụ có độ dài từ 3 đến 100 ký tự',
        ]);
        $chucvu->tenChucVu = $request->tenChucVu;
        $chucvu->save();
        return redirect('admin/chucvu/danhsach')->with('message','Thêm thành công chức vụ');
    }
    public function getsua($id)
    {
        $chucvu = ChucVu::find($id);
        return view('chucvu.sua',compact('chucvu'));
    }
    public function postsua(Request $request,$id)
    {
        $chucvu = ChucVu::find($id);
        $this->validate($request,[
            'tenChucVu'=>'required|min:3|max:100',
        ],
        [
            'tenChucVu.required'=>'Bạn chưa nhập tên chức vụ',
            'tenChucVu.min'=>'Tên chức vụ có độ dài từ 3 đến 100 ký tự',
            'tenChucVu.max'=>'Tên chức vụ có độ dài từ 3 đến 100 ký tự',
        ]);
        $chucvu->tenChucVu = $request->tenChucVu;
        $chucvu->save();
        return redirect('admin/chucvu/danhsach')->with('message','Sửa thành công chức vụ');
    }
    public function getxoa($id)
    {
        $chucvu = ChucVu::find($id);
        $chucvu->delete();
        return redirect('admin/chucvu/danhsach')->with('message','Xóa thành công chức vụ');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PhongBenh;

class PhongBenhController extends Controller
{
    public function getdanhsach()
    {
        $phongbenh = PhongBenh::all();
        return view('phongbenh.danhsach',compact('phongbenh'));
    }
    public function getthem()
    {
        return view('phongbenh.them');
    }
    public function postthem(Request $request)
    {
        $phongbenh = new PhongBenh;
        $this->validate($request,[
            'tenPhong'=>'required|min:3|max:100',
        ],
        [
            'tenPhong.required'=>'Bạn chưa nhập tên loại sản phẩm',
            'tenPhong.min'=>'Tên thể loại có độ dài từ 3 đến 100 ký tự',
            'tenPhong.max'=>'Tên thể loại có độ dài từ 3 đến 100 ký tự',
        ]);
        $phongbenh->tenPhong = $request->tenPhong;
        $phongbenh->save();
        return redirect('admin/phongbenh/danhsach')->with('message','Thêm thành công phòng bệnh');
    }
    public function getsua($id)
    {
        $phongbenh = PhongBenh::find($id);
        return view('phongbenh.sua',compact('phongbenh'));
    }
    public function postsua(Request $request,$id)
    {
        $phongbenh = PhongBenh::find($id);
        $this->validate($request,[
            'tenPhong'=>'required|min:3|max:100',
        ],
        [
            'tenPhong.required'=>'Bạn chưa nhập tên loại sản phẩm',
            'tenPhong.min'=>'Tên thể loại có độ dài từ 3 đến 100 ký tự',
            'tenPhong.max'=>'Tên thể loại có độ dài từ 3 đến 100 ký tự',
        ]);
        $phongbenh->tenPhong = $request->tenPhong;
        $phongbenh->save();
        return redirect('admin/phongbenh/danhsach')->with('message','Sửa thành công phòng bệnh');
    }
    public function getxoa($id)
    {
        $phongbenh = PhongBenh::find($id);
        $phongbenh->delete();
        return redirect('admin/phongbenh/danhsach')->with('message','Xóa thành công phòng bệnh');
    }
}

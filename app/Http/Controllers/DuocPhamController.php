<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DuocPham;

class DuocPhamController extends Controller
{
    public function getdanhsach()
    {
        $duocpham = DuocPham::all();
        return view('duocpham.danhsach',compact('duocpham'));
    }
    public function getthem()
    {
        return view('duocpham.them');
    }
    public function postthem(Request $request)
    {
        $duocpham = new DuocPham;
        $this->validate($request,[
            'tenDuocPham'=>'required|min:3|max:100',
        ],
        [
            'tenDuocPham.required'=>'Bạn chưa nhập tên loại sản phẩm',
            'tenDuocPham.min'=>'Tên thể loại có độ dài từ 3 đến 100 ký tự',
            'tenDuocPham.max'=>'Tên thể loại có độ dài từ 3 đến 100 ký tự',
        ]);
        $duocpham->tenDuocPham = $request->tenDuocPham;
        $duocpham->donGia = $request->donGia;
        $duocpham->hanSuDung = $request->hanSuDung;
        $duocpham->ngaySanXuat = $request->ngaySanXuat;
        $duocpham->nuocSanXuat = $request->nuocSanXuat;
        $duocpham->save();
        return redirect('admin/duocpham/danhsach')->with('message','Thêm thành công dược phẩm');
    }
    public function getsua($id)
    {
        $duocpham = DuocPham::find($id);
        return view('duocpham.sua',compact('duocpham'));
    }
    public function postsua(Request $request,$id)
    {
        $duocpham = DuocPham::find($id);
        $this->validate($request,[
            'tenDuocPham'=>'required|min:3|max:100',
        ],
        [
            'tenDuocPham.required'=>'Bạn chưa nhập tên loại sản phẩm',
            'tenDuocPham.min'=>'Tên thể loại có độ dài từ 3 đến 100 ký tự',
            'tenDuocPham.max'=>'Tên thể loại có độ dài từ 3 đến 100 ký tự',
        ]);
        $duocpham->tenDuocPham = $request->tenDuocPham;
        $duocpham->donGia = $request->donGia;
        $duocpham->hanSudung = $request->hanSudung;
        $duocpham->ngaySanXuat = $request->ngaySanXuat;
        $duocpham->nuocSanXuat = $request->nuocSanXuat;
        $duocpham->save();
        return redirect('admin/duocpham/danhsach')->with('message','Sửa thành công dược phẩm');
    }
    public function getxoa($id)
    {
        $duocpham = DuocPham::find($id);
        $duocpham->delete();
        return redirect('admin/duocpham/danhsach')->with('message','Xóa thành công dược phẩm');
    }
}

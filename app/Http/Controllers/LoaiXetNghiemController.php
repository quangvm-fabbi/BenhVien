<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoaiXetNghiem;

class LoaiXetNghiemController extends Controller
{
    public function getdanhsach()
    {
        $loaixetnghiem = LoaiXetNghiem::all();
        return view('loaixetnghiem.danhsach',compact('loaixetnghiem'));
    }
    public function getthem()
    {
        return view('loaixetnghiem.them');
    }
    public function postthem(Request $request)
    {
        $loaixetnghiem = new LoaiXetNghiem;
        $this->validate($request,[
            'tenLoai'=>'required|min:3|max:100',
        ],
        [
            'tenLoai.required'=>'Bạn chưa nhập tên loại sản phẩm',
            'tenLoai.min'=>'Tên thể loại có độ dài từ 3 đến 100 ký tự',
            'tenLoai.max'=>'Tên thể loại có độ dài từ 3 đến 100 ký tự',
        ]);
        $loaixetnghiem->tenLoai = $request->tenLoai;
        $loaixetnghiem->gia = $request->gia;
        $loaixetnghiem->save();
        return redirect('admin/loaixetnghiem/danhsach')->with('message','Thêm thành công loại xét nghiệm');
    }
    public function getsua($id)
    {
        $loaixetnghiem = LoaiXetNghiem::find($id);
        return view('loaixetnghiem.sua',compact('loaixetnghiem'));
    }
    public function postsua(Request $request,$id)
    {
        $loaixetnghiem = LoaiXetNghiem::find($id);
        $this->validate($request,[
            'tenLoai'=>'required|min:3|max:100',
        ],
        [
            'tenLoai.required'=>'Bạn chưa nhập tên loại sản phẩm',
            'tenLoai.min'=>'Tên thể loại có độ dài từ 3 đến 100 ký tự',
            'tenLoai.max'=>'Tên thể loại có độ dài từ 3 đến 100 ký tự',
        ]);
        $loaixetnghiem->tenLoai = $request->tenLoai;
        $loaixetnghiem->gia = $request->gia;
        $loaixetnghiem->save();
        return redirect('admin/loaixetnghiem/danhsach')->with('message','Sửa thành công loại xét nghiệm');
    }
    public function getxoa($id)
    {
        $loaixetnghiem = LoaiXetNghiem::find($id);
        $loaixetnghiem->delete();
        return redirect('admin/loaixetnghiem/danhsach')->with('message','Xóa thành công loại xét nghiệm');
    }
}

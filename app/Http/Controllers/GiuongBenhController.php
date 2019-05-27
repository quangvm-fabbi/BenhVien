<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GiuongBenh;
use App\PhongBenh;
use Illuminate\Contracts\Validation\Validator;

class GiuongBenhController extends Controller
{
    public function getdanhsach()
    {
        $giuongbenh = GiuongBenh::all();
        return view('giuongbenh.danhsach',compact('giuongbenh'));
    }
    public function getthem()
    {
        $phongbenh = PhongBenh::all();
        return view('giuongbenh.them',compact('phongbenh'));
    }
    public function postthem(Request $request)
    {
        
        $this->validate($request,[
            'tenGiuongBenh'=>'required|min:1|max:100',
        ],
        [
            'tenGiuongBenh.required'=>'Bạn chưa nhập tên loại sản phẩm',
            'tenGiuongBenh.min'=>'Tên thể loại có độ dài từ 3 đến 100 ký tự',
            'tenGiuongBenh.max'=>'Tên thể loại có độ dài từ 3 đến 100 ký tự',
        ]);
        $giuongbenh = new GiuongBenh;
        $giuongbenh->tenGiuongBenh = $request->tenGiuongBenh;
        $giuongbenh->trangThai = $request->trangThai;
        $giuongbenh->gia = $request->gia;
        $giuongbenh->ngayNhan = $request->ngayNhan;
        $giuongbenh->PhongBenh_id = $request->PhongBenh_id;
        $giuongbenh->save();
        return redirect('admin/giuongbenh/danhsach')->with('message','Thêm thành công giường bệnh');
    }
    public function getsua($id)
    {
        $phongbenh = PhongBenh::all();
        $giuongbenh = GiuongBenh::find($id);
        return view('giuongbenh.sua',compact('giuongbenh','phongbenh'));
    }
    public function postsua(Request $request,$id)
    {
        $giuongbenh = GiuongBenh::find($id);
        $this->validate($request,[
            'tenGiuongBenh'=>'required|min:1|max:100',
        ],
        [
            'tenGiuongBenh.required'=>'Bạn chưa nhập tên loại sản phẩm',
            'tenGiuongBenh.min'=>'Tên thể loại có độ dài từ 3 đến 100 ký tự',
            'tenGiuongBenh.max'=>'Tên thể loại có độ dài từ 3 đến 100 ký tự',
        ]);
        $giuongbenh->tenGiuongBenh = $request->tenGiuongBenh;
        $giuongbenh->trangThai = $request->trangThai;
        $giuongbenh->gia = $request->gia;
        $giuongbenh->ngayNhan = $request->ngayNhan;
        $giuongbenh->PhongBenh_id = $request->PhongBenh_id;
        $giuongbenh->save();
        return redirect('admin/giuongbenh/danhsach')->with('message','Sửa thành công giường bệnh');
    }
    public function getxoa($id)
    {
        $loaixetnghiem = LoaiXetNghiem::find($id);
        $loaixetnghiem->delete();
        return redirect('admin/loaixetnghiem/danhsach')->with('message','Xóa thành công loại xét nghiệm');
    }
}

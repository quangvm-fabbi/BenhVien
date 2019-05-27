<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KetQuaKhamSucKhoe;
use App\BenhNhan;
use App\LoaiXetNghiem;

class KQYLController extends Controller
{
    public function getdanhsach()
    {
        $kq = KetQuaKhamSucKhoe::all();
        return view('ketquaylenh.danhsach',compact('kq'));
    }
    public function getthem()
    {
        $loaixetnghiem = LoaiXetNghiem::all();
        $benhnhan = BenhNhan::all();
        return view('ketquaylenh.them',compact('benhnhan','loaixetnghiem'));
    }
    public function postthem(Request $request)
    {
        $kq = new KetQuaKhamSucKhoe;
        $this->validate($request,[
            'ketQua'=>'required|min:3|max:100',
        ],
        [
            'ketQua.required'=>'Bạn chưa nhập tên loại sản phẩm',
            'ketQua.min'=>'Tên thể loại có độ dài từ 3 đến 100 ký tự',
            'ketQua.max'=>'Tên thể loại có độ dài từ 3 đến 100 ký tự',
        ]);
        $kq->ketQua = $request->ketQua;
        $kq->ngayXetNghiem = $request->ngayXetNghiem;
        $kq->loaiXetNghiem_id = $request->loaiXetNghiem_id;
        $kq->BenhNhan_idBenhNhan = $request->BenhNhan_idBenhNhan;
        $kq->NhanVien_id = $request->NhanVien_id;
        $kq->save();
        return redirect('admin/kq/danhsach')->with('message','Thêm thành công');
    }
    public function getsua($id)
    {
        $benhnhan = BenhNhan::all();
        $loaixetnghiem = LoaiXetNghiem::all();
        $ttrv = KetQuaKhamSucKhoe::find($id);
        return view('ketquaylenh.sua',compact('ttrv','benhnhan','loaixetnghiem'));
    }
    public function postsua(Request $request,$id)
    {
        $kq = KetQuaKhamSucKhoe::find($id);
        $this->validate($request,[
            'ketQua'=>'required|min:3|max:100',
        ],
        [
            'ketQua.required'=>'Bạn chưa nhập tên loại sản phẩm',
            'ketQua.min'=>'Tên thể loại có độ dài từ 3 đến 100 ký tự',
            'ketQua.max'=>'Tên thể loại có độ dài từ 3 đến 100 ký tự',
        ]);
        $kq->ketQua = $request->ketQua;
        $kq->ngayXetNghiem = $request->ngayXetNghiem;
        $kq->loaiXetNghiem_id = $request->loaiXetNghiem_id;
        $kq->BenhNhan_idBenhNhan = $request->BenhNhan_idBenhNhan;
        $kq->NhanVien_id = $request->NhanVien_id;
        $kq->save();
        return redirect('admin/kq/danhsach')->with('message','Sửa thành công');
    }
    public function getxoa($id)
    {
        $ttrv = KetQuaKhamSucKhoe::find($id);
        $ttrv->delete();
        return redirect('admin/kq/danhsach')->with('message','Xóa thành công ');
    }
}

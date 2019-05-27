<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BenhNhan;
use App\GiuongBenh;
use App\PhongBenh;
use App\BenhAn;
use App\KetQuaKhamSucKhoe;
use App\PhacDo;

class BenhNhanController extends Controller
{
    public function getdanhsach()
    {
        $benhnhan = benhnhan::all();
        return view('benhnhan.danhsach',compact('benhnhan'));
    }
    public function getthem()
    {
        $phongbenh = PhongBenh::all();
        $giuongbenh = GiuongBenh::all();
        return view('benhnhan.them',compact('phongbenh','giuongbenh'));
    }
    public function postthem(Request $request)
    {
        $benhnhan = new BenhNhan;
        $this->validate($request,[
            'hoTen'=>'required|min:3|max:100',
        ],
        [
            'hoTen.required'=>'Bạn chưa nhập tên loại sản phẩm',
            'hoTen.min'=>'Tên thể loại có độ dài từ 3 đến 100 ký tự',
            'hoTen.max'=>'Tên thể loại có độ dài từ 3 đến 100 ký tự',
        ]);
        $benhnhan->hoTen = $request->hoTen;
        $benhnhan->diaChi = $request->diaChi;
        $benhnhan->ngaySinh = $request->ngaySinh;
        $benhnhan->ngayVao = $request->ngayVao;
        $benhnhan->khoaVao = $request->khoaVao;
        $benhnhan->khoaDieuTri = $request->khoaDieuTri;
        $benhnhan->soDienThoai = $request->soDienThoai;
        $benhnhan->ngheNghiep = $request->ngheNghiep;
        $benhnhan->ngayVaoDT = $request->ngayVaoDT;
        $benhnhan->GiuongBenh_id = $request->GiuongBenh_id;
        if($request->hasFile('hinhAnh')){
            $file = $request->file('hinhAnh');
            $duoi = $file->getClientOriginalExtension();
                if($duoi != 'jpg' && $duoi != 'png'){
                    return view('admin/benhnhan/them')->with('loi',' Đuôi ảnh không hợp lệ');
                }
            $name = $file->getClientOriginalName();
            $hinhAnh = str_random(4)."_".$name;
            while (file_exists("uploads".$hinhAnh)) {
                $hinhAnh = str_random(4)."_".$name;
            }
            $file->move('uploads', $hinhAnh);
            $benhnhan->hinhAnh = $hinhAnh;
        }
        else{
            $benhnhan->hinhAnh = "";
        }
        $benhnhan->save();
        return redirect('admin/benhnhan/danhsach')->with('message','Thêm thành công bệnh nhân');
    }
    public function getsua($id)
    {
        $benhnhan = BenhNhan::find($id);
        $phongbenh = PhongBenh::all();
        $giuongbenh = GiuongBenh::all();
        return view('benhnhan.sua',compact('benhnhan','phongbenh','giuongbenh'));
    }
    public function postsua(Request $request,$id)
    {
        $benhnhan = BenhNhan::find($id);
        $this->validate($request,[
            'hoTen'=>'required|min:3|max:100',
        ],
        [
            'hoTen.required'=>'Bạn chưa nhập tên loại sản phẩm',
            'hoTen.min'=>'Tên thể loại có độ dài từ 3 đến 100 ký tự',
            'hoTen.max'=>'Tên thể loại có độ dài từ 3 đến 100 ký tự',
        ]);
        $benhnhan->hoTen = $request->hoTen;
        $benhnhan->diaChi = $request->diaChi;
        $benhnhan->ngaySinh = $request->ngaySinh;
        $benhnhan->ngayVao = $request->ngayVao;
        $benhnhan->khoaVao = $request->khoaVao;
        $benhnhan->khoaDieuTri = $request->khoaDieuTri;
        $benhnhan->soDienThoai = $request->soDienThoai;
        $benhnhan->ngheNghiep = $request->ngheNghiep;
        $benhnhan->ngayVaoDT = $request->ngayVaoDT;
        $benhnhan->GiuongBenh_id = $request->GiuongBenh_id;
        if($request->hasFile('hinhAnh')){
            $file = $request->file('hinhAnh');
            $duoi = $file->getClientOriginalExtension();
                if($duoi != 'jpg' && $duoi != 'png'){
                    return view('admin/benhnhan/them')->with('loi',' Đuôi ảnh không hợp lệ');
                }
            $name = $file->getClientOriginalName();
            $hinhAnh = str_random(4)."_".$name;
            while (file_exists("uploads".$hinhAnh)) {
                $hinhAnh = str_random(4)."_".$name;
            }
            $file->move('uploads', $hinhAnh);
            $benhnhan->hinhAnh = $hinhAnh;
        }
        else{
            $benhnhan->hinhAnh = "";
        }
        $benhnhan->save();
        return redirect('admin/benhnhan/danhsach')->with('message','Sửa thành công bệnh nhân');
    }
    public function getxoa($id)
    {
        $duocpham = DuocPham::find($id);
        $duocpham->delete();
        return redirect('admin/duocpham/danhsach')->with('message','Xóa thành công bệnh nhân');
    }
    public function getchitiet(Request $request,$id)
    { 
        $benhan = BenhAn::find($id);
        $benhnhan = BenhAn::where('BenhNhan_idBenhNhan',$request->id)->first();
        $kq = KetQuaKhamSucKhoe::where('BenhNhan_idBenhNhan',$request->id)->get();
    	return view('benhnhan.chitiet',compact('benhnhan','kq','benhan'));
    }
}

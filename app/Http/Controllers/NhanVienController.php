<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChucVu;
use App\NhanVien;

class NhanVienController extends Controller
{
    public function getdanhsach()
    {
        $nhanviens = NhanVien::all();
        $chucvus = ChucVu::all();
        return view('nhanvien.danhsach',compact('nhanviens', 'chucvus'));
    }
    public function getthem()
    {
        $chucvus = ChucVu::all();
        return view('nhanvien.them', compact('chucvus'));
    }
    public function postthem(Request $request)
    {
        $nhanVien = new NhanVien;
        $this->validate($request,[
            'ten'=>'required|min:3|max:100',
            'ngaySinh'=> 'required',
            'gioiTinh'=> 'required',
            'CMND'=> 'required|max:11',
            'diaChi'=> 'required',
            'soDienThoai'=> 'required',
            'email'=> 'required',
            'chucVu'=> 'required',
        ]);
        
        $nhanVien->ten = $request->ten;
        $nhanVien->ngaySinh = $request->ngaySinh;
        $nhanVien->gioiTinh = $request->gioiTinh;
        $nhanVien->CMND = $request->CMND;
        $nhanVien->diaChi = $request->diaChi;
        $nhanVien->soDienThoai = $request->soDienThoai;
        $nhanVien->email = $request->email;
        $nhanVien->chucVu = $request->chucVu;

        if($request->hasFile('hinhAnh')){
            $file = $request->file('hinhAnh');
            $duoi = $file->getClientOriginalExtension();
                if($duoi != 'jpg' && $duoi != 'png'){
                    return view('admin/nhanvien/them')->with('loi',' Đuôi ảnh không hợp lệ');
                }
            $name = $file->getClientOriginalName();
            $hinhAnh = str_random(4)."_".$name;
            while (file_exists("uploads".$hinhAnh)) {
                $hinhAnh = str_random(4)."_".$name;
            }
            $file->move('uploads', $hinhAnh);
            $nhanVien->hinhAnh = $hinhAnh;
        }
        else{
            $nhanVien->hinhAnh = "";
        }

        $nhanVien->save();
        return redirect('admin/nhanvien/danhsach')->with('message','Thêm thành công nhân viên');
    }
    public function getsua($id)
    {
        $chucvus = ChucVu::all();
        $nhanvien = NhanVien::find($id);
        return view('nhanvien.sua',compact('nhanvien', 'chucvus'));
    }
    public function postsua(Request $request,$id)
    {
        $nhanVien = NhanVien::find($id);
        $this->validate($request,[
            'ten'=>'required|min:3|max:100',
            'ngaySinh'=> 'required',
            'gioiTinh'=> 'required',
            'CMND'=> 'required|max:11',
            'diaChi'=> 'required',
            'soDienThoai'=> 'required',
            'email'=> 'required',
            'chucVu'=> 'required',
        ]);
        
        $nhanVien->ten = $request->ten;
        $nhanVien->ngaySinh = $request->ngaySinh;
        $nhanVien->gioiTinh = $request->gioiTinh;
        $nhanVien->CMND = $request->CMND;
        $nhanVien->diaChi = $request->diaChi;
        $nhanVien->soDienThoai = $request->soDienThoai;
        $nhanVien->email = $request->email;
        $nhanVien->chucVu = $request->chucVu;

        if($request->hasFile('hinhAnh')){
            $file = $request->file('hinhAnh');
            $duoi = $file->getClientOriginalExtension();
                if($duoi != 'jpg' && $duoi != 'png'){
                    return view('admin/nhanvien/them')->with('loi',' Đuôi ảnh không hợp lệ');
                }
            $name = $file->getClientOriginalName();
            $hinhAnh = str_random(4)."_".$name;
            while (file_exists("uploads".$hinhAnh)) {
                $hinhAnh = str_random(4)."_".$name;
            }
            $file->move('uploads', $hinhAnh);
            $nhanVien->hinhAnh = $hinhAnh;
        }
        else{
            $nhanVien->hinhAnh = "";
        }

        $nhanVien->save();

        return redirect('admin/nhanvien/danhsach')->with('message','Sửa thành công nhân viên');
    }
    public function getxoa($id)
    {
        $nhanvien = NhanVien::find($id);
        $nhanvien->delete();
        return redirect('admin/nhanvien/danhsach')->with('message','Xóa thành công nhân viên');
    }
}

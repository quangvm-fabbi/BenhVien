<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BenhAn;
use App\BenhNhan;
use App\PhuongPhapPhauThuat;
use App\DuocPham;
use App\PhacDo;
use App\NhanVien;
use App\ThamGia;
use Illuminate\Support\Facades\Input;

class BenhAnController extends Controller
{
    public function getdanhsach()
    {
        $benhan = BenhAn::all();
        return view('benhan.danhsach',compact('benhan'));
    }
    public function getthem()
    {
        $benhnhan = BenhNhan::all();
        $pppt = PhuongPhapPhauThuat::all();
        $nhanviens = NhanVien::all();
        return view('benhan.them',compact('benhnhan','pppt','nhanviens'));
    }
    public function postthem(Request $request)
    {
        $benhan = new BenhAn;
        $this->validate($request,[
            'ghiChu'=>'required|min:3|max:100',
        ],
        [
            'ghiChu.required'=>'Bạn chưa nhập tên loại sản phẩm',
            'ghiChu.min'=>'Tên thể loại có độ dài từ 3 đến 100 ký tự',
            'ghiChu.max'=>'Tên thể loại có độ dài từ 3 đến 100 ký tự',
        ]);
        $benhan->ngayVao = $request->ngayVao;
        $benhan->ngayRa = $request->ngayRa;
        $benhan->ghiChu = $request->ghiChu;
        $benhan->ketQuaDieuTri = $request->ketQuaDieuTri;
        $benhan->chuanDoan = $request->chuanDoan;
        $benhan->BenhNhan_idBenhNhan = $request->BenhNhan_idBenhNhan;
        $benhan->PhuongPhapPhauThuat_id = $request->PhuongPhapPhauThuat_id;
        $benhan->save();
        
        $thamgia = new ThamGia;
        $thamgia->vaiTro = $request->vaitro;
        $thamgia->BenhAn_id = $benhan->id;
        $thamgia->NhanVien_id = $request->NhanVien_id;
        $thamgia->save();
        
        $thamgia->save();
        

        return redirect('admin/benhan/danhsach')->with('message','Thêm thành công bệnh án');
    }
    public function getsua($id)
    {
        $pppt = PhuongPhapPhauThuat::all();
        $benhan = BenhAn::find($id);
        return view('benhan.sua',compact('benhan','pppt'));
    }
    public function postsua(Request $request,$id)
    {
        $benhan = BenhAn::find($id);
        $this->validate($request,[
            'ghiChu'=>'required|min:3|max:100',
        ],
        [
            'ghiChu.required'=>'Bạn chưa nhập tên loại sản phẩm',
            'ghiChu.min'=>'Tên thể loại có độ dài từ 3 đến 100 ký tự',
            'ghiChu.max'=>'Tên thể loại có độ dài từ 3 đến 100 ký tự',
        ]);
        $benhan->ngayVao = $request->ngayVao;
        $benhan->ngayRa = $request->ngayRa;
        $benhan->ghiChu = $request->ghiChu;
        $benhan->ketQuaDieuTri = $request->ketQuaDieuTri;
        $benhan->chuanDoan = $request->chuanDoan;
        $benhan->BenhNhan_idBenhNhan = $request->BenhNhan_idBenhNhan;
        $benhan->PhuongPhapPhauThuat_id = $request->PhuongPhapPhauThuat_id;
        $benhan->save();
        return redirect('admin/benhan/danhsach')->with('message','Sửa thành công bệnh án');
    }
    public function getthemphacdo($id)
    {
        $benhan = BenhAn::find($id);
        $duocpham = DuocPham::all();
        return view('phacdo.them',compact('benhan','duocpham'));
    }
    public function postthemphacdo(Request $request,$id)
    {
        $phacdo = new PhacDo;
        $this->validate($request,[
            'cachGiaiQuyet'=>'required|min:3|max:100',
        ],
        [
            'cachGiaiQuyet.required'=>'Bạn chưa nhập tên loại sản phẩm',
            'cachGiaiQuyet.min'=>'Tên thể loại có độ dài từ 3 đến 100 ký tự',
            'cachGiaiQuyet.max'=>'Tên thể loại có độ dài từ 3 đến 100 ký tự',
        ]);
        $phacdo->cachGiaiQuyet = $request->cachGiaiQuyet;
        $phacdo->ngayDieuTri = $request->ngayDieuTri;
        $phacdo->BenhAn_id = $request->BenhAn_id;
        $phacdo->save();
        $data1 = Input::get('duocpham');
        $phacdo = PhacDo::orderBy('id','desc')->first();
        $phacdo->duocpham()->attach($data1);
        return redirect('admin/benhan/danhsach')->with('message','Thêm thành công');
    }
    public function getxoa($id)
    {
        $benhan = BenhAn::find($id);
        $benhan->delete();
        return redirect('admin/benhan/danhsach')->with('message','Xóa thành công');
    }
    public function getchitiet(Request $request,$id)
    { 
        $phacdo = PhacDo::where('BenhAn_id',$request->id)->get();
    	return view('benhan.chitiet',compact('phacdo','duocpham'));
    }
}

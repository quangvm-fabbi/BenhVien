<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PhacDo;
use App\DuocPham_PhacDo;
use App\BenhAn;
use App\VienPhi;

class PhacDoController extends Controller
{
    public function getdanhsach()
    {
        $phacdos = PhacDo::all();
        return view('phacdo.danhsach',compact('phacdos'));
    }
    public function getthem()
    {
        return view('phongbenh.them');
    }
    public function postthem(Request $request)
    {
    
        $duocphams = $request->duocphams;
        $phacdo = new PhacDo;
        $this->validate($request,[
            'cachGiaiQuyet'=>'required',
            'ngayDieuTri'=>'required'
        ]);
        
        $phacdo->cachGiaiQuyet = $request->cachGiaiQuyet;
        $phacdo->ngayDieuTri = $request->ngayDieuTri;
        $phacdo->BenhAn_id = $request->BenhAn_id;
    
        $phacdo->save();

        foreach ($duocphams as $duocpham) {
            $duocpham_phacdo = new DuocPham_PhacDo;
        
            $duocpham_phacdo->PhacDo_id = $phacdo->id;
            $duocpham_phacdo->DuocPham_id = $duocpham;

            $duocpham_phacdo->save();
        }

        return redirect('admin/phongbenh/danhsach')->with('message','Thêm thành công');
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
    
    public function vienphi($id){
        $benhan = BenhAn::find($id);
        $ngayvao = date_create($benhan->ngayVao);
        $ngayra = date_create($benhan->ngayra);
        $songay = $ngayvao->diff($ngayra)->days;
        

        $tiengiuong = $benhan->benhnhan->giuongbenh->gia * $songay;
        $giuongbenh = $benhan->benhnhan->giuongbenh;
        $tienxetnhiem = $benhan->benhnhan->ketquakhamsuckhoe->loaixetnghiem->gia;
        $xetnghiem = $benhan->benhnhan->ketquakhamsuckhoe->loaixetnghiem;
        $tienthuoc = 0;
        
        foreach ($benhan->phacdo as $phacdo) {
            foreach ($phacdo->duocpham as $duocpham) {
                $tienthuoc += $duocpham->donGia;
            }
        }

        $vienphi = VienPhi::where('BenhAn_id', $benhan->id)->first();
        if (!$vienphi) {
            $vienphi = new VienPhi;
            $vienphi->gia = $tiengiuong + $tienxetnhiem + $tienthuoc;
            $vienphi->BenhAn_id = $benhan->id;
            $vienphi->NhanVien_id = 2; // Auth::id() khi login vào
            $vienphi->save();
        }
        

        return view('phacdo.vienphi',compact('benhan', 'vienphi', 'songay', 'giuongbenh', 'xetnghiem'));
    }
}

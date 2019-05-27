@include('layouts.header')
@include('layouts.dropdown')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Thêm bệnh án cho bệnh nhân</h4>
                            </div>
                            <div class="content">
                                <form action="{{route('postthemba')}}" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                        <div class="row">
                                            <div class="col-md-5">

                                            <div class="form-group">
                                                <label>Bệnh án</label>
                                            </div>

                                            <div class="form-group">
                                                    <label>Ngày vào</label>
                                                <input type="date" class="form-control" name="ngayVao">
                                            </div>
                                            <div class="form-group">
                                                    <label>Ngày ra</label>
                                                <input type="date" class="form-control" name="ngayRa">
                                            </div>
                                            <div class="form-group">
                                                    <label>Ghi chú</label>
                                                <input type="text" class="form-control" name="ghiChu">
                                            </div>
                                            <div class="form-group">
                                                    <label>Kết quả điều trị</label>
                                                <input type="text" class="form-control" name="ketQuaDieuTri">
                                            </div>
                                            <div class="form-group">
                                                    <label>Chuẩn đoán</label>
                                                <input type="text" class="form-control" name="chuanDoan">
                                            </div>
                                            <div class="form-group">
                                                <label>Bệnh nhân</label>
                                                <select class="form-control" name="BenhNhan_idBenhNhan" >
                                                @foreach($benhnhan as $bn)
                                                <option value="{{$bn->id}}">{{$bn->hoTen}}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Phương pháp phẫu thuật</label>
                                                <select class="form-control" name="PhuongPhapPhauThuat_id" >
                                                @foreach($pppt as $pt)
                                                <option value="{{$pt->id}}">{{$pt->tenPP}}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-5 col-md-offset-2">
                                            <div class="form-group">
                                                <label>Tham gia</label>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Bác sỹ tham gia</label>
                                                <select class="form-control" name="NhanVien_id" >
                                                @foreach($nhanviens as $nhanvien)
                                                <option value="{{$nhanvien->id}}">{{$nhanvien->ten}}</option>
                                                @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                    <label>Vai trò</label>
                                                <input type="text" class="form-control" name="vaitro">
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Thực hiện</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>


    </div>
</div>
@include('layouts.footer')
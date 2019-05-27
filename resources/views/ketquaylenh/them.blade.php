@include('layouts.header')
@include('layouts.dropdown')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Thêm thông kết quả y lệnh</h4>
                            </div>
                            <div class="content">
                                <form action="{{route('postthemttrv')}}" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                        <div class="row">
                                            <div class="col-md-5">
                                            <div class="form-group">
                                                    <label>Kết quả</label>
                                                <input type="text" class="form-control" name="ketQua">
                                            </div>
                                            <div class="form-group">
                                                    <label>Ngày xét nghiệm</label>
                                                <input type="date" class="form-control" name="ngayXetNghiem">
                                            </div>
                                            <div class="form-group">
                                                <label>Loại xét nghiệm</label>
                                                <select class="form-control" name="loaiXetNghiem_id" >
                                                @foreach($loaixetnghiem as $bn)
                                                <option value="{{$bn->id}}">{{$bn->tenLoai}}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                    <label>Người phụ trách</label>
                                                <input type="text" class="form-control" name="NhanVien_id">
                                            </div>
                                            <div class="form-group">
                                                <label>Tên bệnh nhân</label>
                                                <select class="form-control" name="BenhNhan_idBenhNhan" >
                                                @foreach($benhnhan as $bn)
                                                <option value="{{$bn->id}}">{{$bn->hoTen}}</option>
                                                @endforeach
                                                </select>
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
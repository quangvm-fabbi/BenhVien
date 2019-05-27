@include('layouts.header')
@include('layouts.dropdown')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Sửa chức vụ</h4>
                            </div>
                            <div class="content">
                                @if (count($errors) > 0)
                                    @foreach ($errors->all() as $error)
                                        <div class="alert alert-danger" role="alert">
                                            <strong>{{ $error }}</strong>
                                        </div>  
                                    @endforeach                                  
                                @endif
                                <form action="{{ route('postsuanv', ['id' => $nhanvien->id]) }}" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                    <div class="row">
                                        <div class="col-md-5">
                                        <div class="form-group">
                                                <label>Tên nhân viên</label>
                                            <input type="text" class="form-control" name="ten" value="{{ $nhanvien->ten }}">
                                        </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-5">
                                        <div class="form-group">
                                                <label>Ngày sinh</label>
                                            <input type="date" class="form-control" name="ngaySinh" value="{{ $nhanvien->ngaySinh }}">
                                        </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-5">
                                        <div class="form-group">
                                                <label>Giới tính</label>
                                            <input type="text" class="form-control" name="gioiTinh" value="{{ $nhanvien->gioiTinh }}">
                                        </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-5">
                                        <div class="form-group">
                                                <label>CMND</label>
                                            <input type="number" class="form-control" name="CMND" value="{{ $nhanvien->CMND }}">
                                        </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-5">
                                        <div class="form-group">
                                                <label>Địa chỉ</label>
                                            <input type="text" class="form-control" name="diaChi" value="{{ $nhanvien->diaChi }}">
                                        </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-5">
                                        <div class="form-group">
                                                <label>Số điện thoại</label>
                                            <input type="number" class="form-control" name="soDienThoai" value="{{ $nhanvien->soDienThoai }}">
                                        </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-5">
                                        <div class="form-group">
                                                <label>Email</label>
                                            <input type="email" class="form-control" name="email" value="{{ $nhanvien->email }}">
                                        </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-5">
                                        <div class="form-group">
                                                <label>Hình ảnh</label>
                                            <input type="file" class="form-control" name="hinhAnh">
                                            <img class="img-fluid" width="100px" src="../uploads/{{ $nhanvien->hinhAnh }}" alt="">
                                        </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-5">
                                        <div class="form-group">
                                                <label>Tên chức vụ</label>
                                            <select class="form-control" name="chucVu" id="">
                                                @foreach ($chucvus as $chucvu)
                                                    <option value="{{ $chucvu->id }}" @if ($chucvu->id == $nhanvien->chucVu)
                                                        {{ 'select' }}
                                                    @endif>{{ $chucvu->tenChucVu }}</option>
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
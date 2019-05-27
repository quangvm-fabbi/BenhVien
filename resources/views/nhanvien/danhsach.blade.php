
@include('layouts.header')
@include('layouts.dropdown')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $err)
                    {{ $err }}<br>
                @endforeach
            </div>
            @endif
            @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
                <div class="col-md-12">
                <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <p>
                                    Tác vụ
                                    <b class="caret"></b>
                                </p>

                          </a>
                          <ul class="dropdown-menu">
                            <li><a href="{{route('getthemnv')}}">Thêm nhân viên</a></li>
                          </ul>
                    </li>
                </ul>
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Danh sách nhân viên</h4>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th>ID</th>
                                    <th>Tên nhân viên</th>
                                    <th></th>
                                    <th>Ngày sinh</th>
                                    <th>Giới tính</th>
                                    <th>CMTND</th>
                                    <th>Địa chỉ</th>
                                    <th>Số điện thoại</th>
                                    <th>Email</th>
                                    <th>Chức vụ</th>
                                </thead>
                                </thead>
                                <tbody>
                                @foreach($nhanviens as $nhanvien)
                                    <tr>
                                        <td>{{ $nhanvien->id }}</td>
                                        <td>{{ $nhanvien->ten }}</td>
                                        <td>
                                            <img class="img-fluid" width="100px" src="../uploads/{{$nhanvien->hinhAnh}}" alt="">
                                        </td>
                                        <td>{{ $nhanvien->ngaySinh }}</td>
                                        <td>{{ $nhanvien->gioiTinh }}</td>
                                        <td>{{ $nhanvien->CMND }}</td>
                                        <td>{{ $nhanvien->diaChi }}</td>
                                        <td>{{ $nhanvien->soDienThoai }}</td>
                                        <td>{{ $nhanvien->email }}</td>
                                        <td>{{ $nhanvien->chucvu->tenChucVu }}</td>
                                        <td><a href="{{ route('getsuanv',$nhanvien->id) }}">Sửa</a></td>
                                        <td><a href="{{ route('getxoanv',$nhanvien->id) }}">Xóa</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
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
@include('layouts.footer')



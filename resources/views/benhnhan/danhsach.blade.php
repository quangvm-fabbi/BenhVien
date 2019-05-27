
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
                            <li><a href="{{route('getthembn')}}">Thêm bệnh nhân</a></li>
                          </ul>
                    </li>
                </ul>
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Danh sách bệnh nhân</h4>
                            <p class="category">Danh sách các bệnh nhân của bệnh viện</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th>ID</th>
                                    <th>Họ và tên</th>
                                    <th>Địa Chỉ</th>
                                    <th>Ngày vào</th>
                                    <th>Ngày sinh</th>
                                    <th>Khoa vào</th>
                                    <th>Khoa điều trị</th>
                                    <th>Số điện thoại</th>
                                    <th>Nghề nghiệp</th>
                                    <th>Hình ảnh</th>
                                    <th>Ngày vào điều trị</th>
                                </thead>
                                </thead>
                                <tbody>
                                @foreach($benhnhan as $bn)
                                    <tr>
                                        <td>{{$bn->id}}</td>
                                        <td><a href="{{ route('chitietbn',$bn->id) }}">{{$bn->hoTen}}</a></td>
                                        <td>{{$bn->diaChi}}</td>
                                        <td>{{$bn->ngayVao}}</td>
                                        <td>{{$bn->ngaySinh}}</td>
                                        <td>{{$bn->khoaVao}}</td>
                                        <td>{{$bn->khoaDieuTri}}</td>
                                        <td>{{$bn->soDienThoai}}</td>
                                        <td>{{$bn->ngheNghiep}}</td>
                                        <td>
                                        <img width="100px" src="../uploads/{{$bn->hinhAnh}}" >
                                        </td>
                                        <td>{{$bn->ngayVaoDT}}</td>
                                        <td><a href="{{ route('getsuabn',$bn->id) }}">Sửa</a></td>
                                        <td><a href="{{ route('getxoabn',$bn->id) }}">Xóa</a></td>
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



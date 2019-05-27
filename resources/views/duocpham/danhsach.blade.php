
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
                            <li><a href="{{route('getthemdp')}}">Thêm dược phẩm</a></li>
                          </ul>
                    </li>
                </ul>
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Danh sách dược phẩm</h4>
                            <p class="category">Danh sách các dược phẩm của bệnh viện</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th>ID</th>
                                    <th>Tên dược phẩm</th>
                                    <th>Đơn giá</th>
                                    <th>Ngày sản xuất</th>
                                    <th>Hạn sử dụng</th>
                                    <th>Nước sản xuất</th>
                                </thead>
                                </thead>
                                <tbody>
                                @foreach($duocpham as $dp)
                                    <tr>
                                        <td>{{$dp->id}}</td>
                                        <td>{{$dp->tenDuocPham}}</td>
                                        <td>{{$dp->donGia}}</td>
                                        <td>{{$dp->ngaySanXuat}}</td>
                                        <td>{{$dp->hanSudung}}</td>
                                        <td>{{$dp->nuocSanXuat}}</td>
                                        <td><a href="{{ route('getsuadp',$dp->id) }}">Sửa</a></td>
                                        <td><a href="{{ route('getxoadp',$dp->id) }}">Xóa</a></td>
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




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
                            <li><a href="{{route('getthemttrv')}}">Thêm kết quả</a></li>
                          </ul>
                    </li>
                </ul>
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Danh sách kết quả y lệnh</h4>
                            <p class="category">Danh sách thông tin kết quả y lệnh</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th>ID</th>
                                    <th>Kết quả</th>
                                    <th>Ngày xét nghiệm</th>
                                    <th>Y lệnh</th>
                                    <th>Tên bệnh nhân</th>
                                    <th>Người phụ trách</th>
                                </thead>
                                </thead>
                                <tbody>
                                @foreach($kq as $rv)
                                    <tr>
                                        <td>{{$rv->id}}</td>
                                        <td>{{$rv->ketQua}}</td>
                                        <td>{{$rv->ngayXetNghiem}}</td>
                                        <td>{{$rv->loaixetnghiem->tenLoai}}</td>
                                        <td>{{$rv->benhnhan->hoTen}}</td>
                                        <td><a href="{{ route('getsuattrv',$rv->id) }}">Sửa</a></td>
                                        <td><a href="{{ route('getxoattrv',$rv->id) }}">Xóa</a></td>
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



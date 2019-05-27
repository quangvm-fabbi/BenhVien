
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
                            <li><a href="{{route('getthemba')}}">Thêm bệnh án</a></li>
                          </ul>
                    </li>
                </ul>
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Danh sách bệnh án</h4>
                            <p class="category">Danh sách các bệnh án của bệnh viện</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th>ID</th>
                                    <th>Họ và tên</th>
                                    <th>Ngày vào</th>
                                    <th>Ngày ra</th>
                                    <th>Ghi chú</th>
                                    <th>Kết quả điều trị</th>
                                    <th>Chuẩn đoán</th>
                                    <th>Phương pháp phẫu thuật</th>
                                </thead>
                                </thead>
                                <tbody>
                                @foreach($benhan as $ba)
                                    <tr>
                                        <td>{{$ba->id}}</td>
                                        <td>{{$ba->benhnhan->hoTen}}</td>
                                        <td>{{$ba->ngayVao}}</td>
                                        <td>{{$ba->ngayRa}}</td>
                                        <td>{{$ba->ghiChu}}</td>
                                        <td>{{$ba->ketQuaDieuTri}}</td>
                                        <td>{{$ba->chuanDoan}}</td>
                                        <td>{{$ba->pppt->tenPP}}</td>
                                        <td><a href="{{ route('getsuaba',$ba->id) }}">Sửa</a></td>
                                        <td><a href="{{ route('getxoaba',$ba->id) }}">Xóa</a></td>
                                        <td><a href="{{ route('getthemphacdo',$ba->id) }}">Phác đồ</a></td>
                                        <td><a href="{{ route('vienphi',$ba->id) }}">Viện phí</a></td>
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



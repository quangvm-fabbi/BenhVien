
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
                            <h4 class="title">Thông tin của bệnh nhân </h4>
                            
                        </div>
                        <div class="content table-responsive table-full-width">
                        <p class="category">Phác đồ của bệnh nhân</p>
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th>ID</th>
                                    <th>Cách điều trị</th>
                                    <th>Ngày điều trị</th>
                                    <th>Mã bệnh án</th>
                                    <th>Dược phẩm</th>
                                </thead>
                                </thead>
                                <tbody>
                                @foreach($phacdo as $ba)
                                    <tr>
                                        <td>{{$ba->id}}</td>
                                        <td>{{$ba->cachGiaiQuyet}}</td>
                                        <td>{{$ba->ngayDieuTri}}</td>
                                        <td>{{$ba->BenhAn_id}}</td>
                                        @foreach ($ba->duocpham as $dp) 
                                        <td>{{$dp->tenDuocPham}}</td>
                                        @endforeach
                                        <td><a href="{{ route('chitiet',$ba->id) }}">Phác đồ</a></td>
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



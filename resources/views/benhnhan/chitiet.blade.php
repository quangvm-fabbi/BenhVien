
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
                            <li><a href="http://127.0.0.1:8000/admin/benhan/chitiet/{$id}">Xem phác đồ</a></li>
                          </ul>
                    </li>
                </ul>
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Thông tin của bệnh nhân </h4>
                            
                        </div>
                        <div class="content table-responsive table-full-width">
                        <p class="category">Bệnh án của bệnh nhân</p>
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th>ID</th>
                                    <th>Ngày vào</th>
                                    <th>Ngày ra</th>
                                    <th>Kết quả điều trị</th>
                                    <th>Chuẩn đoán</th>
                                    <th>Bệnh nhân</th>
                                    <th>Phương pháp phẫu thuật</th>
                                </thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$benhnhan->id}}</td>
                                        <td>{{$benhnhan->ngayVao}}</td>
                                        <td>{{$benhnhan->ngayRa}}</td>
                                        <td>{{$benhnhan->ketQuaDieuTri}}</td>
                                        <td>{{$benhnhan->chuanDoan}}</td>
                                        <td>{{$benhnhan->benhnhan->hoTen}}</td>
                                        <td>{{$benhnhan->pppt->tenPP}}</td>
                                        <td><a href="{{ route('getsuaba',$benhnhan->id) }}">Sửa</a></td>
                                        <td><a href="{{ route('getxoaba',$benhnhan->id) }}">Xóa</a></td>
                                        <td><a href="{{ route('chitiet',$benhnhan->id) }}">Xem bệnh án</a></td>
                                    </tr>
                                </tbody>
                            </table>
                            <p class="category">Danh sách kết quả xét nghiệm</p>
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th>ID</th>
                                    <th>Kết quả</th>
                                    <th>Ngày xét nghiệm</th>
                                    <th>Loại xét nghiệm</th>
                                    <th>Bệnh nhân</th>
                                    <th>Người phụ trách</th>
                                </thead>
                                </thead>
                                <tbody>
                                @foreach($kq as $k)
                                    <tr>
                                        <td>{{$k->id}}</td>
                                        <td>{{$k->ketQua}}</td>
                                        <td>{{$k->ngayXetNghiem}}</td>
                                        <td>{{$k->loaixetnghiem->tenLoai}}</td>
                                        <td>{{$k->benhnhan->hoTen}}</td>
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



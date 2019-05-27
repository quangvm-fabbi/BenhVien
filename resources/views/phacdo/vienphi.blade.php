@include('layouts.header')
@include('layouts.dropdown')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Viện phí</h4>
                            </div>
                            <div class="content">
                                        <div class="row">
                                            <div class="col-md-5">

                                            <div class="form-group">
                                                <label>Phác đồ</label>
                                            </div>

                                            @foreach ($benhan->phacdo  as $phacdo)
                                                <div class="form-group">
                                                    <label>Phác đồ: {{ $phacdo->id }}</label>
                                                </div>
                                                @php
                                                    $tienthuoc = 0;
                                                @endphp
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Tên dược phẩm</th>
                                                            <th>Đơn giá</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach ($phacdo->duocpham as $duocpham)
                                                        <tr>
                                                            <td>{{ $duocpham->id }}</td>
                                                            <td>{{ $duocpham->tenDuocPham }}</td>
                                                            <td>{{ number_format($duocpham->donGia) }}</td>
                                                        </tr>
                                                        @php
                                                            $tienthuoc += $duocpham->donGia;
                                                        @endphp  
                                                    @endforeach
                                                    </tbody>
                                                    <tr>
                                                        <td colspan="3">Tổng tiền: {{ number_format($tienthuoc) }}</td>
                                                    </tr>
                                                </table>                                             
                                            @endforeach
                                            <br>
                                            <div class="form-group">
                                                <label>Xét nghiệm</label>
                                            </div>
                                            <div class="form-group">
                                                <label>Loại xét nghiệm</label>
                                                <label class="form-control">{{ $xetnghiem->id }}</label>
                                            </div>
                                            <div class="form-group">
                                                <label>Giá</label>
                                                <label class="form-control">{{ number_format($xetnghiem->gia) }}</label>
                                            </div>
                                        </div>

                                        <div class="col-md-5 col-md-offset-2">


                                            <div class="form-group">
                                                <label>Giường bệnh</label>
                                            </div>
                                            <div class="form-group">
                                                <label>ID</label>
                                                <label class="form-control">{{ $giuongbenh->id }}</label>
                                            </div>
                                            <div class="form-group">
                                                <label>Tên giường</label>
                                                <label class="form-control">{{ $giuongbenh->tenGiuongBenh }}</label>
                                            </div>
                                            <div class="form-group">
                                                <label>Ngày vào</label>
                                                <label class="form-control">{{ $benhan->ngayVao }}</label>
                                            </div>
                                            <div class="form-group">
                                                <label>Ngày ra</label>
                                                <label class="form-control">{{ $benhan->ngayRa }}</label>
                                            </div>
                                            <div class="form-group">
                                                <label>Số ngày</label>
                                                <label class="form-control">{{ $songay }}</label>
                                            </div>
                                            <div class="form-group">
                                                <label>Giá</label>
                                                <label class="form-control">{{ number_format($giuongbenh->gia) }}</label>
                                            </div>
                                            <div class="form-group">
                                                <label>Tông tiền</label>
                                                <label class="form-control">{{ number_format($songay * $giuongbenh->gia) }}</label>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label><h4>Tổng tiền: {{ number_format($vienphi->gia) }}</h4></label>
                                        </div>
                                    </div>

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
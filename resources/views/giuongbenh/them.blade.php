@include('layouts.header')
@include('layouts.dropdown')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Thêm giường bệnh</h4>
                            </div>
                            <div class="content">
                                <form action="{{route('postthemgb')}}" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                        <div class="row">
                                            <div class="col-md-5">
                                            <div class="form-group">
                                                    <label>Tên giường bệnh</label>
                                                <input type="text" class="form-control" name="tenGiuongBenh">
                                            </div>
                                            <div class="form-group">
                                                    <label>Trạng thái</label>
                                                <input type="text" class="form-control" name="trangThai">
                                            </div>
                                            <div class="form-group">
                                                    <label>Giá</label>
                                                <input type="text" class="form-control" name="gia">
                                            </div>
                                            <div class="form-group">
                                                    <label>Ngày nhận</label>
                                                <input type="date" class="form-control" name="ngayNhan">
                                            </div>
                                            <div class="form-group">
                                                    <label>Tên phòng bệnh</label>
                                                    <select class="form-control" name="PhongBenh_id" >
                                                    @foreach($phongbenh as $pb)
                                                    <option value="{{$pb->id}}">{{$pb->tenPhong}}</option>
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
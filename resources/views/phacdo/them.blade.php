@include('layouts.header')
@include('layouts.dropdown')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Thêm phác đồ</h4>
                            </div>
                            <div class="content">
                                <form action="{{route('postthempd',$benhan->id)}}" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                        <div class="row">
                                            <div class="col-md-5">
                                            <div class="form-group">
                                                    <label>Cách giải quyết</label>
                                                <input type="text" class="form-control" name="cachGiaiQuyet" required>
                                            </div>
                                            <div class="form-group">
                                                    <label>Ngày điều trị</label>
                                                <input type="date" class="form-control" name="ngayDieuTri" required>
                                            </div>
                                            <div class="form-group">
                                                    <label>Mã bệnh án</label>
                                                <input type="text" class="form-control" name="BenhAn_id" value = "{{$benhan->id}}" readonly>
                                            </div>
                                            <div class="form-group">
                                                    <label>Tên dược phẩm</label>
                                                    <select class="form-control" name="duocpham" >
                                                    @foreach($duocpham as $pb)
                                                    <option value="{{$pb->id}}">{{$pb->tenDuocPham}}</option>
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
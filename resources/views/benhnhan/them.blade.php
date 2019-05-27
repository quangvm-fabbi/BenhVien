@include('layouts.header')
@include('layouts.dropdown')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Thêm bệnh nhân</h4>
                            </div>
                            <div class="content">
                                <form action="{{route('postthembn')}}" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                        <div class="row">
                                            <div class="col-md-5">
                                            <div class="form-group">
                                                    <label>Họ và tên</label>
                                                <input type="text" class="form-control" name="hoTen">
                                            </div>
                                            <div class="form-group">
                                                    <label>Địa chỉ</label>
                                                <input type="text" class="form-control" name="diaChi">
                                            </div>
                                            <div class="form-group">
                                                    <label>Ngày vào</label>
                                                <input type="date" class="form-control" name="ngayVao">
                                            </div>
                                            <div class="form-group">
                                                    <label>Ngày sinh</label>
                                                <input type="date" class="form-control" name="ngaySinh">
                                            </div>
                                            <div class="form-group">
                                                    <label>Khoa vào</label>
                                                <input type="text" class="form-control" name="khoaVao">
                                            </div>
                                            <div class="form-group">
                                                    <label>Khoa điều trị</label>
                                                <input type="text" class="form-control" name="khoaDieuTri">
                                            </div>
                                            <div class="form-group">
                                                    <label>Phone</label>
                                                <input type="text" class="form-control" name="soDienThoai">
                                            </div>
                                            <div class="form-group">
                                                    <label>Nghề nghiệp</label>
                                                <input type="text" class="form-control" name="ngheNghiep">
                                            </div>
                                            <div class="form-group">
                                                    <label>Hình ảnh</label>
                                                <input type="file" class="form-control" name="hinhAnh">
                                            </div>
                                            <div class="form-group">
                                                    <label>Ngày vào điều trị</label>
                                                <input type="date" class="form-control" name="ngayVaoDT">
                                            </div>
                                            <div class="form-group">
                                                <label>Phòng bệnh</label>
                                                <select class="form-control" name="PhongBenh_id" id="PhongBenh_id" >
                                                <option>...</option>
                                                @foreach($phongbenh as $pb)
                                                <option value="{{$pb->id}}">{{$pb->tenPhong}}</option>
                                                @endforeach
                                            </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Giường bệnh</label>
                                                <select class="form-control" name="GiuongBenh_id" id="GiuongBenh_id">
                                                <option>...</option>
                                                @foreach($giuongbenh as $gb)
                                                <option value="{{$gb->id}}">{{$gb->tenGiuongBenh}}</option>
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
@section('script')
   <script>
       $(document).ready(function(){
        $("#PhongBenh_id").change(function(){
            $.ajax({
                url: '{{ route("giuongbenh") }}',
                method: 'get',
                data: {
                    PhongBenh_id: $(this).val()
                },
                success: function(data){
                    $("#GiuongBenh_id").html(data);
                }
            });
        });
       });
   </script>
   @endsection
@include('layouts.footer')
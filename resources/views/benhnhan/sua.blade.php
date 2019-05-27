@include('layouts.header')
@include('layouts.dropdown')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Sửa bệnh nhân</h4>
                            </div>
                            <div class="content">
                                <form action="{{route('postsuabn',$benhnhan->id)}}" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                        <div class="row">
                                            <div class="col-md-5">
                                            <div class="form-group">
                                                    <label>Họ và Tên</label>
                                                <input type="text" class="form-control" name="hoTen" value="{{$benhnhan->hoTen}}">
                                            </div>
                                            <div class="form-group">
                                                    <label>Địa chỉ</label>
                                                <input type="text" class="form-control" name="diaChi" value="{{$benhnhan->diaChi}}">
                                            </div>
                                            <div class="form-group">
                                                    <label>Ngày vào</label>
                                                <input type="date" class="form-control" name="ngayVao" value="{{$benhnhan->ngayVao}}">
                                            </div>
                                            <div class="form-group">
                                                    <label>Ngày sinh</label>
                                                <input type="date" class="form-control" name="ngaySinh" value="{{$benhnhan->ngaySinh}}">
                                            </div>
                                            <div class="form-group">
                                                    <label>Khoa vào</label>
                                                <input type="text" class="form-control" name="khoaVao" value="{{$benhnhan->khoaVao}}">
                                            </div>
                                            <div class="form-group">
                                                    <label>Khoa điều trị</label>
                                                <input type="text" class="form-control" name="khoaDieuTri" value="{{$benhnhan->khoaDieuTri}}">
                                            </div>
                                            <div class="form-group">
                                                    <label>Số điện thoại</label>
                                                <input type="text" class="form-control" name="soDienThoai" value="{{$benhnhan->soDienThoai}}">
                                            </div>
                                            <div class="form-group">
                                                    <label>Nghề nghiệp</label>
                                                <input type="text" class="form-control" name="ngheNghiep" value="{{$benhnhan->ngheNghiep}}">
                                            </div>
                                            <div class="form-group">
                                                <label>Hình ảnh</label>
                                                <img width="100px" src="../uploads/{{$benhnhan->hinhAnh}}" >
                                                <input type="file" class="form-control" name="hinhAnh" placeholder="Nhập hình ảnh"   value="{{$benhnhan->hinhAnh}}"/>
                                            </div>
                                            <div class="form-group">
                                                    <label>Ngày vào điều trị</label>
                                                <input type="date" class="form-control" name="ngayVaoDT" value="{{$benhnhan->ngayVaoDT}}">
                                            </div>
                                            <div class="form-group">
                                                <label>Phòng bệnh</label>
                                                <select class="form-control" name="PhongBenh_id" id="PhongBenh_id" >
                                            @foreach($phongbenh as $pb)
                                            <option
                                                @if($benhnhan->giuongbenh->phongbenh->id == $pb->id)
                                                    {{"selected"}}
                                                @endif
                                            value="{{$pb->id}}">{{$pb->tenPhong}}</option>   
                                            @endforeach
                                            </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Giường bệnh</label>
                                                <select class="form-control" name="GiuongBenh_id" id="GiuongBenh_id">
                                                @foreach($giuongbenh as $gb)
                                            <option 
                                                @if($benhnhan->giuongbenh->id == $gb->id)
                                                    {{"selected"}}
                                                @endif
                                            value="{{$gb->id}}">{{$gb->tenGiuongBenh}}</option>
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
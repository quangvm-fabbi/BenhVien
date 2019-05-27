@include('layouts.header')
@include('layouts.dropdown')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Sửa bệnh án</h4>
                            </div>
                            <div class="content">
                                <form action="{{route('postsuaba',$benhan->id)}}" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                        <div class="row">
                                            <div class="col-md-5">
                                            <div class="form-group">
                                                    <label>Họ và Tên</label>
                                                <input type="text" class="form-control" name="BenhNhan_idBenhNhan" value="{{$benhan->BenhNhan_idBenhNhan}}">
                                            </div>
                                            <div class="form-group">
                                                    <label>Ngày vào</label>
                                                <input type="text" class="form-control" name="ngayVao" value="{{$benhan->ngayVao}}">
                                            </div>
                                            <div class="form-group">
                                                    <label>Ngày ra</label>
                                                <input type="date" class="form-control" name="ngayRa" value="{{$benhan->ngayRa}}">
                                            </div>
                                            <div class="form-group">
                                                    <label>Ghi chú</label>
                                                <input type="date" class="form-control" name="ghiChu" value="{{$benhan->ghiChu}}">
                                            </div>
                                            <div class="form-group">
                                                    <label>Kết quả điều trị</label>
                                                <input type="text" class="form-control" name="ketQuaDieuTri" value="{{$benhan->ketQuaDieuTri}}">
                                            </div>
                                            <div class="form-group">
                                                    <label>Chuẩn đoán</label>
                                                <input type="text" class="form-control" name="chuanDoan" value="{{$benhan->chuanDoan}}">
                                            </div>
                                            <div class="form-group">
                                                    <label>Phương pháp phẫu thuật</label>
                                                    <select class="form-control" name="PhuongPhapPhauThuat_id" >
                                                    @foreach($pppt as $pb)
                                                    <option value="{{$pb->id}}">{{$pb->tenPP}}</option>
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
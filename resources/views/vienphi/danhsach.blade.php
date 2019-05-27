
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
                </ul>
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Danh sách viện phí</h4>
                            <p class="category">Danh sách viện phí</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th>ID</th>
                                    <th>Bệnh án</th>
                                    <th>Bệnh nhân</th>
                                    <th>Tông tiền</th>
                                    <th>Ngày lập</th>
                                    <th>Người lập</th>
                                </thead>
                                <tbody>
                                @foreach($vienphis as $vienphi)
                                    <tr>
                                        <td>{{$vienphi->id}}</td>
                                        <td>{{$vienphi->benhan->id}}</td>
                                        <td>{{$vienphi->benhan->benhnhan->hoTen}}</td>
                                        <td>{{$vienphi->gia}}</td>
                                        <td>{{$vienphi->created_at}}</td>
                                        <td>{{$vienphi->nhanvien->ten}}</td>
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



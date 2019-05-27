<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <base href="{{asset('')}}">
	<link rel="icon" type="{{asset('Pages/image/png')}}" href="{{asset('Pages/assets/img/favicon.ico')}}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Light Bootstrap Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{asset('Pages/assets/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{asset('Pages/assets/css/animate.min.css')}}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{asset('Pages/assets/css/light-bootstrap-dashboard.css?v=1.4.0')}}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('Pages/assets/css/demo.css')}}" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{asset('Pages/assets/css/pe-icon-7-stroke.css')}}" rel="stylesheet" />
    <script src="{{asset('ckeditor/ckeditor/ckeditor.js')}}"></script>
</head>
<body>
<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Creative Tim
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="dashboard.html">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('getdanhsachbn')}}">
                        <i class="pe-7s-note2"></i>
                        <p>Danh sách bệnh nhân </p>
                    </a>
                </li>
                <li>
                    <a href="{{route('getdanhsach')}}">
                        <i class="pe-7s-note2"></i>
                        <p>Danh sách Y Lệnh</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('getdanhsachttrv')}}">
                        <i class="pe-7s-note2"></i>
                        <p>Danh sách KQ Y lệnh</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('getdanhsachpppt')}}">
                        <i class="pe-7s-note2"></i>
                        <p>PP phẫu thuật</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('getdanhsachpb')}}">
                        <i class="pe-7s-note2"></i>
                        <p>Danh sách phòng</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('getdanhsachdp')}}">
                        <i class="pe-7s-note2"></i>
                        <p>Danh sách DP</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('getdanhsachgb')}}">
                        <i class="pe-7s-note2"></i>
                        <p>Danh sách giường </p>
                    </a>
                </li>
                <li>
                    <a href="{{route('getdanhsachba')}}">
                        <i class="pe-7s-note2"></i>
                        <p>Danh sách bệnh án</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('getdanhsachpd')}}">
                        <i class="pe-7s-note2"></i>
                        <p>Danh sách pd</p>
                    </a>
                </li>

                <li>
                    <a href="{{route('getdanhsachvp')}}">
                        <i class="pe-7s-note2"></i>
                        <p>Danh sách viện phí</p>
                    </a>
                </li>

                <li>
                    <a href="{{route('getdanhsachnv')}}">
                        <i class="pe-7s-user"></i>
                        <p>Danh sách nhân viên</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('getdanhsachcv')}}">
                        <i class="pe-7s-user"></i>
                        <p>Danh sách chức vụ</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>
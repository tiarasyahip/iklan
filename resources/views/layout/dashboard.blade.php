<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iklan | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('lte/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('lte/plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('lte/dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('lte/plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('lte/plugins/summernote/summernote-bs4.min.css')}}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="lte/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div> -->

        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light p-md-d">
            <div class="container">
                <!-- For more settings use the AutoHTML plugin tab ... -->
                <svg class="logo" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_2292_190)">
                        <path d="M16 0C12.8355 0 9.74207 0.938383 7.11088 2.69649C4.4797 4.45459 2.42894 6.95345 1.21793 9.87707C0.0069325 12.8007 -0.309921 16.0177 0.307443 19.1214C0.924806 22.2251 2.44866 25.0761 4.6863 27.3137C6.92394 29.5513 9.77487 31.0752 12.8786 31.6926C15.9823 32.3099 19.1993 31.9931 22.1229 30.7821C25.0466 29.5711 27.5454 27.5203 29.3035 24.8891C31.0616 22.2579 32 19.1645 32 16C32 11.7565 30.3143 7.68687 27.3137 4.68629C24.3131 1.68571 20.2435 0 16 0ZM13 27.07C13 27.2 13 27.27 12.93 27.33C12.9183 27.3936 12.8913 27.4535 12.8514 27.5044C12.8115 27.5553 12.7598 27.5957 12.7008 27.6223C12.6418 27.6488 12.5772 27.6607 12.5127 27.6568C12.4481 27.6529 12.3854 27.6334 12.33 27.6C9.9033 26.8278 7.78518 25.3036 6.28207 23.2479C4.77895 21.1922 3.96879 18.7116 3.96879 16.165C3.96879 13.6184 4.77895 11.1378 6.28207 9.08211C7.78518 7.02642 9.9033 5.50221 12.33 4.73C12.4115 4.68215 12.5059 4.66116 12.6 4.67C12.721 4.69201 12.8294 4.75873 12.9035 4.85692C12.9776 4.9551 13.012 5.07758 13 5.2V6.13C13.0132 6.26969 12.9816 6.40996 12.9096 6.53045C12.8377 6.65093 12.7292 6.74535 12.6 6.8C10.6929 7.51412 9.04918 8.7935 7.88881 10.4671C6.72844 12.1406 6.10668 14.1285 6.10668 16.165C6.10668 18.2015 6.72844 20.1894 7.88881 21.8629C9.04918 23.5365 10.6929 24.8159 12.6 25.53C12.7044 25.597 12.7939 25.6849 12.8627 25.7882C12.9316 25.8914 12.9783 26.0078 13 26.13V27.07ZM17.07 23.67C17 24 16.8 24.2 16.53 24.2H15.53C15.2 24.13 15 23.93 15 23.67V22.07C12.8 21.73 11.74 20.53 11.47 18.87V18.8C11.4686 18.7379 11.4799 18.6762 11.503 18.6185C11.5261 18.5609 11.5607 18.5085 11.6046 18.4646C11.6485 18.4207 11.7009 18.3861 11.7585 18.363C11.8162 18.3399 11.8779 18.3286 11.94 18.33H13.07C13.1818 18.3345 13.2889 18.3763 13.3741 18.4488C13.4593 18.5213 13.5177 18.6204 13.54 18.73C13.74 19.73 14.34 20.47 16.07 20.47C16.3329 20.4976 16.5986 20.4728 16.8519 20.3971C17.1051 20.3214 17.3409 20.1962 17.5454 20.0289C17.75 19.8615 17.9194 19.6552 18.0438 19.422C18.1681 19.1887 18.245 18.9331 18.27 18.67C18.27 17.6 17.67 17.2 15.8 16.87C13 16.53 11.67 15.67 11.67 13.47C11.7045 12.6138 12.0601 11.8019 12.666 11.196C13.2719 10.5901 14.0838 10.2345 14.94 10.2V8.67C15 8.33 15.2 8.13 15.47 8.13H16.47C16.8 8.2 17 8.4 17 8.67V10.27C17.7309 10.3311 18.4212 10.6319 18.9636 11.1255C19.5061 11.6192 19.8704 12.2781 20 13V13.07C20.0014 13.1317 19.9902 13.1929 19.9669 13.2501C19.9437 13.3072 19.909 13.3589 19.8649 13.4021C19.8208 13.4452 19.7683 13.4788 19.7107 13.5008C19.6531 13.5228 19.5916 13.5328 19.53 13.53H18.47C18.3676 13.5286 18.268 13.4963 18.1841 13.4374C18.1003 13.3786 18.0361 13.2958 18 13.2C17.8614 12.7421 17.5632 12.349 17.1595 12.0922C16.7559 11.8353 16.2735 11.7316 15.8 11.8C14.47 11.8 13.8 12.4 13.8 13.33C13.8 14.26 14.2 14.8 16.2 15.07C19 15.4 20.4 16.2 20.4 18.53C20.3743 19.4253 20.0211 20.2801 19.4074 20.9325C18.7937 21.5849 17.9621 21.9896 17.07 22.07V23.67ZM19.67 27.67C19.5885 27.7178 19.4941 27.7388 19.4 27.73C19.279 27.708 19.1707 27.6413 19.0965 27.5431C19.0224 27.4449 18.988 27.3224 19 27.2V26.27C18.9868 26.1303 19.0185 25.99 19.0904 25.8696C19.1623 25.7491 19.2708 25.6547 19.4 25.6C21.3072 24.8859 22.9508 23.6065 24.1112 21.9329C25.2716 20.2594 25.8933 18.2715 25.8933 16.235C25.8933 14.1985 25.2716 12.2106 24.1112 10.5371C22.9508 8.8635 21.3072 7.58413 19.4 6.87C19.2873 6.7955 19.1929 6.69659 19.1236 6.5806C19.0544 6.46462 19.0121 6.33454 19 6.2V5.27C19 5.13 19 5.07 19.07 5C19.0817 4.93638 19.1087 4.87655 19.1486 4.82565C19.1886 4.77474 19.2402 4.73428 19.2992 4.70773C19.3582 4.68118 19.4228 4.66934 19.4874 4.67322C19.5519 4.6771 19.6146 4.69658 19.67 4.73C21.5026 5.32651 23.1663 6.35177 24.5229 7.72057C25.8795 9.08938 26.8899 10.7622 27.47 12.6C28.4338 15.6328 28.1534 18.9241 26.6907 21.7502C25.2279 24.5763 22.7026 26.7057 19.67 27.67Z" fill="#1F2328" />
                    </g>
                    <defs>
                        <clipPath id="clip0_2292_190">
                            <rect width="32" height="32" fill="white" />
                        </clipPath>
                    </defs>
                </svg>

                <a href="#" class="navbar-brand">Dashboard</a>
                <button type="button" class="navbar-toggler" data-bs-target="#navbarNav" data-bs-toggle="collapse" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle Navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mx-auto"></div>
                    <ul class="ultext navbar-nav">
                        <li>
                            <div class="row mb-3">
                                <a href="form_user" class="btn"><i class="fas fa-plus"></i></a>
                            </div>
                        </li>
                        <li>
                            <a href="Login/Daftar.html" type="button" class="btn btn-outline-light ms-1" style="border-radius: 10px">Daftar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Akhir Navbar -->


        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{$data_pelanggan}}</h3>

                                <p>New Orders</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>53<sup style="font-size: 20px">%</sup></h3>

                                <p>Bounce Rate</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{$data_user}}</h3>

                                <p>User Registrations</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>65</h3>

                                <p>Unique Visitors</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
            </div>
        </section>
        <!-- /.card-body -->

        <!-- /.content -->

        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2023 <a href="#">Iklan</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0.0
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{asset('lte/plugins/jquery/jquery.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset('lte/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- ChartJS -->
    <script src="{{asset('lte/plugins/chart.js')}}/Chart.min.js')}}"></script>
    <!-- Sparkline -->
    <script src="{{asset('lte/plugins/sparklines/sparkline.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{asset('lte/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('lte/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{asset('lte/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
    <!-- daterangepicker -->
    <script src="{{asset('lte/plugins/moment/moment.min.js')}}"></script>
    <script src="{{asset('lte/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{asset('lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <!-- Summernote -->
    <script src="{{asset('lte/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{asset('lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('lte/dist/js/adminlte.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{asset('lte/dist/js/pages/dashboard.js')}}"></script>
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <script>
        //Date and time picker
        $('#reservationdatetime').datetimepicker({
            icons: {
                time: 'far fa-clock'
            }
        });
    </script>
</body>

</html>
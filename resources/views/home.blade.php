<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="/assets/css/ready.css">
    <link rel="stylesheet" href="/assets/css/demo.css">
</head>

<body>
    <div class="wrapper">
        <div class="main-header">
            <div class="logo-header">
                Penggunaan Ruang
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
            </div>
            <nav class="navbar navbar-header navbar-expand-lg">
                <div class="container-fluid">
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" aria-expanded="false"> <img src="{{asset('img')}}/{{ Auth::user()->foto }}" alt="user-img" width="45" height="45" class="img-circle"><span>{{ Auth::user()->name }}</span></span> </a>
                            <ul class="dropdown-menu dropdown-user">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{url('/use')}}"><i class="ti-settings"></i> Profil</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item"><i class="fa fa-power-off">
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                            </ul>
                            <!-- /.dropdown-user -->
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="sidebar">
            <div class="scrollbar-inner sidebar-wrapper">
                <div class="user">
                    <img src="logo.png" width="60" height="60" class="d-inline-block align-top" alt="">
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        <a href="{{url('/home')}}">
                            <i class="la la-dashboard"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/bukus')}}">
                            <i class="la la-book"></i>
                            <p>Buku</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/users')}}">
                            <i class="la la-user"></i>
                            <p>User</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/anggotas')}}">
                            <i class="la la-users"></i>
                            <p>Anggota</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/pinjams')}}">
                            <i class="la la-edit"></i>
                            <p>Peminjaman</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <h4 class="page-title">Dashboard</h4>

                        <div class="col mt-3 mb-3">
                            <div class="row d-flex">
                                <div class="col-12 mr-5">
                                    <div class="card shadow">
                                        <div class="card-body p-3 ">
                                            <h3>Selamat Datang Petugas</h3>
                                            <span id="tanggalwaktu"></span>
                                            <script>
                                                var dt = new Date();
                                                document.getElementById("tanggalwaktu").innerHTML = dt.toLocaleString();
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex mt-4">
                                <div class="col-3 ml-5">
                                    <div class="card">
                                        <div class="card-body p-3">
                                        <img src="../img/buku.png" width="40" height="40" class="d-inline-block align-top" alt="">
                                            Data Buku
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 ml-5">
                                    <div class="card">
                                        <div class="card-body p-3">
                                        <img src="../img/user.png" width="40" height="40" class="d-inline-block align-top" alt="">
                                            Data User
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 ml-5">
                                    <div class="card">
                                        <div class="card-body p-3">
                                        <img src="../img/anggota.png" width="40" height="40" class="d-inline-block align-top" alt="">
                                            Data Anggota
                                        </div>
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
            <div class="copyright ml-auto">
                2018, made with <i class="la la-heart heart text-danger"></i> by <a href="http://www.themekita.com">ThemeKita</a>
            </div>
        </div>
    </footer>
    </div>
    </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="modalUpdatePro" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h6 class="modal-title"><i class="la la-frown-o"></i> Under Development</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <p>Currently the pro version of the <b>Ready Dashboard</b> Bootstrap is in progress development</p>
                    <p>
                        <b>We'll let you know when it's done</b>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="/assets/js/core/jquery.3.2.1.min.js"></script>
<script src="/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="/assets/js/core/popper.min.js"></script>
<script src="/assets/js/core/bootstrap.min.js"></script>
<script src="/assets/js/plugin/chartist/chartist.min.js"></script>
<script src="/assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
<script src="/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="/assets/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
<script src="/assets/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
<script src="/assets/js/plugin/chart-circle/circles.min.js"></script>
<script src="/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="/assets/js/ready.min.js"></script>

</html>
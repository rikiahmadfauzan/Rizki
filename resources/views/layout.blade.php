<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>

    <link rel="stylesheet" href="{{ asset('dashboard') }}/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('dashboard') }}/vendors/base/vendor.bundle.base.css">

    <link rel="stylesheet" href="{{ asset('dashboard') }}/vendors/datatables.net-bs4/dataTables.bootstrap4.css">

    <link rel="stylesheet" href="{{ asset('dashboard') }}/css/style.css">


</head>

<body>
    <div class="container-scroller">

        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex justify-content-center">
                <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
                    <p class="navbar-brand brand-logo">Admin</p>
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-toggle="minimize">
                        <span class="mdi mdi-sort-variant"></span>
                    </button>
                </div>
            </div>
        </nav>

        <div class="container-fluid page-body-wrapper">
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/home">
                            <i class="mdi mdi-home menu-icon"></i>
                            <span class="menu-title">Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/menu">
                            <i class="mdi mdi-equal-box
                            menu-icon"></i>
                            <span class="menu-title">Menu</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/custumer">
                            <i class="mdi mdi-account-multiple-outline menu-icon"></i>
                            <span class="menu-title">Custumer</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=transakasi">
                            <i class="mdi mdi-cash-multiple menu-icon"></i>
                            <span class="menu-title">Transaksi</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/logout">
                            <i class="mdi mdi-logout menu-icon"></i>
                            <span class="menu-title">Logout</span>
                        </a>
                    </li>
                </ul>

            </nav>
            <div class="main-panel">
                <div class="content-wrapper py-2">
                    <div class="row">
                        <div class="col-md-12 stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    @yield('content')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>

    <script src="{{ asset('dashboard') }}/vendors/base/vendor.bundle.base.js"></script>

    <script src="{{ asset('dashboard') }}/vendors/chart.js/Chart.min.js"></script>
    <script src="{{ asset('dashboard') }}/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="{{ asset('dashboard') }}/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>

    <script src="{{ asset('dashboard') }}/js/off-canvas.js"></script>
    <script src="{{ asset('dashboard') }}/js/hoverable-collapse.js"></script>
    <script src="{{ asset('dashboard') }}/js/template.js"></script>

    <script src="{{ asset('dashboard') }}/js/dashboard.js"></script>
    <script src="{{ asset('dashboard') }}/js/data-table.js"></script>
    <script src="{{ asset('dashboard') }}/js/jquery.dataTables.js"></script>
    <script src="{{ asset('dashboard') }}/js/dataTables.bootstrap4.js"></script>


    <script src="{{ asset('dashboard') }}/js/jquery.cookie.js" type="text/javascript"></script>
</body>

</html>

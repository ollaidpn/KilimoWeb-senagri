<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Kilimo</title>
    <link rel="apple-touch-icon" href="{{asset('assets/admin/images/ico/apple-icon-120.png')}}">
    <link rel="apple-touch-icon" href="{{asset('assets/admin/images/ico/apple-icon-120.png')}}">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/admin/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/vendors.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/themes/bordered-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/themes/semi-dark-layout.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/core/menu/menu-types/horizontal-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/pages/page-blog.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/all.min.css')}}">



    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/charts/apexcharts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/extensions/toastr.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/pages/dashboard-ecommerce.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/plugins/charts/chart-apex.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/plugins/extensions/ext-component-toastr.min.css')}}">

    <!-- END: Page CSS-->
    {{-- ajout css --}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @livewireStyles
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu content-detached-right-sidebar navbar-floating footer-static " data-open="hover" data-menu="horizontal-menu" data-col="content-detached-right-sidebar">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-fixed align-items-center navbar-shadow navbar-brand-center" style="border-radius: 15px 0px 0px; border-color:red" data-nav="brand-center">
        <div class="navbar-header d-xl-block d-none">
            {{-- <ul class="nav navbar-nav">
                <li class="nav-item">
                    <img src="{{asset('assets/logokilimo.png')}}" height="50" alt="">
                </li>
            </ul> --}}
        </div>
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon" data-feather="menu"></i></a></li>
                </ul>
                <ul class="nav navbar-nav bookmark-icons">
                    <img src="{{asset('assets/logokilimo.png')}}" alt="avatar" width="80" height="50">
                </ul>

            </div>
            <ul class="ml-auto nav navbar-nav align-items-center">

                <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>


                <li class="nav-item dropdown dropdown-notification mr-25"><a class="nav-link" href="javascript:void(0);" data-toggle="dropdown"><i class="ficon" data-feather="bell"></i><span class="badge badge-pill badge-danger badge-up">1</span></a>
                    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                        <li class="dropdown-menu-header">
                            <div class="dropdown-header d-flex">
                                <h4 class="mb-0 mr-auto notification-title">Notifications</h4>
                                <div class="badge badge-pill badge-light-primary">A Nouveau</div>
                            </div>
                        </li>
                        <li class="scrollable-container media-list">
                            <a class="d-flex" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                    <div class="media-left">
                                        <div class="avatar"><img src="{{asset('assets/admin/images/portrait/small/avatar-s-15.jpg')}}" alt="avatar" width="32" height="32"></div>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"><span class="font-weight-bolder">Félicitation à 🎉</span>Ndiouga Diallo ! </p><small class="notification-text" style="color: black"> Culture de tomate terminé.</small>
                                    </div>
                                </div>
                            </a>


                        </li>
                        <li class="dropdown-menu-footer"><a class="btn btn-primary btn-block" href="javascript:void(0)">Voir tous</a></li>
                    </ul>
                </li>


                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span class="user-name font-weight-bolder" style="color: black">{{$user->prenom}} {{$user->nom}}</span><span class="user-status" style="color: black">{{$user->email}}</span></div><span class="avatar"><img class="round" src="{{asset('assets/admin//images/portrait/small/avatar-s-11.jpg')}}" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
                        <a class="dropdown-item" href="{{route('admin-infos-user')}}">
                            <i class="mr-50" data-feather="user"></i> Mon compte
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         <i class="mr-50" data-feather="power"></i> Deconnexion
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- END: Header-->

@include('includes.Admin.menu')
    <!-- BEGIN: Content-->
    @yield('content')
    @if (Route::current()->uri() == 'admin')
    @include('includes.Admin.statistique')
    @endif
    <!-- END: Content-->


    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-left d-block d-md-inline-block mt-25" style="color: black">Copyright &copy; 2021 Kilimo</span><span class="float-md-right d-none d-md-block" style="color: black">Une plateforme de Senagriculture</span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('assets/admin/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('assets/admin/vendors/js/ui/jquery.sticky.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('assets/admin/js/core/app-menu.js')}}"></script>
    <script src="{{asset('assets/admin/js/core/app.js')}}"></script>
    <script src="{{asset('js/all.min.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('assets/admin/vendors/js/charts/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/admin/vendors/js/extensions/toastr.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('assets/admin/js/core/app-menu.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/core/app.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/scripts/customizer.min.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('assets/admin/js/scripts/pages/dashboard-ecommerce.min.js')}}"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
    @livewireScripts
</body>
<!-- END: Body-->

</html>

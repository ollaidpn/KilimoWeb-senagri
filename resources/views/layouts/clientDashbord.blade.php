<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard ecommerce - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="{{asset('assets/admin/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/admin/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/charts/apexcharts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/extensions/toastr.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/bootstrap-extended.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/colors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/components.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/themes/dark-layout.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/themes/bordered-layout.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/themes/semi-dark-layout.min.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/core/menu/menu-types/vertical-menu.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/pages/dashboard-ecommerce.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/plugins/charts/chart-apex.min.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('assets/admin/css/plugins/extensions/ext-component-toastr.min.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/style.css')}}">
    <!-- END: Custom CSS-->
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern navbar-floating footer-static " data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    @include('includes.Client.menu')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Ecommerce Starts -->
                <section id="dashboard-ecommerce">
                    <div class="row match-height tabs">
                        <!-- Agriculture -->
                        <div class="col-xl-6 col-md-6 col-12">
                            <div class="card card-congratulation-medal" style="background-image: url('assets/kilimo/img/hero-bg-4.jpg');background-size: cover;">
                                <div class="text-center card-body">
                                    <h5 class="text-white">Agriculture</h5>
                                    <h3 class="mt-2 mb-75 pt-50">
                                        <span class="text-white" href="javascript:void(0);">48.9</span>
                                    </h3>
                                    <a href="#agriculture" type="button" class="btn btn_agriculture center btn-primary">Agriculture</a>
                                </div>
                            </div>
                        </div>
                        <!--/ Agriculture -->

                        <!-- Elevage -->
                        <div class="col-xl-6 col-md-6 col-12" id="btn_elevage">
                            <div class="card card-congratulation-medal" style="background-image: url('assets/unnamed.jpg');background-size: cover;">
                                <div class="text-center card-body">
                                    <h5 class="text-white">Elevage</h5>
                                    <h3 class="mt-2 mb-75 pt-50">
                                        <span class="text-white" href="javascript:void(0);">48.9</span>
                                    </h3>
                                    <a href="#elevage" type="button" class="btn btn_elevage btn-primary">Elevage</a>
                                </div>
                            </div>
                        </div>
                        <!--/ Elevage -->
                    </div>
                    {{-- affichage statistique --}}
                    @include('layouts.statistiqueContent')
                    <!-- END: Content-->
                    @include('layouts.listAgriculture')
                    @include('layouts.listElevage')
                    {{-- fin formulaire agriculture --}}
                    @include('layouts.formAgri')
                    {{-- formulaire elevage --}}
                    @include('layouts.formElevage')
                    {{-- fin formulaire elevage --}}
                <div class="sidenav-overlay"></div>
                <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021<a
                    class="ml-25" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a><span
                    class="d-none d-sm-inline-block">, All rights Reserved</span></span><span
                class="float-md-right d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->
    <script src="{{asset('assets/kilimo/js/form.js')}}"></script>
    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('assets/admin/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

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
</body>
<!-- END: Body-->
</html>

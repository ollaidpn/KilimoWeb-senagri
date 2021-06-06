@include('layouts.header')
<body class="vertical-layout vertical-menu-modern navbar-floating footer-static " data-open="click"
    data-menu="vertical-menu-modern" data-col="">
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
                                    <a href="{{route('liste-agricultures')}}" type="button" class="btn btn_agriculture center btn-primary">Agriculture</a>
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
                                    <a href="{{route('liste-elevages')}}" type="button" class="btn btn_elevage btn-primary">Elevage</a>
                                </div>
                            </div>
                        </div>
                        <!--/ Elevage -->
                    </div>
                    {{-- affichage statistique --}}
                    @include('layouts.statistiqueContent')
                    <!-- END: Content-->
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
    @include('layouts.script')
</body>
<!-- END: Body-->
</html>

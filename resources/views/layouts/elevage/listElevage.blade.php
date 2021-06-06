@include('layouts.header')
<body class="vertical-layout vertical-menu-modern navbar-floating footer-static " data-open="click"
    data-menu="vertical-menu-modern" data-col="">
@include('includes.Client.menu')

<div class="app-content content">
    <div class="mb-2 col-xl-12 col-lg-12 col-md-12 col-12" style="">
        <div class="card card-congratulation-medal" style="background-image: url('../assets/kilimo/img/senegal-elevage.png');background-size: cover;width:100%;height:200px;border-radius:30px;opacity:0.4">

        </div>
    </div>
    <a href="{{route('ajouter-elevages')}}" class="mb-2 btn btn-warning">AJouter</a>
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Statistics card section -->
            <section id="statistics-card">
                <!-- Stats Horizontal Card -->
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="ml-0 avatar bg-light-primary">
                                    <div class="avatar-content">
                                        <i data-feather="cpu" class="font-medium-5"></i>
                                    </div>
                                </div>
                                <div>
                                    <h5 class="mb-1 font-weight-bolder">Date de semie</h5>
                                    <h5 class="mb-1 font-weight-bolder">Date de fin</h5>
                                    <h5 class="mb-0 font-weight-bolder">Dernier entretien</h5>
                                </div>
                                <div>
                                    <h5 class="mb-1 font-weight-bolder">12/05/21</h5>
                                    <h5 class="mb-1 font-weight-bolder">12/07/21</h5>
                                    <h5 class="mb-0 font-weight-bolder">aujourd'hui</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="ml-0 avatar bg-light-primary">
                                    <div class="avatar-content">
                                        <i data-feather="cpu" class="font-medium-5"></i>
                                    </div>
                                </div>
                                <div>
                                    <h5 class="mb-1 font-weight-bolder">Date de semie</h5>
                                    <h5 class="mb-1 font-weight-bolder">Date de fin</h5>
                                    <h5 class="mb-0 font-weight-bolder">Dernier entretien</h5>
                                </div>
                                <div>
                                    <h5 class="mb-1 font-weight-bolder">12/05/21</h5>
                                    <h5 class="mb-1 font-weight-bolder">12/07/21</h5>
                                    <h5 class="mb-0 font-weight-bolder">aujourd'hui</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="ml-0 avatar bg-light-primary">
                                    <div class="avatar-content">
                                        <i data-feather="cpu" class="font-medium-5"></i>
                                    </div>
                                </div>
                                <div>
                                    <h5 class="mb-1 font-weight-bolder">Date de semie</h5>
                                    <h5 class="mb-1 font-weight-bolder">Date de fin</h5>
                                    <h5 class="mb-0 font-weight-bolder">Dernier entretien</h5>
                                </div>
                                <div>
                                    <h5 class="mb-1 font-weight-bolder">12/05/21</h5>
                                    <h5 class="mb-1 font-weight-bolder">12/07/21</h5>
                                    <h5 class="mb-0 font-weight-bolder">aujourd'hui</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ Statistics Card section-->

        </div>
    </div>
</div>
@include('layouts.script')
</body>
</html>

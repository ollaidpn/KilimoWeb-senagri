@extends('layouts.admin')

@section('styles')
 <!-- BEGIN: Vendor CSS-->
 <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/vendors.min.css')}}">

 <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/tables/datatable/dataTables.bootstrap4.min.css')}}">
 <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/tables/datatable/responsive.bootstrap4.min.css')}}">
 <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/pickers/flatpickr/flatpickr.min.css')}}">


@endsection

@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="mb-2 content-header-left col-md-9 col-12">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="float-left mb-0 content-header-title">Agriculture</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Tableau de bord</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Culture</a>
                                </li>
                                <li class="breadcrumb-item active"><a href="#">Tupes de culture</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrumb-right">
                    <div class="dropdown">
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="app-todo.html"><i class="mr-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="mr-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="mr-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="mr-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">


            <section id="basic-vertical-layouts">
                <div class="row">
                    <div class="col-md-4 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Ajouter un utilisateur ADMIN</h4>
                            </div>
                            <div class="card-body">
                                <form class="form form-vertical">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="first-name-vertical">Prénom</label>
                                                <input type="text" id="first-name-vertical" class="form-control" name="fname" placeholder="First Name" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="first-name-vertical">Nom</label>
                                                <input type="text" id="first-name-vertical" class="form-control" name="fname" placeholder="First Name" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="email-id-vertical">Email</label>
                                                <input type="email" id="email-id-vertical" class="form-control" name="email-id" placeholder="Email" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="contact-info-vertical">Téléphone</label>
                                                <input type="number" id="contact-info-vertical" class="form-control" name="contact" placeholder="Mobile" />
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button type="reset" class="mr-1 btn btn-primary">Ajouter</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Liste des utilisateur Admin</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr style="width: 100%">
                                                        <th style="width: 20%">Id</th>
                                                        <th style="width: 20%">Profile</th>
                                                        <th style="width: 20%">Prénom</th>
                                                        <th style="width: 20%">Nom</th>
                                                        <th style="width: 20%">Création</th>
                                                        <th style="width: 20%">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>043</td>
                                                        <td>Image</td>
                                                        <td>Elhadji Ndiouga</td>
                                                        <td>Diallo</td>
                                                        <td>11/04/2021</td>
                                                        <td>
                                                            <a href=""><i class="fas fa-edit"></i></a>
                                                            <a href=""><i class="fas fa-trash-alt"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </section>


        </div>
    </div>
</div>
@endsection

@section('script')
    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('assets/admin/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('assets/admin/vendors/js/ui/jquery.sticky.js')}}"></script>
    <!-- END: Page Vendor JS-->
    <script src="{{asset('assets/admin/vendors/js/tables/datatable/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/admin/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/admin/vendors/js/tables/datatable/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/admin/vendors/js/tables/datatable/responsive.bootstrap4.js')}}"></script>
    <script src="{{asset('assets/admin/vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>


@endsection

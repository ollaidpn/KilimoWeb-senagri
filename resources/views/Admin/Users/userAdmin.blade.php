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
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Paramètres</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Tableau de bord</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Paramètres</a>
                                </li>
                                <li class="breadcrumb-item active"><a href="#">Utilisateur admin</a>
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

        @include('includes.Global.messages')

            <section id="basic-vertical-layouts">
                <div class="row">
                    <div class="col-md-4 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Ajouter un utilisateur ADMIN</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{route('admin-user-admin-create')}}" method="POST" class="form form-vertical">
                                   @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="first-name-vertical">Prénom</label>
                                                <input type="text" id="first-name-vertical" class="form-control" name="prenom" placeholder="Exple: Pape Ndiouga" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="first-name-vertical">Nom</label>
                                                <input type="text" id="first-name-vertical" class="form-control" name="nom" placeholder="Exple: Diallo" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="email-id-vertical">Email</label>
                                                <input type="email" id="email-id-vertical" class="form-control" name="email" placeholder="Exple: nd.diallo@senagriculture.com" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="contact-info-vertical">Téléphone</label>
                                                <input type="number" id="contact-info-vertical" class="form-control" name="telephone" placeholder="Exple: 221770000000" />
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary mr-1">Ajouter</button>
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
                                                        <th style="width: 20%">Prénom</th>
                                                        <th style="width: 20%">Nom</th>
                                                        <th style="width: 20%">Téléphone</th>
                                                        <th style="width: 20%">Création</th>
                                                        <th style="width: 20%">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($Users as $user)
                                                        <tr>
                                                            <td>{{$user->id}}</td>
                                                            <td>{{$user->prenom}}</td>
                                                            <td>{{$user->nom}}</td>
                                                            <td>{{$user->telephone}}</td>
                                                            <td>{{$user->created_at}}</td>

                                                            <td>
                                                                <a href=""><i class="fa fa-pencil"></i></a>
                                                                <a href=""><i class="fa fa-trash-o"></i></a>
                                                            </td>
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

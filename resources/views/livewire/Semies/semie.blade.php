<div>
    @extends('layouts.admin')

    @section('styles')
        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/vendors/css/vendors.min.css') }}">

        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/admin/vendors/css/tables/datatable/dataTables.bootstrap4.min.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/admin/vendors/css/tables/datatable/responsive.bootstrap4.min.css') }}">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('assets/admin/vendors/css/pickers/flatpickr/flatpickr.min.css') }}">

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
                                        <li class="breadcrumb-item active"><a href="#">Type de Semie</a>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                        <div class="form-group breadcrumb-right">
                            <div class="dropdown">
                                <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                        data-feather="grid"></i></button>
                                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="app-todo.html"><i
                                            class="mr-1" data-feather="check-square"></i><span
                                            class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i
                                            class="mr-1" data-feather="message-square"></i><span
                                            class="align-middle">Chat</span></a><a class="dropdown-item"
                                        href="app-email.html"><i class="mr-1" data-feather="mail"></i><span
                                            class="align-middle">Email</span></a><a class="dropdown-item"
                                        href="app-calendar.html"><i class="mr-1" data-feather="calendar"></i><span
                                            class="align-middle">Calendar</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-body">


                    <section id="basic-vertical-layouts">
                        <div class="row">
                            <div class="col-md-4 col-12">
                                @if ($errors->any())
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif

                                    @if (session()->get('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            {{ session()->get('success') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif

                                {{-- Vue créer et modifier --}}

                                @if($updateMode)
                                    @include('livewire.Semies.semiEdit')
                                @else
                                    @include('livewire.Semies.semieCreate')
                                @endif
                            </div>
                            <div class="col-md-8 col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Liste des semies</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body card-dashboard">
                                            <div class="table-responsive rowb">
                                                <table class="table zero-configuration">
                                                    <thead>
                                                        <tr style="width: 100%; text-align: center">
                                                            <th style="width: 20%">Nom</th>
                                                            <th style="width: 20%">Type de Culture</th>
                                                            <th style="width: 20%">Description</th>
                                                            <th style="width: 20%">Image</th>
                                                            <th style="width: 20%">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            @foreach ($semies as $semie)
                                                        <tr>
                                                            <td>{{ $semie->nom_semie }}</td>
                                                            <td style="width: 100%; text-align: center">
                                                                {{ $semie->nom }}</td>
                                                            <td style="width: 100%; text-align: center">
                                                                {{ $semie->description }} </td>
                                                            <td style="width: 100%; text-align: center">
                                                                <span class="avatar">
                                                                    <img class="round" src="{{asset("image/semie")}}/{{ $semie->image }}" width="80" heigth="80" /></td>
                                                                </span>
                                                            <td class="table-buttons" style="width: 100%; text-align: center">
                                                                <a class="ml-2 btn btn-outline-info"
                                                                    href="{{ route('admin-type-semie-edit', $semie->id) }}"><i
                                                                        class="fas fa-edit"></i></a>
                                                                <form method="POST" action="{{ route('admin-type-semie-delete', $semie->id) }}">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="ml-2 btn btn-outline-danger">
                                                                        <i class="fas fa-trash-alt"></i>
                                                                    </button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                        @endforeach
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
        <script src="{{ asset('assets/admin/vendors/js/vendors.min.js') }}"></script>
        <!-- BEGIN Vendor JS-->

        <!-- BEGIN: Page Vendor JS-->
        <script src="{{ asset('assets/admin/vendors/js/ui/jquery.sticky.js') }}"></script>
        <!-- END: Page Vendor JS-->
        <script src="{{ asset('assets/admin/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/admin/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/admin/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('assets/admin/vendors/js/tables/datatable/responsive.bootstrap4.js') }}"></script>
        <script src="{{ asset('assets/admin/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
        <script>
            function previewFile(input){
                var file = $("input[type=file]").get(0).files[0];
                if(file){
                    var reader = new FileReader();
                    reader.onload = function(){
                        $("#imagePreview").attr("src", reader.result);
                    }
                    reader.readAsDataURL(file);
                }

            }
        </script>

    @endsection

</div>

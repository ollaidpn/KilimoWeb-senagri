@extends('layouts.admin')

@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="mb-2 content-header-left col-md-9 col-12">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="float-left mb-0 content-header-title">Infos Compte</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Admin</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Paramètres</a>
                                </li>
                                <li class="breadcrumb-item active"> Compte
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
            <!-- account setting page -->
            @if (session()->has('message'))
            <div class="p-2 alert alert-success alert-dismissible fade show" role="alert">
                {{ session('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <section id="page-account-settings">
                <div class="row">
                    <!-- left menu section -->
                    <div class="mb-2 col-md-3 mb-md-0">
                        <ul class="nav nav-pills flex-column nav-left">
                            <!-- general -->
                            <li class="nav-item">
                                <a class="nav-link active" id="account-pill-general" data-toggle="pill" href="#account-vertical-general" aria-expanded="true">
                                    <i data-feather="user" class="mr-1 font-medium-3"></i>
                                    <span class="font-weight-bold">Général</span>
                                </a>
                            </li>
                            <!-- change password -->
                            <li class="nav-item">
                                <a class="nav-link" id="account-pill-password" data-toggle="pill" href="#account-vertical-password" aria-expanded="false">
                                    <i data-feather="lock" class="mr-1 font-medium-3"></i>
                                    <span class="font-weight-bold">Mot de passe</span>
                                </a>
                            </li>
                            <!-- information -->
                            <li class="nav-item">
                                <a class="nav-link" id="account-pill-info" data-toggle="pill" href="#account-vertical-info" aria-expanded="false">
                                    <i data-feather="info" class="mr-1 font-medium-3"></i>
                                    <span class="font-weight-bold">Informations de compte</span>
                                </a>
                            </li>
                            <!-- social -->
                            <li class="nav-item">
                                <a class="nav-link" id="account-pill-social" data-toggle="pill" href="#account-vertical-social" aria-expanded="false">
                                    <i data-feather="link" class="mr-1 font-medium-3"></i>
                                    <span class="font-weight-bold">Réseaux sociaux</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <!--/ left menu section -->

                    <!-- right content section -->
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content">
                                    <!-- general tab -->
                                    <div role="tabpanel" class="tab-pane active" id="account-vertical-general" aria-labelledby="account-pill-general" aria-expanded="true">
                                        <!-- header media -->
                                        <div width="100%" class="text-center">
                                            <span class="avatar">
                                            {{-- <a href="javascript:void(0);" class="mr-25"> --}}
                                                <img src="" class="img-thumbnail" width="200px" height="200px">
                                           <!-- </a>-->
                                           </span>
                                            </div>
                                        <div class="media align-items-center" width="100%">
                                            <!-- upload and reset button -->
                                            <div class="ml-1 media-body mt-75 text-center">
                                                <form method="POST" action="/admin/profile/updateImage/{{$user->id}}" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <input value="{{$user->id}}" type="hidden" name="user_id"/>
                                                    <input type="file" id="account-upload" name="avatar" hidden accept="image/*" />
                                                    <label for="account-upload" class="btn btn-primary mt-2 mb-75 mr-75">changer
                                                    </label>
                                                    <button type="submit" class="mt-2 mr-1 btn btn-primary">Modifier</button>
                                                    @error('avatar') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                                                </form>
                                            </div>
                                            <!--/ upload and reset button -->
                                        </div>
                                        <!--/ header media -->

                                        <!-- form -->

                                        <form class="mt-2 validate-form" method="POST" action="/admin/profile/update/{{$user->id}}">
                                            @csrf
                                            @method('PATCH')
                                            <div class="row">
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-username">Prenom</label>
                                                        <input type="text" value="{{$user->prenom}}" class="form-control @error('prenom') is-invalid @enderror" id="account-username" name="prenom" placeholder="Exple: Pape Ndiouga" />
                                                        @error('prenom') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-name">Nom</label>
                                                        <input type="text" value="{{$user->nom}}" class="form-control @error('nom') is-invalid @enderror" id="account-name" name="nom" placeholder="Exple: Diallo"/>
                                                        @error('nom') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-e-mail">E-mail</label>
                                                        <input type="email" value="{{$user->email}}" class="form-control @error('email') is-invalid @enderror" id="account-e-mail" name="email" placeholder="Email" />
                                                        @error('email') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-company">Téléphone</label>
                                                        <input type="number"class="form-control @error('telephone') is-invalid @enderror" id="account-company" name="telephone" placeholder="" value="{{$user->telephone}}" />
                                                        @error('telephone') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                                                    </div>
                                                </div>
                                               {{--  <div class="col-12 mt-75">
                                                    <div class="alert alert-warning mb-50" role="alert">
                                                        <h4 class="alert-heading">Votre adress email n'est pas confirmé.</h4>
                                                        <div class="alert-body">
                                                            <a href="javascript: void(0);" class="alert-link">Renvoyer le mail de confirmation.</a>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                                <div class="col-12">
                                                    <button type="submit" class="mt-2 mr-1 btn btn-primary">Modifier</button>
                                                    {{-- <button type="reset" class="mt-2 btn btn-outline-secondary">Annuler</button> --}}
                                                </div>
                                            </div>
                                        </form>
                                        <!--/ form -->
                                    </div>
                                    <!--/ general tab -->

                                    <!-- change password -->
                                    <div class="tab-pane fade" id="account-vertical-password" role="tabpanel" aria-labelledby="account-pill-password" aria-expanded="false">
                                        <!-- form -->
                                        <form class="validate-form" method="POST" action="{{ route('admin-change-password') }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-old-password">Ancien mot de passe</label>
                                                        <div class="input-group form-password-toggle input-group-merge">
                                                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="account-old-password" name="password" placeholder="" />
                                                            <div class="input-group-append">
                                                                <div class="cursor-pointer input-group-text">
                                                                    <i data-feather="eye"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @error('password') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-new-password">Nouveau Mot de passe</label>
                                                        <div class="input-group form-password-toggle input-group-merge">
                                                            <input type="password" id="account-new-password" name="new_password" class="form-control @error('new_password') is-invalid @enderror" placeholder="" />
                                                            <div class="input-group-append">
                                                                <div class="cursor-pointer input-group-text">
                                                                    <i data-feather="eye"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @error('new_password') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-retype-new-password">Confirmation du nouveau mot de passe</label>
                                                        <div class="input-group form-password-toggle input-group-merge">
                                                            <input type="password" class="form-control @error('confirm_new_password') is-invalid @enderror" id="account-retype-new-password" name="confirm_new_password" placeholder="" />
                                                            <div class="input-group-append">
                                                                <div class="cursor-pointer input-group-text"><i data-feather="eye"></i></div>
                                                            </div>
                                                        </div>
                                                        @error('confirm_new_password') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <button type="submit" class="mt-1 mr-1 btn btn-primary">Enregistrer</button>
                                                    <button type="reset" class="mt-1 btn btn-outline-secondary">Annuler</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!--/ form -->
                                    </div>
                                    <!--/ change password -->

                                    <!-- information -->
                                    <div class="tab-pane fade" id="account-vertical-info" role="tabpanel" aria-labelledby="account-pill-info" aria-expanded="false">
                                        <!-- form -->
                                        @if (count($abouts) > 0 )
                                        <form class="validate-form" method="POST" action="/admin/profile/system/update/{{$user->id}}">
                                            @csrf
                                            @method('PUT')
                                            <div class="row">
                                                @foreach ($abouts as $about)
                                                <div class="col-12">
                                                    <input value={{$user->id}} name="user_id" type="hidden" />
                                                    <div class="form-group">
                                                        <label for="activite_principale">Activité principale</label>
                                                        <textarea class="form-control @error('activite_principale') is-invalid @enderror" name="activite_principale" id="activite_principale" rows="3" placeholder="Décrire vos activité principale">
                                                            {{$about->activite_principale}}
                                                        </textarea>
                                                        @error('activite_principale') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="accountTextarea">A propos de moi ou de mon champs</label>
                                                        <textarea class="form-control @error('a_propos') is-invalid @enderror" name="a_propos" id="accountTextarea" rows="3" placeholder="Faites nous une briève description de vous ou de vos champs">
                                                            {{$about->a_propos}}
                                                        </textarea>
                                                        @error('a_propos') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-birth-date">Date de naissance</label>
                                                        <input type="date" value="{{$about->date_naissance}}" class="form-control flatpickr @error('date_naissance') is-invalid @enderror" placeholder="" id="account-birth-date" name="date_naissance" />
                                                        @error('date_naissance') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="situation">Situation matrimoniale</label>
                                                        <select name="situation_matrimoniale"  class="form-control @error('situation_matrimoniale') is-invalid @enderror" id="situation">
                                                            <option {{ ($about->situation_matrimoniale) == 'Marié(e)' ? 'selected' : '' }} value="Marié(e)">Marié(e) </option>
                                                            <option {{ ($about->situation_matrimoniale) == 'Célibataire(e)' ? 'selected' : '' }} value="Célibataire(e)">Célibataire(e)</option>
                                                            <option {{ ($about->situation_matrimoniale) == 'Veuve' ? 'selected' : '' }} value="Veuve">Veuve</option>
                                                            <option {{ ($about->situation_matrimoniale) == 'Divorcée' ? 'selected' : '' }} value="Divorcée">Divorcée</option>
                                                        </select>
                                                        @error('situation_matrimoniale') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="pays">Pays</label>
                                                        <select name="pays" value="{{$about->pays}}" class="form-control @error('pays') is-invalid @enderror" id="pays">
                                                            <option {{ ($about->pays) == 'Sénégal' ? 'selected' : '' }} value="Sénégal">Sénégal</option>
                                                            <option {{ ($about->pays) == 'France' ? 'selected' : '' }} value="France">France</option>
                                                            <option {{ ($about->pays) == 'Canada' ? 'selected' : '' }} value="Canada">Canada</option>
                                                        </select>
                                                        @error('pays') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-website">Adresse</label>
                                                        <input type="text" value="{{$about->adresse}}" class="form-control @error('adresse') is-invalid @enderror" name="adresse" id="account-website" placeholder="address" />
                                                        @error('adresse') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                                                    </div>
                                                </div>
                                                @endforeach
                                                <div class="col-12">
                                                    <button type="submit" class="mt-1 mr-1 btn btn-primary">Modifier</button>
                                                    <button type="reset" class="mt-1 btn btn-outline-secondary">Annuler</button>
                                                </div>
                                            </div>
                                        </form>
                                        @else
                                        <form class="validate-form" method="POST" action="{{ route('add-infos-syteme') }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-12">
                                                    <input value={{$user->id}} name="user_id" type="hidden" />
                                                    <div class="form-group">
                                                        <label for="activite_principale">Activité principale</label>
                                                        <textarea class="form-control @error('activite_principale') is-invalid @enderror" name="activite_principale" id="activite_principale" rows="3" placeholder="Décrire vos activité principale"></textarea>
                                                        @error('activite_principale') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="accountTextarea">A propos de moi ou de mon champs</label>
                                                        <textarea class="form-control @error('a_propos') is-invalid @enderror" name="a_propos" id="accountTextarea" rows="3" placeholder="Faites nous une briève description de vous ou de vos champs"></textarea>
                                                        @error('a_propos') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-birth-date">Date de naissance</label>
                                                        <input type="date" class="form-control flatpickr @error('date_naissance') is-invalid @enderror" placeholder="" id="account-birth-date" name="date_naissance" />
                                                        @error('date_naissance') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="situation">Situation matrimoniale</label>
                                                        <select name="situation_matrimoniale" class="form-control @error('situation_matrimoniale') is-invalid @enderror" id="situation">
                                                            <option value="Marié(e)">Marié(e) </option>
                                                            <option value="Célibataire(e)">Célibataire(e)</option>
                                                            <option value="Veuve">Veuve</option>
                                                            <option value="Divorcée">Divorcée</option>
                                                        </select>
                                                        @error('situation_matrimoniale') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="pays">Pays</label>
                                                        <select name="pays" class="form-control @error('pays') is-invalid @enderror" id="pays">
                                                            <option value="Sénégal">Sénégal</option>
                                                            <option value="France">France</option>
                                                            <option value="Canada">Canada</option>
                                                        </select>
                                                        @error('pays') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-website">Adresse</label>
                                                        <input type="text" class="form-control @error('adresse') is-invalid @enderror" name="adresse" id="account-website" placeholder="address" />
                                                        @error('adresse') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                                                    </div>
                                                </div>

                                               <small> Ajouter tout autre infos de compte nécessaire</small>
                                                <div class="col-12">
                                                    <button type="submit" class="mt-1 mr-1 btn btn-primary">Enregistrer</button>
                                                    <button type="reset" class="mt-1 btn btn-outline-secondary">Annuler</button>
                                                </div>
                                            </div>
                                        </form>
                                        @endif

                                        <!--/ form -->
                                    </div>
                                    <!--/ information -->

                                    <!-- social -->
                                    <div class="tab-pane fade" id="account-vertical-social" role="tabpanel" aria-labelledby="account-pill-social" aria-expanded="false">
                                        <!-- form -->
                                        @if (count($sociales) > 0 )
                                            <form class="validate-form" action="/admin/profile/addSociale/{{$user->id}}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <div class="row">
                                                    <!-- social header -->
                                                    @foreach ($sociales as $sociale)
                                                    <div class="col-12">
                                                        <div class="mb-2 d-flex align-items-center">
                                                            <i data-feather="link" class="font-medium-3"></i>
                                                            <h4 class="mb-0 ml-75">Social Links</h4>
                                                        </div>
                                                    </div>
                                                    <!-- twitter link input -->
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="account-instagram">Instagram</label>
                                                            <input type="text" value="{{$sociale->instagram}}" name="instagram" id="account-instagram" class="form-control @error('instagram') is-invalid @enderror" placeholder="ajouter un lien de votre profile" value="" />
                                                            <input value={{$user->id}} name="user_id" type="hidden" />
                                                            @error('instagram') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                                                        </div>
                                                    </div>
                                                    <!-- facebook link input -->
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="account-facebook">Facebook</label>
                                                            <input type="text" value="{{$sociale->facebook}}" name="facebook" id="account-facebook" class="form-control @error('facebook') is-invalid @enderror" placeholder="ajouter un lien de votre profile" />
                                                            @error('facebook') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                                                        </div>
                                                    </div>

                                                    <!-- linkedin link input -->
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="account-linkedin">LinkedIn</label>
                                                            <input type="text" value="{{$sociale->linkedin}}" name="linkedin" id="account-linkedin" class="form-control @error('linkedin') is-invalid @enderror" placeholder="ajouter un lien de votre profile"/>
                                                            @error('linkedin') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                                                        </div>
                                                    </div>

                                                    <!-- linkedin link input -->
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="account-linkedin">Twitter</label>
                                                            <input type="text" value="{{$sociale->twitter}}" name="twitter" id="account-linkedin" class="form-control @error('twitter') is-invalid @enderror" placeholder="ajouter un lien de votre profile"/>
                                                            @error('twitter') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                                                        </div>
                                                    </div>
                                                    <!-- divider -->
                                                    <div class="col-12">
                                                        <hr class="my-2" />
                                                    </div>

                                                    <div class="col-12">
                                                        <!-- submit and cancel button -->
                                                        <button type="submit" class="mt-1 mr-1 btn btn-primary">Modifier</button>
                                                    </div>
                                                    @endforeach

                                                </div>
                                            </form>
                                            <!--/ form -->
                                        @else
                                        <form class="validate-form" method="POST" action="{{ route('add-sociale_networks') }}">
                                            @csrf
                                            <div class="row">
                                                <!-- social header -->
                                                <div class="col-12">
                                                    <div class="mb-2 d-flex align-items-center">
                                                        <i data-feather="link" class="font-medium-3"></i>
                                                        <h4 class="mb-0 ml-75">Social Links</h4>
                                                    </div>
                                                </div>
                                                <!-- twitter link input -->
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-instagram">Instagram</label>
                                                        <input type="text" name="instagram" id="account-instagram" class="form-control @error('instagram') is-invalid @enderror" placeholder="ajouter un lien de votre profile" value="" />
                                                        <input value={{$user->id}} name="user_id" type="hidden" />
                                                        @error('instagram') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                                                    </div>
                                                </div>
                                                <!-- facebook link input -->
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-facebook">Facebook</label>
                                                        <input type="text" name="facebook" id="account-facebook" class="form-control @error('facebook') is-invalid @enderror" placeholder="ajouter un lien de votre profile" />
                                                        @error('facebook') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                                                    </div>
                                                </div>

                                                <!-- linkedin link input -->
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-linkedin">LinkedIn</label>
                                                        <input type="text" name="linkedin" id="account-linkedin" class="form-control @error('linkedin') is-invalid @enderror" placeholder="ajouter un lien de votre profile"/>
                                                        @error('linkedin') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                                                    </div>
                                                </div>

                                                 <!-- linkedin link input -->
                                                 <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-linkedin">Twitter</label>
                                                        <input type="text" name="twitter" id="account-linkedin" class="form-control @error('twitter') is-invalid @enderror" placeholder="ajouter un lien de votre profile"/>
                                                        @error('twitter') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                                                    </div>
                                                </div>
                                                <!-- divider -->
                                                <div class="col-12">
                                                    <hr class="my-2" />
                                                </div>

                                                <div class="col-12">
                                                    <!-- submit and cancel button -->
                                                    <button type="submit" class="mt-1 mr-1 btn btn-primary">Enregistrer</button>
                                                    <button type="reset" class="mt-1 btn btn-outline-secondary">Annuler</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!--/ form -->
                                        @endif
                                    </div>
                                    <!--/ social -->

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ right content section -->
                </div>
            </section>
            <!-- / account setting page -->
        </div>
    </div>
</div>
<!-- END: Content-->
@endsection

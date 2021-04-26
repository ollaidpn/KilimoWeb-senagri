@extends('layouts.admin')

@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Infos Compte</h2>
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
            <section id="page-account-settings">
                <div class="row">
                    <!-- left menu section -->
                    <div class="col-md-3 mb-2 mb-md-0">
                        <ul class="nav nav-pills flex-column nav-left">
                            <!-- general -->
                            <li class="nav-item">
                                <a class="nav-link active" id="account-pill-general" data-toggle="pill" href="#account-vertical-general" aria-expanded="true">
                                    <i data-feather="user" class="font-medium-3 mr-1"></i>
                                    <span class="font-weight-bold">Général</span>
                                </a>
                            </li>
                            <!-- change password -->
                            <li class="nav-item">
                                <a class="nav-link" id="account-pill-password" data-toggle="pill" href="#account-vertical-password" aria-expanded="false">
                                    <i data-feather="lock" class="font-medium-3 mr-1"></i>
                                    <span class="font-weight-bold">Mot de passe</span>
                                </a>
                            </li>
                            <!-- information -->
                            <li class="nav-item">
                                <a class="nav-link" id="account-pill-info" data-toggle="pill" href="#account-vertical-info" aria-expanded="false">
                                    <i data-feather="info" class="font-medium-3 mr-1"></i>
                                    <span class="font-weight-bold">Informations de compte</span>
                                </a>
                            </li>
                            <!-- social -->
                            <li class="nav-item">
                                <a class="nav-link" id="account-pill-social" data-toggle="pill" href="#account-vertical-social" aria-expanded="false">
                                    <i data-feather="link" class="font-medium-3 mr-1"></i>
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
                                        <div class="media align-items-center">
                                            <span class="avatar">
                                            {{-- <a href="javascript:void(0);" class="mr-25"> --}}
                                                <img class="round" src="../../../app-assets/images/portrait/small/avatar-s-11.jpg" id="account-upload-img" class="rounded mr-50" alt="profile image" height="80" width="80" />
                                           <!-- </a>-->
                                           </span>
                                            <!-- upload and reset button -->
                                            <div class="media-body mt-75 ml-1">
                                                <form>
                                                    <label for="account-upload" class="btn btn-sm btn-primary mb-75 mr-75">Changer</label>
                                                    <input type="file" id="account-upload" hidden accept="image/*" />
                                                    <!--   <button class="btn btn-sm btn-outline-secondary mb-75">restaurer</button> -->
                                                    <p>Extension autorisés JPG, GIF or PNG. taille max: 200kB</p>
                                                    @error('avatar') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                                                </form>
                                            </div>
                                            <!--/ upload and reset button -->
                                        </div>
                                        <!--/ header media -->

                                        <!-- form -->
                                        <form class="validate-form mt-2">
                                            <div class="row">
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-username">Prenom</label>
                                                        <input type="text" value={{$user->prenom}} class="form-control @error('prenom') is-invalid @enderror" id="account-username" name="prenom" placeholder="Exple: Pape Ndiouga" value="" />
                                                        @error('prenom') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-name">Nom</label>
                                                        <input type="text" value={{$user->nom}} class="form-control @error('nom') is-invalid @enderror" id="account-name" name="nom" placeholder="Exple: Diallo" value="" />
                                                        @error('nom') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-e-mail">E-mail</label>
                                                        <input type="email" value={{$user->email}} disabled class="form-control @error('email') is-invalid @enderror" id="account-e-mail" name="email" placeholder="Email" value="nd.diallo@senagriculture.com" />
                                                        @error('email') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-company">Téléphone</label>
                                                        <input type="number"class="form-control @error('telephone') is-invalid @enderror" id="account-company" name="telephone" placeholder="" value={{$user->telephone}} />
                                                        @error('telephone') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 mt-75">
                                                    <div class="alert alert-warning mb-50" role="alert">
                                                        <h4 class="alert-heading">Votre adress email n'est pas confirmé.</h4>
                                                        <div class="alert-body">
                                                            <a href="javascript: void(0);" class="alert-link">Renvoyer le mail de confirmation.</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-primary mt-2 mr-1">Modifier</button>
                                                    {{-- <button type="reset" class="btn btn-outline-secondary mt-2">Annuler</button> --}}
                                                </div>
                                            </div>
                                        </form>
                                        <!--/ form -->
                                    </div>
                                    <!--/ general tab -->

                                    <!-- change password -->
                                    <div class="tab-pane fade" id="account-vertical-password" role="tabpanel" aria-labelledby="account-pill-password" aria-expanded="false">
                                        <!-- form -->
                                        <form class="validate-form">
                                            <div class="row">
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-old-password">Ancien mot de passe</label>
                                                        <div class="input-group form-password-toggle input-group-merge">
                                                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="account-old-password" name="password" placeholder="" />
                                                            <div class="input-group-append">
                                                                <div class="input-group-text cursor-pointer">
                                                                    <i data-feather="eye"></i>
                                                                </div>
                                                            </div>
                                                            @error('password') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-new-password">Nouveau Mot de passe</label>
                                                        <div class="input-group form-password-toggle input-group-merge">
                                                            <input type="password" id="account-new-password" name="new-password" class="form-control @error('new-password') is-invalid @enderror" placeholder="" />
                                                            <div class="input-group-append">
                                                                <div class="input-group-text cursor-pointer">
                                                                    <i data-feather="eye"></i>
                                                                </div>
                                                            </div>
                                                            @error('new-password') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-retype-new-password">Confirmation du nouveau mot de passe</label>
                                                        <div class="input-group form-password-toggle input-group-merge">
                                                            <input type="password" class="form-control @error('confirm-new-password') is-invalid @enderror" id="account-retype-new-password" name="confirm-new-password" placeholder="" />
                                                            <div class="input-group-append">
                                                                <div class="input-group-text cursor-pointer"><i data-feather="eye"></i></div>
                                                            </div>
                                                            @error('confirm-new-password') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-primary mr-1 mt-1">Enregistrer</button>
                                                    <button type="reset" class="btn btn-outline-secondary mt-1">Annuler</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!--/ form -->
                                    </div>
                                    <!--/ change password -->

                                    <!-- information -->
                                    <div class="tab-pane fade" id="account-vertical-info" role="tabpanel" aria-labelledby="account-pill-info" aria-expanded="false">
                                        <!-- form -->
                                        <form class="validate-form" method="POST" action="{{ route('add-infos-syteme') }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-12">
                                                    <input value={{$user->id}} name="user_id" type="text" />
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
                                                        <select class="form-control @error('pays') is-invalid @enderror" id="pays">
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
                                                    <button type="submit" class="btn btn-primary mt-1 mr-1">Enregistrer</button>
                                                    <button type="reset" class="btn btn-outline-secondary mt-1">Annuler</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!--/ form -->
                                    </div>
                                    <!--/ information -->

                                    <!-- social -->
                                    <div class="tab-pane fade" id="account-vertical-social" role="tabpanel" aria-labelledby="account-pill-social" aria-expanded="false">
                                        <!-- form -->
                                        <form class="validate-form">
                                            <div class="row">
                                                <!-- social header -->
                                                <div class="col-12">
                                                    <div class="d-flex align-items-center mb-2">
                                                        <i data-feather="link" class="font-medium-3"></i>
                                                        <h4 class="mb-0 ml-75">Social Links</h4>
                                                    </div>
                                                </div>
                                                <!-- twitter link input -->
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-instagram">Instagram</label>
                                                        <input type="text" id="account-instagram" class="form-control @error('nom_semie') is-invalid @enderror" placeholder="ajouter un lien de votre profile" value="" />
                                                        @error('nom_semie') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                                                    </div>
                                                </div>
                                                <!-- facebook link input -->
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-facebook">Facebook</label>
                                                        <input type="text" id="account-facebook" class="form-control @error('nom_semie') is-invalid @enderror" placeholder="ajouter un lien de votre profile" />
                                                        @error('nom_semie') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                                                    </div>
                                                </div>

                                                <!-- linkedin link input -->
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-linkedin">LinkedIn</label>
                                                        <input type="text" id="account-linkedin" class="form-control @error('nom_semie') is-invalid @enderror" placeholder="ajouter un lien de votre profile"/>
                                                        @error('nom_semie') <span class="error"><p style="color:red">{{ $message }}</p></span> @enderror
                                                    </div>
                                                </div>


                                                <!-- divider -->
                                                <div class="col-12">
                                                    <hr class="my-2" />
                                                </div>


                                                <div class="col-12">
                                                    <!-- submit and cancel button -->
                                                    <button type="submit" class="btn btn-primary mr-1 mt-1">Enregistrer</button>
                                                    <button type="reset" class="btn btn-outline-secondary mt-1">Annuler</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!--/ form -->
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

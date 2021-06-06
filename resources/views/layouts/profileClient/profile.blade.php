@include('layouts.header')
<body class="vertical-layout vertical-menu-modern navbar-floating footer-static " data-open="click"
    data-menu="vertical-menu-modern" data-col="">
    @include('includes.Client.menu')
        <div class="app-content content ">
            <div class="content-overlay"></div>
            <div class="header-navbar-shadow"></div>
            <div class="content-wrapper">
                <div class="content-header row">
                    <div class="mb-2 content-header-left col-md-9 col-12">
                        <div class="row breadcrumbs-top">
                            <div class="col-12">
                                <h2 class="float-left mb-0 content-header-title">Paramètres du compte</h2>
                                <div class="breadcrumb-wrapper">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#">Pages</a>
                                        </li>
                                        <li class="breadcrumb-item active"> Paramètres du compte
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
                                            <span class="font-weight-bold">Changer le mot de passe</span>
                                        </a>
                                    </li>
                                    <!-- information -->
                                    <li class="nav-item">
                                        <a class="nav-link" id="account-pill-info" data-toggle="pill" href="#account-vertical-info" aria-expanded="false">
                                            <i data-feather="info" class="mr-1 font-medium-3"></i>
                                            <span class="font-weight-bold">Informations</span>
                                        </a>
                                    </li>
                                    <!-- social -->
                                    <li class="nav-item">
                                        <a class="nav-link" id="account-pill-social" data-toggle="pill" href="#account-vertical-social" aria-expanded="false">
                                            <i data-feather="link" class="mr-1 font-medium-3"></i>
                                            <span class="font-weight-bold">Sociale</span>
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
                                                <div class="media">
                                                    <a href="javascript:void(0);" class="mr-25">
                                                        <img src="../../../app-assets/images/portrait/small/avatar-s-11.jpg" id="account-upload-img" class="rounded mr-50" alt="profile image" height="80" width="80" />
                                                    </a>
                                                    <!-- upload and reset button -->
                                                    <div class="ml-1 media-body mt-75">
                                                        <label for="account-upload" class="btn btn-sm btn-primary mb-75 mr-75">Upload</label>
                                                        <input type="file" id="account-upload" hidden accept="image/*" />
                                                        {{-- <button class="btn btn-sm btn-outline-secondary mb-75">Reset</button> --}}
                                                        <p>JPG, GIF ou PNG autorisés. Taille maximale de 800 Ko</p>
                                                    </div>
                                                    <!--/ upload and reset button -->
                                                </div>
                                                <!--/ header media -->

                                                <!-- form -->
                                                <form class="mt-2 validate-form">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="account-username">Prenom</label>
                                                                <input type="text" class="form-control" id="account-username" name="username" placeholder="Username" value="johndoe" />
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="account-name">Nom</label>
                                                                <input type="text" class="form-control" id="account-name" name="name" placeholder="Name" value="John Doe" />
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="account-e-mail">E-mail</label>
                                                                <input type="email" class="form-control" id="account-e-mail" name="email" placeholder="Email" value="granger007@hogward.com" />
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="account-company">Téléphone</label>
                                                                <input type="text" class="form-control" id="account-company" name="company" placeholder="Company name" value="Crystal Technologies" />
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-75">
                                                            <div class="alert alert-warning mb-50" role="alert">
                                                                {{-- <h4 class="alert-heading">Your email is not confirmed. Please check your inbox.</h4> --}}
                                                                {{-- <div class="alert-body">
                                                                    <a href="javascript: void(0);" class="alert-link">Resend confirmation</a>
                                                                </div> --}}
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <button type="submit" class="mt-2 mr-1 btn btn-primary">Sauvegarder les modifications</button>
                                                            {{-- <button type="reset" class="mt-2 btn btn-outline-secondary">Cancel</button> --}}
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
                                                        <div class="col-12 col-lg-12">
                                                            <div class="form-group">
                                                                <label for="account-old-password">ancien mot de passe</label>
                                                                <div class="input-group form-password-toggle input-group-merge">
                                                                    <input type="password" class="form-control" id="account-old-password" name="password" placeholder="ancien mot de passe" />
                                                                    <div class="input-group-append">
                                                                        <div class="cursor-pointer input-group-text">
                                                                            <i data-feather="eye"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 col-lg-12">
                                                            <div class="form-group">
                                                                <label for="account-new-password">nouveau mot de passe</label>
                                                                <div class="input-group form-password-toggle input-group-merge">
                                                                    <input type="password" id="account-new-password" name="new-password" class="form-control" placeholder="nouveau mot de passe" />
                                                                    <div class="input-group-append">
                                                                        <div class="cursor-pointer input-group-text">
                                                                            <i data-feather="eye"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-lg-12">
                                                            <div class="form-group">
                                                                <label for="account-retype-new-password">Re-taper le nouveau mot de passe</label>
                                                                <div class="input-group form-password-toggle input-group-merge">
                                                                    <input type="password" class="form-control" id="account-retype-new-password" name="confirm-new-password" placeholder="Re-taper le nouveau mot de passe" />
                                                                    <div class="input-group-append">
                                                                        <div class="cursor-pointer input-group-text"><i data-feather="eye"></i></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <button type="submit" class="mt-1 mr-1 btn btn-primary">Sauvegarder les modifications</button>
                                                            <button type="reset" class="mt-1 btn btn-outline-secondary">Cancel</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!--/ form -->
                                            </div>
                                            <!--/ change password -->

                                            <!-- information -->
                                            <div class="tab-pane fade" id="account-vertical-info" role="tabpanel" aria-labelledby="account-pill-info" aria-expanded="false">
                                                <!-- form -->
                                                <form class="validate-form">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="accountTextarea">Bio</label>
                                                                <textarea class="form-control" id="accountTextarea" rows="4" placeholder="Your Bio data here..."></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="account-birth-date">Date de naissance</label>
                                                                <input type="text" class="form-control flatpickr" placeholder="Date de naissance" id="account-birth-date" name="dob" />
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="accountSelect">Pays</label>
                                                                <select class="form-control" id="accountSelect">
                                                                    <option>Senegal</option>
                                                                    <option>Mauritanie</option>
                                                                    <option>Mali</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="account-website">Ville</label>
                                                                <input type="text" class="form-control" name="website" id="account-website" placeholder="Website address" />
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="account-phone">Adresse</label>
                                                                <input type="text" class="form-control" id="account-phone" placeholder="Adresse"/>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <button type="submit" class="mt-1 mr-1 btn btn-primary">Sauvegarder les modifications</button>
                                                            <button type="reset" class="mt-1 btn btn-outline-secondary">Cancel</button>
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
                                                            <div class="mb-2 d-flex align-items-center">
                                                                <i data-feather="link" class="font-medium-3"></i>
                                                                <h4 class="mb-0 ml-75">Social Links</h4>
                                                            </div>
                                                        </div>
                                                        <!-- twitter link input -->
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="account-twitter">Twitter</label>
                                                                <input type="text" id="account-twitter" class="form-control" placeholder="Add link" value="https://www.twitter.com" />
                                                            </div>
                                                        </div>
                                                        <!-- facebook link input -->
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="account-facebook">Facebook</label>
                                                                <input type="text" id="account-facebook" class="form-control" placeholder="Add link" />
                                                            </div>
                                                        </div>
                                                        <!-- google plus input -->
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="account-google">Instagram</label>
                                                                <input type="text" id="account-google" class="form-control" placeholder="Add link" />
                                                            </div>
                                                        </div>
                                                        <!-- linkedin link input -->
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="account-linkedin">LinkedIn</label>
                                                                <input type="text" id="account-linkedin" class="form-control" placeholder="Add link" value="https://www.linkedin.com" />
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <!-- submit and cancel button -->
                                                            <button type="submit" class="mt-1 mr-1 btn btn-primary">Ajouter</button>
                                                            <button type="reset" class="mt-1 btn btn-outline-secondary">Cancel</button>
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
        @include('layouts.script')
    </body>
</html>
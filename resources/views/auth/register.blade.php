@extends('layouts.clientAuth')

@section('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-v2">
                    <div class="m-0 auth-inner row">
                        <!-- Brand logo-->
                        <a class="brand-logo" href="javascript:void(0);">
                            {{-- <svg viewBox="0 0 139 95" version="1.1" xmlns="{{ asset('assets/senagri.jpg') }}" xmlns:xlink="{{ asset('assets/senagri.jpg') }}" height="28">
                                <defs>
                                <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                                    <stop stop-color="#000000" offset="0%"></stop>
                                    <stop stop-color="#FFFFFF" offset="100%"></stop>
                                </lineargradient>
                                <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                                    <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                    <stop stop-color="#FFFFFF" offset="100%"></stop>
                                </lineargradient>
                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                    <g id="Group" transform="translate(400.000000, 178.000000)">
                                    <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill: currentColor"></path>
                                    <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                                    <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                                    <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                                    <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                    </g>
                                </g>
                                </g>
                            </svg> --}}
                            <h2 class="ml-1 brand-text text-primary">
                                <img src="{{ asset('assets/senagri.jpg') }}" height="80" />Agriculture
                            </h2>
                        </a>
                        <!-- /Brand logo-->
                        <!-- Left Text-->
                        <div class="p-5 d-none d-lg-flex col-lg-8 align-items-center">
                            <div class="px-5 w-100 d-lg-flex align-items-center justify-content-center">
                                <img class="img-fluid" src="{{ asset('assets/logokilimo.png') }}" alt="Login V2" />
                            </div>
                        </div>
                        <!-- /Left Text-->
                        <!-- Login-->
                        <div class="px-2 d-flex col-lg-4 align-items-center auth-bg p-lg-5">
                            <div class="mx-auto col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2">
                                <h2 class="mb-1 card-title font-weight-bold">Bienvenue sur Kilimo! 👋</h2>
                                <p class="mb-2 card-text">Connectez-vous pour suivre l'évolution de votre projet !</p>
                                <form class="mt-2 auth-login-form" action="{{ route('register') }}" method="POST">
                                    @csrf
                                    <input value="0" type="hidden" name="role_id"/>
                                    <div class="form-group">
                                        <label class="form-label" for="login-prenom">Prenom</label>
                                        <input class="form-control @error('prenom') is-invalid @enderror" id="login-email"
                                            type="text" name="prenom" placeholder="Ibrahima"
                                            aria-describedby="login-prenom" value="{{ old('prenom') }}" required
                                            autocomplete="prenom" autofocus tabindex="1" />
                                        @error('prenom')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="login-nom">Nom</label>
                                        <input class="form-control @error('nom') is-invalid @enderror" id="login-email"
                                            type="text" name="nom" placeholder="Njaay"
                                            aria-describedby="login-nom" value="{{ old('nom') }}" required
                                            autocomplete="nom" autofocus tabindex="1" />
                                        @error('nom')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="login-telephone">Téléphone</label>
                                        <input class="form-control @error('telephone') is-invalid @enderror" id="login-telephone"
                                            type="tel" name="telephone" placeholder="776789100"
                                            aria-describedby="login-telephone" value="{{ old('telephone') }}" required
                                            autocomplete="telephone" autofocus tabindex="1" />
                                        @error('telephone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="login-email">Email</label>
                                        <input class="form-control @error('email') is-invalid @enderror" id="login-email"
                                            type="email" name="email" placeholder="john@example.com"
                                            aria-describedby="login-email" value="{{ old('email') }}" required
                                            autocomplete="email" autofocus tabindex="1" />
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="d-flex justify-content-between">
                                            <label for="login-password">Mot de passe</label>
                                        </div>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input
                                                class="form-control form-control-merge @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password" id="login-password"
                                                type="password" placeholder="" aria-describedby="login-password"
                                                tabindex="2" />
                                            <div class="input-group-append"><span class="cursor-pointer input-group-text"><i
                                                        data-feather="eye"></i></span></div>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="d-flex justify-content-between">
                                            <label for="login-password">Confirmer mot de passe</label>
                                        </div>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input
                                                class="form-control form-control-merge @error('password_confirmation') is-invalid @enderror"
                                                name="password_confirmation" required autocomplete="current-password_confirmation" id="login-password_confirmation"
                                                type="password" placeholder="" aria-describedby="login-password_confirmation"
                                                tabindex="2" />
                                            <div class="input-group-append"><span class="cursor-pointer input-group-text"><i
                                                        data-feather="eye"></i></span></div>
                                            @error('password_confirmation')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" id="register-privacy-policy" type="checkbox" name="remember" id="remember" required/>
                                            <label class="custom-control-label" for="register-privacy-policy">J'accepte les<a href="javascript:void(0);">&nbsp;conditions d'abonnements</a></label>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary btn-block" tabindex="4">S'inscrire</button>
                                </form>
                                <p class="mt-2 text-center"><span>Déjà un compte?</span><a
                                        href="{{ route('login') }}"><span>&nbsp;Se Connecter</span></a></p>
                                <div class="my-2 divider">
                                    <div class="divider-text">or</div>
                                </div>
                                <div class="auth-footer-btn d-flex justify-content-center">
                                    <a class="btn btn-facebook" href="javascript:void(0)"><i data-feather="facebook"></i></a>
                                    <a class="btn btn-twitter white" href="javascript:void(0)"><i data-feather="twitter"></i></a>
                                    <a class="btn btn-google" href="javascript:void(0)"><i data-feather="mail"></i></a>
                                    <a class="btn btn-github" href="javascript:void(0)"><i data-feather="github"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- /Login-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

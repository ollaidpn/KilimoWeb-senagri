<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">



<!-- Mirrored from appbeats.themetags.com/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Mar 2020 15:24:30 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta description -->
    <meta name="description" content="Site officiel de présentationde l'application kilimo.">
    <meta name="author" content="ThemeTags">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" />
    <!-- website name -->
    <meta property="og:site" content="" />
    <!-- website link -->
    <meta property="og:title" content="" />
    <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" />
    <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" />
    <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" />
    <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!--title-->
    <title>Kilimo |Présentation</title>

    <!--favicon icon-->
    <link rel="icon" href="img/favicon.png" type="image/png" sizes="16x16">


    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7COpen+Sans&amp;display=swap" rel="stylesheet">

    <!--Bootstrap css-->
    <link rel="stylesheet" href="{{asset('assets/kilimo/css/bootstrap.min.css')}}">
    <!--Magnific popup css-->
    <link rel="stylesheet" href="{{asset('assets/kilimo/css/magnific-popup.css')}}">
    <!--Themify icon css-->
    <link rel="stylesheet" href="{{asset('assets/kilimo/css/themify-icons.css')}}">
    <!--animated css-->
    <link rel="stylesheet" href="{{asset('assets/kilimo/css/animate.min.css')}}">
    <!--ytplayer css-->
    <link rel="stylesheet" href="{{asset('assets/kilimo/css/jquery.mb.YTPlayer.min.css')}}">
    <!--Owl carousel css-->
    <link rel="stylesheet" href="{{asset('assets/kilimo/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/kilimo/css/owl.theme.default.min.css')}}">
    <!--responsive css-->
    <link rel="stylesheet" href="{{asset('assets/kilimo/css/responsive.css')}}">
    <!--custom css-->
    <link rel="stylesheet" href="{{asset('assets/kilimo/css/style.css')}}">

</head>

<body>


    <!--loader start-->
    <div id="preloader">
        <div class="loader1">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!--loader end-->

    <!--header section start-->
    <header class="header">
        <!--start navbar-->
        <nav class="bg-transparent navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset('assets/kilimo/img/logo-white.png')}}" width="160" alt="logo" class="img-fluid" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="ti-menu"></span>
                </button>
                <div class="h-auto collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="ml-auto navbar-nav menu">

                        <li><a href="{{ url('/') }}">Acceuil</a></li>

                        <li><a href="#features" class="page-scroll">fonctionnalités</a></li>
                        <li><a href="#how-it-work" class="page-scroll">Utilisateur</a></li>
                        <li><a href="#screenshots" class="page-scroll">Aperçu</a></li>
                        <li><a href="#reviews" class="page-scroll">Témoignages</a></li>


                        <li><a href="#" class="dropdown-toggle"> Contact</a>
                            <ul class="sub-menu">

                                <li><a href="#contact" class="page-scroll">Contact Us</a></li>
                                <li><a href="kilimo-beta-1.apk" download="">Télécharger</a></li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--header section end-->


    <!--body content wrap start-->
    <div class="main">

        <!--hero section start-->
        <section class="hero-equal-height ptb-100 gradient-overlay" id="fisrt">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-6">
                        <div class="my-5 text-white hero-content-left my-lg-0 my-md-5 my-sm-5">
                            <!--<h1 class="text-white">How to Deliver Ddigital Experiences</h1>-->
                            <p class="lead">
                                <strong>« À moins que l'Afrique n'utilise des technologies modernes, la production de nos
                                agriculteurs restera faible et nous
                                seront toujours dépendants des autres pour nous nourrir. » </strong><br/>
                                <span class="align-items-right">Akinwumi Adesina</span>
                            </p>
                            <div class="mt-4 action-btns download-btn">
                                @if (Route::has('login'))
                                    @auth
                                    <a href="{{ url('/admin') }}" class="btn solid-white-btn animated-btn mr-lg-3 page-scroll">Allez à mon tableau de bord</a>
                                    @else
                                    <a href="{{ route('login') }}" class="btn solid-white-btn animated-btn mr-lg-3 page-scroll">Se Connecter</a>
                                    <a href="{{ route('register') }}" class="btn outline-white-btn animated-btn page-scroll">Pas encore de compte ? S'inscrire</a>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-6">
                        <div class="ml-auto video-app-wrap mt--120 d-none d-sm-none d-md-block d-lg-block">
                            <div class="iphone-mask">
                                <img src="{{asset('assets/kilimo/img/hero-app-image.png')}}" alt="app" class="img-fluid mask-img" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overflow-hidden shape-bottom">
                <img src="{{asset('assets/kilimo/img/hero-shape.svg')}}" alt="shape" class="bottom-shape">
            </div>
        </section>
        <!--hero section end-->


        <!--promo neb secion start-->
        <section class="promo-new-section ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-8">
                        <div class="mb-5 section-heading">
                            <h2>Présentation</h2>
                            <p class="lead"> KILIMO qui signifie « Agriculture » en Swahili est une application mobile conçue et développée par Global Agriculture Business disponible dans sa version gratuit et premium . Kilimo a été développé dans le souci d’apporter
                                un soutien technique aux fermiers à tous les niveaux de leurs processus de production.
                            </p>
                        </div>
                    </div>
                </div>




                <!--promo-section start-->

                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-md-7 col-lg-7">
                            <div class="img-wrap">
                                <img src="{{asset('assets/kilimo/img/kilimo.png')}}" alt="how work" class="img-fluid" />
                            </div>
                        </div>
                        <div class="col-md-5 col-lg-5">
                            <div class="content-info-wrap">
                                <!--<h2>Bring Along Your Favorite Technology</h2>-->
                                <p class="lead">KILIMO est le fruit de plusieurs années d’expériences et de recherches capitalisées par des acteurs de l’Agrobusiness, des chercheurs en agronomie ; des experts en conduite d’élevage et des étudiants en développement web/mobile,
                                    pour répondre aux exigences du contexte socioéconomique et environnemental des pays d’Afrique de l’ouest.</p>


                            </div>
                        </div>
                    </div>
                </div>

                <!--promo-section end-->








            </div>
        </section>
        <!--promo neb secion end-->

        <!--promo neb secion start-->
        <section class="promo-new-section ptb-100">
            <div class="container">

                <img src="{{asset('assets/kilimo/img/bweb.jpg')}}" alt="how work" class="img-fluid" />

                <!--promo-section start-->



                <!--promo-section end-->

            </div>
        </section>
        <!--promo neb secion end-->

        <!--features section start-->
        <div id="features" class="feature-section gray-light-bg ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-9">
                        <div class="mb-5 text-center section-heading">
                            <h2>Les fonctionnalités</h2>
                            <p>Voici quelques de nos fonctionnalités</p>

                        </div>
                    </div>
                </div>

                <!--feature new style start-->
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-12">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="features mb-sm-0 mb-md-5 mb-lg-5">
                                    <span class="float-left p-3 mt-1 mr-4 ti-layout icon-sm color-2 color-2-bg rounded-circle"></span>
                                    <div class="overflow-hidden d-block">
                                        <h5 class="mb-2">Interface Utilisateur</h5>
                                        <p>Une interface explicite & facile d'utilisation, performante et ergonomique. Un revêtement optimal vous donnant envie d'utiliser kilimo quotidiennement afin de profiter de l'exclusivité. </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="features mb-sm-0 mb-md-5 mb-lg-5">
                                    <span class="float-left p-3 mt-1 mr-4 ti-themify-favicon-alt icon-sm color-2 color-2-bg rounded-circle"></span>
                                    <div class="overflow-hidden d-block">
                                        <h5 class="mb-2">Rappel & Notifications</h5>
                                        <p> Une application intelligente qui vous accompagne quotidiennement avec tout une série de notifications et de rappelles sur vos arrosages, traitement etc. .
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="features mb-sm-0 mb-md-5 mb-lg-5">
                                    <span class="float-left p-3 mt-1 mr-4 ti-eye icon-sm color-2 color-2-bg rounded-circle"></span>
                                    <div class="overflow-hidden d-block">
                                        <h5 class="mb-2">Gestion de Cultures</h5>
                                        <p>Vous avez le controle sur vos culture. Ajouter les spéculations que vous voulez et suiver leurs croissances avec des paramètres conçus par nos experts(e) agronomes </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="features mb-sm-0 mb-md-5 mb-lg-5">
                                    <span class="float-left p-3 mt-1 mr-4 ti-thumb-up icon-sm color-2 color-2-bg rounded-circle"></span>
                                    <div class="overflow-hidden d-block">
                                        <h5 class="mb-2">Assistance & Chat</h5>
                                        <p>Que vous soyez débutant ou connaisseur dans le domaine, nous mettons en place une équipe en ligne pour vous assister et à répondre à tous vos questions.</p>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="{{asset('assets/kilimo/img/fonctionalite.png')}}" class="mx-auto img-fluid d-lg-block d-none" alt="app screen" height="20%" />
                    </div>
                </div>
                <!--feature new style end-->
            </div>
        </div>
        <!--features section end-->

        <!--feature section tab style start-->
        <section id="how-it-work" class="feature-tab-section ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="feature-content-wrap">

                            <div class="tab-content feature-tab-content">
                                <div class="tab-pane active" id="tab6-1">
                                    <div class="pt-5 row align-items-center justify-content-between">
                                        <div class="col-md-5 col-lg-4">
                                            <div class="tab-content-wrap">

                                                <h3>La communauté KILIMO</h3>
                                                <p class="lead">KILIMO cible les propriétaires ou gestionnaires d’exploitation qui ne peuvent pas être chaque jour dans leur ferme, les « agripreneurs » de la diaspora, les managers d’exploitation…et beaucoup plus.</p>


                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-7">
                                            <div class="img-wrap">
                                                <img src="{{asset('assets/kilimo/img/worldwide-map.png')}}" alt="feature" class="rounded img-fluid" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div> <br><br>
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-7 col-lg-7">
                        <iframe width="600" height="315" src="https://www.youtube.com/embed/QceNS0K7bDY">
                        </iframe>

                    </div>
                    <div class="col-md-5 col-lg-5">
                        <div class="content-info-wrap">
                            <h2>L'équipe dérrière KILIMO</h2>
                            <p><strong>KILIMO est le fruit de plusieurs années d’expériences et de recherches capitalisées par des acteurs de l’Agrobusiness, des chercheurs en agronomie ; des experts en conduite d’élevage et des étudiants en développement web/mobile, pour répondre aux exigences du contexte socioéconomique et environnemental des pays d’Afrique de l’ouest.</strong></p>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--feature section tab style end-->

        <!--promo-section start-->
        <!-- <section id="how-it-work" class="how-it-work ptb-100">

        </section> -->
        <!--promo-section end-->


        <!--promo neb secion start-->
        <section class="promo-new-section ptb-100">
            <div class="container">

                <img src="{{asset('assets/kilimo/img/belearning.jpg')}}" alt="how work" class="img-fluid" />

                <!--promo-section start-->



                <!--promo-section end-->

            </div>
        </section>
        <!--promo neb secion end-->


        <!--screenshots section start-->
        <section id="screenshots" class="screenshots-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="mb-5 text-center section-heading">
                            <h2>Un petit aperçue de KILIMO</h2>
                            <p>Une présentation des pages de Kilimo</p>
                        </div>
                    </div>
                </div>
                <!--start app screen carousel-->
                <div class="screen-slider-content">
                    <div class="screenshot-frame"></div>
                    <div class="screen-carousel owl-carousel owl-theme dot-indicator">
                        <img src="{{asset('assets/kilimo/img/screens/01.jpg')}}" class="img-fluid" alt="screenshots" />
                        <img src="{{asset('assets/kilimo/img/screens/02.jpg')}}" class="img-fluid" alt="screenshots" />
                        <img src="{{asset('assets/kilimo/img/screens/03.jpg')}}" class="img-fluid" alt="screenshots" />
                        <img src="{{asset('assets/kilimo/img/screens/04.jpg')}}" class="img-fluid" alt="screenshots" />
                        <img src="{{asset('assets/kilimo/img/screens/05.jpg')}}" class="img-fluid" alt="screenshots" />
                        <img src="{{asset('assets/kilimo/img/screens/06.jpg')}}" class="img-fluid" alt="screenshots" />
                        <img src="{{asset('assets/kilimo/img/screens/08.jpg')}}" class="img-fluid" alt="screenshots" />
                        <img src="{{asset('assets/kilimo/img/screens/10.jpg')}}" class="img-fluid" alt="screenshots" />
                        <img src="{{asset('assets/kilimo/img/screens/11.jpg')}}" class="img-fluid" alt="screenshots" />
                        <img src="{{asset('assets/kilimo/img/screens/12.jpg')}}" class="img-fluid" alt="screenshots" />
                        <img src="{{asset('assets/kilimo/img/screens/13.jpg')}}" class="img-fluid" alt="screenshots" />
                        <img src="{{asset('assets/kilimo/img/screens/14.jpg')}}" class="img-fluid" alt="screenshots" />
                        <img src="{{asset('assets/kilimo/img/screens/15.jpg')}}" class="img-fluid" alt="screenshots" />


                    </div>
                </div>
                <!--end app screen carousel-->

            </div>
        </section>
        <!--screenshots section end-->

        <!--download section start-->
        <section id="download" class="download-section gradient-overlay" >
            <div class="container">
                <div class="row justify-content-around align-items-end">
                    <div class="col-md-12 col-lg-6">
                        <div class="text-white download-txt ptb-100">
                            <h2 class="text-white">
                                Testez la Version bêta de Kilimo
                            </h2>
                            <p class="lead">
                                Nous vous invitons à cliquer sur le bouton ci-dessous pour télécharger & tester directement KILIMO.
                            </p>
                            <div class="mt-4 action-btns download-btn">
                                <!--<a href="#" class="mr-3 btn solid-white-btn"> <span class="mr-2 ti-apple"></span> App
                                    Store</a> -->
                                <a href="kilimo-beta-1.apk" download="" class="btn outline-white-btn"> <span class="mr-2 ti-android"></span> Télécharger sur android</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-4">


                        <div class="d-flex align-items-end">
                            <img src="{{asset('assets/kilimo/img/image-11.png')}}" class="img-fluid" alt="download" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--download section end-->

        <!--testimonial section start-->
        <section id="reviews" class="testimonial-section ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="mb-5 text-center section-heading">
                            <h2>Témoignages de quelques agriculteurs</h2>
                            <p class="lead">
                                Voici quelques avis de la part des utilisateurs de KILIMO.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 col-lg-4">
                        <div class="p-4 rounded shadow-sm testimonial-single gray-light-bg">
                            <blockquote>
                                Superbe application, depuis que je l'ai Téléchargé, j'avoue que cela m'aide beaucoup grâce à son système de rappel je suis bien organisé et à jour!
                            </blockquote>
                            <div class="mt-2 client-ratting">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><span class="ti-star ratting-color"></span></li>
                                    <li class="list-inline-item"><span class="ti-star ratting-color"></span></li>
                                    <li class="list-inline-item"><span class="ti-star ratting-color"></span></li>
                                    <li class="list-inline-item"><span class="ti-star ratting-color"></span></li>
                                    <li class="list-inline-item"><span class="ti-star ratting-color"></span></li>
                                </ul>
                                <h6 class="font-weight-bold">5.0 <small class="font-weight-lighter">étoiles</small></h6>
                            </div>
                        </div>
                        <div class="mt-5 client-info-wrap d-flex align-items-center">
                            <div class="mr-3 client-img">
                                <img src="{{asset('assets/kilimo/img/client-1.jpg')}}" alt="client" width="60" class="shadow-sm img-fluid rounded-circle" />
                            </div>
                            <div class="client-info">
                                <h5 class="mb-0">Ibrahima Faye</h5>
                                <p class="mb-0">Ceo Senagriculture</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="p-4 rounded shadow-sm testimonial-single gray-light-bg">
                            <blockquote>
                                très bonne application.merci infiniment.
                            </blockquote>
                            <div class="mt-2 client-ratting">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><span class="ti-star ratting-color"></span></li>
                                    <li class="list-inline-item"><span class="ti-star ratting-color"></span></li>
                                    <li class="list-inline-item"><span class="ti-star ratting-color"></span></li>
                                    <li class="list-inline-item"><span class="ti-star ratting-color"></span></li>
                                    <li class="list-inline-item"><span class="ti-star ratting-color"></span></li>
                                </ul>
                                <h6 class="font-weight-bold">5.0 <small class="font-weight-lighter">étoiles</small></h6>
                            </div>
                        </div>
                        <div class="mt-5 client-info-wrap d-flex align-items-center">
                            <div class="mr-3 client-img">
                                <img src="{{asset('assets/kilimo/img/client-2.jpg')}}" alt="client" width="60" class="shadow-sm img-fluid rounded-circle" />
                            </div>
                            <div class="client-info">
                                <h5 class="mb-0">Yacine Thiobane</h5>
                                <p class="mb-0">Agronome</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="p-4 rounded shadow-sm testimonial-single gray-light-bg">
                            <blockquote>
                                Superbe application, depuis que je l'ai Téléchargé, j'avoue que cela m'aide beaucoup grâce à son système de rappel je suis bien organisé et à jour!

                            </blockquote>
                            <div class="mt-2 client-ratting">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><span class="ti-star ratting-color"></span></li>
                                    <li class="list-inline-item"><span class="ti-star ratting-color"></span></li>
                                    <li class="list-inline-item"><span class="ti-star ratting-color"></span></li>
                                    <li class="list-inline-item"><span class="ti-star ratting-color"></span></li>
                                    <li class="list-inline-item"><span class="ti-star ratting-color"></span></li>
                                </ul>
                                <h6 class="font-weight-bold">5.0 <small class="font-weight-lighter">étoiles</small></h6>
                            </div>
                        </div>
                        <div class="mt-5 client-info-wrap d-flex align-items-center">
                            <div class="mr-3 client-img">
                                <img src="{{asset('assets/kilimo/img/client-3.jpg')}}" alt="client" width="60" class="shadow-sm img-fluid rounded-circle" />
                            </div>
                            <div class="client-info">
                                <h5 class="mb-0">Pape Ndiouga Diallo</h5>
                                <p class="mb-0">Développeur</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!--testimonial section end-->

        <!--client section start-->
        <section class="client-section ptb-100">
            <div class="container">
                <!--clients logo start-->
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="mb-5 text-center section-heading">
                            <h2>Nos fidèles partenaires</h2>

                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme clients-carousel dot-indicator">
                            <div class="item single-client">
                                <img src="{{asset('assets/kilimo/img/partenaires/0.jpg')}}" alt="client logo" class="img-fluid client-img">
                            </div>
                            <div class="item single-client">
                                <img src="{{asset('assets/kilimo/img/partenaires/1.png')}}" alt="client logo" class="img-fluid client-img">
                            </div>
                            <div class="item single-client">
                                <img src="{{asset('assets/kilimo/img/partenaires/2.png')}}" alt="client logo" class="img-fluid client-img">
                            </div>
                            <div class="item single-client">
                                <img src="{{asset('assets/kilimo/img/partenaires/3.png')}}" alt="client logo" class="img-fluid client-img">
                            </div>
                            <div class="item single-client">
                                <img src="{{asset('assets/kilimo/img/partenaires/4.png')}}" alt="client logo" class="img-fluid client-img">
                            </div>
                            <div class="item single-client">
                                <img src="{{asset('assets/kilimo/img/partenaires/5.png')}}" alt="client logo" class="img-fluid client-img">
                            </div>
                            <div class="item single-client">
                                <img src="{{asset('assets/kilimo/img/partenaires/6.jpg')}}" alt="client logo" class="img-fluid client-img">
                            </div>
                            <div class="item single-c.png">
                                <img src="{{asset('assets/kilimo/img/partenaires/7.jpg')}}" alt="client logo" class="img-fluid client-img">
                            </div>
                            <div class="item single-c.png">
                                <img src="{{asset('assets/kilimo/img/partenaires/8.jpg')}}" alt="client logo" class="img-fluid client-img">
                            </div>
                        </div>
                    </div>
                </div>
                <!--clients logo end-->
            </div>
        </section>
        <!--client section start-->

        <!--contact us section start-->
        <section id="contact" class="contact-us-section ptb-100">
            <div class="container">
                <div class="row justify-content-around">
                    <div class="col-md-6">
                        <div class="p-5 rounded contact-us-form gray-light-bg">
                            <h4>Vos questions, vos Feedbacks. </h4> <br/>
                            <button type="submit" class="btn solid-btn" id="btnContactUs">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeTNy9jnyysX3htsLAHo2qID7QsWepxlFdTvUl98Z8O836tGQ/viewform"
                                    style="color:#FFFFFF;">Donnez votre avis </a>

                                        </button>

                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="contact-us-content">

                            <br/>
                            <h5>Coordonnées:</h5>
                            <address>
                                332 VF YOFF MBENGUENE, Dakar,

<br>
                                Yoff Senegal
                            </address>
                            <br>
                            <span>Téléphone:(+221) 33 860 28 09</span> <br>
                            <span>Email: <a href="mailto:kilimo@globalagriculturebusiness.com"
                                    class="link-color">kilimo@globalagriculturebusiness.com</a></span>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--contact us section end-->


    </div>
    <!--body content wrap end-->

    <!--footer section start-->
    <footer class="footer-section">
        <!--footer top start-->
        <div class="footer-top gradient-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <div class="mb-0 text-white footer-nav-wrap mb-md-4 mb-lg-0">
                            <a class="d-block" href="#"><img src="{{asset('assets/kilimo/img/kilimo_blanc.png')}}" alt="footer logo" width="150" class="mb-1 img-fluid"></a>
                            <p>Développé dans le souci d’apporter un soutien technique aux fermiers à tous les niveaux de leurs processus de production.</p>
                            <img src="{{asset('assets/kilimo/img/gab.png')}}" alt="footer logo" width="150" class="mb-1 img-fluid">

                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-12">
                        <div class="text-white footer-nav-wrap">

                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-12">
                        <div class="text-white footer-nav-wrap">

                        </div>
                    </div>


                    <!--footer
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="text-white footer-nav-wrap">
                            <h5 class="text-light footer-head">Newsletter</h5>
                            <p>Subscribe our newsletter to get our update. We don't send span email to you.</p>
                            <form action="#" class="mt-3 newsletter-form">
                                <div class="input-group">
                                    <input type="email" class="form-control" id="email" placeholder="Enter your email"
                                        required="">
                                    <div class="input-group-append">
                                        <button class="btn solid-btn subscribe-btn btn-hover" type="submit">
                                            Subscribe
                                        </button>
                                    </div>
                                </div>
                            </form>
                            </br>
                            <ul class="mb-0 list-unstyled social-list">
                                <li class="list-inline-item"><a href="#" class="rounded"><span
                                            class="shadow ti-facebook white-bg color-2 rounded-circle"></span></a></li>
                                <li class="list-inline-item"><a href="#" class="rounded"><span
                                            class="shadow ti-twitter white-bg color-2 rounded-circle"></span></a></li>
                                <li class="list-inline-item"><a href="#" class="rounded"><span
                                            class="shadow ti-linkedin white-bg color-2 rounded-circle"></span></a></li>
                                <li class="list-inline-item"><a href="#" class="rounded"><span
                                            class="shadow ti-dribbble white-bg color-2 rounded-circle"></span></a></li>
                            </ul>
                        </div>
                    </div> top end-->
                </div>
            </div>
        </div>

    </footer>
    <!--footer section end-->

    <!--bottom to top button start-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="ti-angle-up"></span>
    </button>
    <!--bottom to top button end-->


    <!--jQuery-->
    <script src="{{asset('assets/kilimo/js/jquery-3.4.1.min.js')}}"></script>
    <!--Popper js-->
    <script src="{{asset('assets/kilimo/js/popper.min.js')}}"></script>
    <!--Bootstrap js-->
    <script src="{{asset('assets/kilimo/js/bootstrap.min.js')}}"></script>
    <!--Magnific popup js-->
    <script src="{{asset('assets/kilimo/js/jquery.magnific-popup.min.js')}}"></script>
    <!--jquery easing js-->
    <script src="{{asset('assets/kilimo/js/jquery.easing.min.js')}}"></script>
    <!--jquery ytplayer js-->
    <script src="{{asset('assets/kilimo/js/jquery.mb.YTPlayer.min.js')}}"></script>
    <!--wow js-->
    <script src="{{asset('assets/kilimo/js/wow.min.js')}}"></script>
    <!--owl carousel js-->
    <script src="{{asset('assets/kilimo/js/owl.carousel.min.js')}}"></script>
    <!--countdown js-->
    <script src="{{asset('assets/kilimo/js/jquery.countdown.min.js')}}"></script>
    <!--custom js-->
    <script src="{{asset('assets/kilimo/js/scripts.js')}}"></script>
</body>


</html>

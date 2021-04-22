
    <!-- BEGIN: Main Menu-->
    <div class="horizontal-menu-wrapper">
        <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-shadow menu-border" role="navigation" data-menu="menu-wrapper" data-menu-type="floating-nav">
            <div class="navbar-header">
                <ul class="flex-row nav navbar-nav">
                    <li class="mr-auto nav-item">
                        <img src="{{asset('assets/logokilimo.png')}}" height="50" alt="">

                    </li>
                    <li class="nav-item nav-toggle"><a class="pr-0 nav-link modern-nav-toggle" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i></a></li>
                </ul>
            </div>
            <div class="shadow-bottom"></div>
            <!-- Horizontal menu content-->
            <div class="navbar-container main-menu-content" data-menu="menu-container">
                <!-- include ../../../includes/mixins-->
                <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                    <li class="{{$dashboard ?? "active"}}"><a class="nav-link d-flex align-items-center" href="index.html" ><i data-feather="home"></i><span data-i18n="Dashboards">Tableau de bord</span></a>

                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown"><i data-feather="package"></i><span data-i18n="Apps">Agriculture</span></a>
                        <ul class="dropdown-menu">

                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="eCommerce"><i data-feather="shopping-cart"></i><span data-i18n="eCommerce">Culture</span></a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="{{route('admin-cultures')}}" data-toggle="dropdown" data-i18n="Shop"><i data-feather="circle"></i><span data-i18n="Shop">Tous les cultures</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="{{route('admin-addCulture')}}" data-toggle="dropdown" data-i18n="Details"><i data-feather="circle"></i><span data-i18n="Details">Ajouter culture</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="{{route('admin-typesCulture')}}" data-toggle="dropdown" data-i18n="Wishlist"><i data-feather="circle"></i><span data-i18n="Wishlist">Type de culture</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="{{route('admin-varietesCulture')}}" data-toggle="dropdown" data-i18n="Checkout"><i data-feather="circle"></i><span data-i18n="Checkout">Varièté de culture</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="{{route('admin-type-semie')}}" data-toggle="dropdown" data-i18n="Checkout"><i data-feather="circle"></i><span data-i18n="Checkout">Type de semie</span></a>
                                    </li>
                                </ul>
                            </li>


                        </ul>
                    </li>


                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown"><i data-feather="settings"></i><span data-i18n="Misc">Paramètres</span></a>
                        <ul class="dropdown-menu">
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="" data-toggle="dropdown" data-i18n="Leaflet Maps"><i data-feather="box"></i><span data-i18n="Leaflet Maps">Système</span></a>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Menu Levels"><i data-feather="box"></i><span data-i18n="Menu Levels">Utilisateur</span></a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="" data-toggle="dropdown" data-i18n="Wishlist"><i data-feather="circle"></i><span data-i18n="Wishlist">Clients</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="{{route('admin-user-admin')}}" data-toggle="dropdown" data-i18n="Checkout"><i data-feather="circle"></i><span data-i18n="Checkout">Administrateurs</span></a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END: Main Menu-->

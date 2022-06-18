<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="icon.png">
    <title>UMKM - {{ config('app.name') }} </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/bootstrap4/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-select.min.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet"
        type="text/css">
    <link href="{{ secure_asset('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet"
        type="text/css">
    <link rel="stylesheet" type="text/css"
        href="{{ secure_asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ secure_asset('assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ secure_asset('assets/plugins/OwlCarousel2-2.2.1/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ secure_asset('assets/styles/mai_styles.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ secure_asset('assets/styles/responsive.css') }}">
    <link href="{{asset("assets/styles/toastr.min.css")}}" rel="stylesheet">


    @yield('css')

    <script>
    window.csrfToken = "{{ csrf_token() }}"
    </script>
</head>

<body data-status="{{Session::get("status")}}">

    <div class="super_container">

        <!-- Header -->

        <header class="header trans_300">

            <!-- Top Navigation -->

            <div class="top_nav">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="top_nav_left">UMKM Indonesia</div>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="top_nav_right">

                                <ul class="top_nav_menu">

                                    <!-- Currency / Language / My Account -->
                                    @if(Auth::guest())
                                    <li class="language">
                                        <a href="{{ route('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i>
                                            Masuk</a>
                                    </li>
                                    <li class="language">
                                        <a href="{{ route('register') }}"><i class="fa fa-user-plus"
                                                aria-hidden="true"></i> Daftar</a>
                                    </li>
                                    @else
                                    <li class="account">
                                        <a href="#">
                                            {{ Auth::user()->name }}
                                            <i class="fa fa-angle-down"></i>
                                        </a>

                                        <ul class="account_selection">
                                            @if(Auth::user()->isItAuthorized("admin"))
                                            <li><b>ADMIN</b></li>
                                            <li><a href="{{ url('/admin-users') }}"><i
                                                        class="fa fa-btn fa-users"></i>Users</a>
                                            </li>
                                            <li><a href="{{ url('/admin-category') }}"><i
                                                        class="fa fa-btn fa-list-ul"></i>Kategori</a></li>
                                            <li><a href="{{ url('/admin-products') }}"><i
                                                        class="fa fa-btn fa-cubes"></i>Iklan Saya</a>
                                            </li>
                                            <li class="divider"></li>
                                            @endif

                                            @if(Auth::user())
                                            <li><b>USER</b></li>
                                            <li><a href="{{ url('/profile') }}"><i
                                                        class="fa fa-btn fa-user"></i>Profil</a>
                                            </li>
                                            <li><a href="{{ url('/admin-products') }}"><i
                                                        class="fa fa-btn fa-cubes"></i>Iklan Saya</a>
                                            </li>
                                            <li><a href="{{ url('/admin-products/create') }}"><i
                                                        class="fa fa-btn fa-list-alt"></i>Tambah Iklan</a>
                                            </li>
                                            @endif
                                            <li><a href="{{ url('/logout') }}"><i
                                                        class="fa fa-btn fa-sign-out"></i>Logout</a>
                                            </li>
                                        </ul>


                                    </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Navigation -->

            <div class="main_nav_container">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-right">
                            <div class="logo_container">
                                <a href="/"><span><img src="/assets/images/UMKM.jpg" height="70px"
                                            width="90px"></span></a>
                            </div>
                            <nav class="navbar">
                                <ul class="navbar_menu">
                                    <li><a href="/">BERANDA</a></li>
                                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle"
                                            id="navbarDropdown" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false" href="#">KATEGORI</a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            @foreach($categoryMenu as $menu)
                                            <a href="/category/{{ $menu->slug }}">{{ $menu->category_name }}</a>
                                            @endforeach
                                        </div>
                                    </li>
                                    <li><a href="{{ route('contact') }}">CONTACT</a></li>
                                </ul>
                                <div class="hamburger_container">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

        </header>

        <div class="fs_menu_overlay"></div>
        <div class="hamburger_menu">
            <div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
            <div class="hamburger_menu_content text-right">
                <ul class="menu_top_nav">
                    <li class="menu_item"><a href="{{ route('home') }}">BERANDA</a></li>
                    <li class="dropdown dropright"><a class=" dropdown-toggle" data-toggle="dropdown"
                            href="#">KATEGORI</a>
                        <div class="dropdown-menu" aria-labelledby="">
                            @foreach($categoryMenu as $menu)
                            <a class="menu_item" href="/category/{{ $menu->slug }}">{{ $menu->category_name }}</a>
                            @endforeach
                        </div>
                    </li>

                    <li class="menu_item"><a href="{{ route('contact') }}">CONTACT</a></li>


                    @if(Auth::guest())
                    <li class="menu_item">
                        <a href="{{ route('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i>
                            Sign In</a>
                    </li>
                    <li class="menu_item">
                        <a href="{{ route('register') }}"><i class="fa fa-user-plus" aria-hidden="true"></i>
                            Register</a>
                    </li>
                    @else
                    <li class="menu_item has-children">
                        <a href="#">
                            {{ Auth::user()->name }}
                            <i class="fa fa-angle-down"></i>
                        </a>

                        <ul class="menu_selection">
                            @if(Auth::user()->isItAuthorized("admin"))
                            <li><b>ADMIN</b></li>
                            <li><a href="{{ url('/admin-users') }}">Users</a></li>
                            <li><a href="{{ url('/admin-category') }}">Kategori</a></li>
                            <li><a href="{{ url('/admin-products') }}">Iklan</a>
                            </li>
                            @endif

                            @if(Auth::user())
                            <li><b>USER</b></li>
                            <li><a href="{{ url('/profile') }}"><i class="fa fa-btn fa-user"></i>Profile</a></li>
                            <li><a href="{{ url('/admin-products') }}"><i class="fa fa-btn fa-cubes"></i>Iklan Saya</a>
                            </li>
                            <li><a href="{{ url('/admin-products/create') }}"><i
                                        class="fa fa-btn fa-list-alt"></i>Tambah Iklan</a></li>
                            @endif
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a>
                            </li>
                        </ul>


                    </li>
                    @endif


                </ul>
            </div>
        </div>


        @yield('content')

        <!-- Footer -->

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6"></div>
                    <div class="col-lg-6">
                        <div
                            class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
                            <ul>
                                <li><a href="https://www.facebook.com/jogjamediaweb/"><i class="fa fa-facebook"
                                            aria-hidden="true"></i></a>
                                </li>
                                <li><a href="https://twitter.com/jogjamediaweb"><i class="fa fa-twitter"
                                            aria-hidden="true"></i></a>
                                </li>
                                <li><a href="https://www.instagram.com/jogjamediaweb/?hl=id"><i class="fa fa-instagram"
                                            aria-hidden="true"></i></a></li>
                                <li><a href="http://www.github.com"><i class="fa fa-github" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="http://www.gitlab.com/"><i class="fa fa-gitlab" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer_nav_container">
                            <div class="cr">©2021 All Rights Reserved. Made with <i class="fa fa-heart-o"
                                    aria-hidden="true"></i>
                                by <a href="#">Nanang Setyawan</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>


    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/styles/bootstrap4/popper.js') }}"></script>
    <script src="{{ asset('assets/styles/bootstrap4/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
    <script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/Isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/plugins/easing/easing.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{asset("assets/js//toastr.min.js")}}"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    @yield('js')


</body>

</html>
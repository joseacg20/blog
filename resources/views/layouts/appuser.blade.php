<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!--Importar Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
        <!--Importar Fontawesome Icon Font-->
    <script defer src="https://use.fontawesome.com/releases/v5.9.0/js/all.js"
    integrity="sha384-7Gk1S6elg570RSJJxILsRiq8o0CO99g1zjfOISrqjFUCjxHDn3TmaWoWOqt6eswF"
    crossorigin="anonymous"></script>
    
        <!--Importar materialize.css-->
    <link href="{{ asset('../resources/css/materialize.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('../resources/css/stylecarrousel.css') }}">
    
        <!--Import javascrip.js-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('../resources/js/materialize.min.js') }}"></script>

        <!--Editor de texto-->
    <script src="{{ asset('../resources/js/froala_editor.pkgd.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('../resources/css/froala_editor.pkgd.min.css') }}">

    <title>Blog</title>
</head>
<body>

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <section class="seccion-barra">
        <header>
            <div class="navbar-fixed">
                <nav class="grey darken-4">
                    <div class="container">
                        <div class="nav-wrapper">
                            <div class="row">
                                <div class="col s12">
                                    <a href="{{ asset('home') }}" class="brand-logo">MY BLOG</a>
                                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                                        <li><a href="{{ asset('friends') }}">FRIENDS</a></li>
                                        <li><a href="{{ asset('post') }}">MY POSTS</a></li>
                                            <!-- Dropdown Trigger -->
                                        <li><a class="dropdown-trigger" href="users.html" data-target="dropdown1">USER POST<i class="material-icons right">arrow_drop_down</i></a></li>
                                        <li><a href="#" data-target="sidenav" class="right sidenav-trigger show-on-medium-and-up"><i class="material-icons">menu</i></a></li>
                                    </ul>
                                    <ul id="dropdown1" class="dropdown-content">
                                        <li><a class="black-text" href="post_user.html">Adventure</a></li>
                                        <li class="divider"></li>
                                        <li><a class="black-text" href="#">Poetry</a></li>
                                        <li class="divider"></li>
                                        <li><a class="black-text" href="#">Science</a></li>
                                        <li class="divider"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
            <!-- LEFT SIDEBAR	 -->
        <ul id="sidenav" class="sidenav">    
            <li>
                <div class="user-view">
                    <div class="background">
                        <img src="{{ asset('../storage/image/resort1.jpg')}}">
                    </div>
                    <a href="#user"><img class="circle" src="{{ asset('../storage/image/author.jpg')}}"></a>
                    <a href="#name"><span class="white-text name"></span></a>
                    <a href="#email"><span class="white-text email"></span></a>
                </div>
            </li>
            <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
            <li><a href="#!">Second Link</a></li>
            <li><div class="divider"></div></li>
            <li><a class="subheader">Subheader</a></li>
            <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>  
            <div class="row">
                <div class="col s12 center">
                    <a class="waves-effect blue white-text btn" href="{{ route('logout') }}">Log Out</a>
                </div>
            </div>    
        </ul>
    </section>

    @yield('content')

    <section class="section-footer">
        <footer class="page-footer black white-text center">
            <h4>MY BLOG © 2019</h4>
            <br>
        </footer>
    </section>

</body>
</html>
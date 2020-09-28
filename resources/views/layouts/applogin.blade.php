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

    <title>Login</title>
</head>
<body>
    <section class="seccion-barra">
        <header>
            <div class="navbar-fixed">
                <nav class="grey darken-4">
                    <div class="container">
                        <div class="nav-wrapper">
                            <div class="row">
                                <div class="col s12">
                                    <a href="#!" class="brand-logo">MY BLOG</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
    </section>

    @yield('content')

    <section class="section-footer">
        <footer class="page-footer black white-text center" style="position: fixed; left: 0px; bottom: 0px; height: 120px; width: 100%;">
            <h4>MY BLOG © 2019</h4>
            <br>
        </footer>
    </section>

</body>
</html>
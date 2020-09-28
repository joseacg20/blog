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
    <link type="text/css" rel="stylesheet" href="{{ asset('../resources/css/materialize.css') }}"  media="screen,projection"/>
    <link rel="stylesheet" href="{{ asset('../resources/css/style.css') }}">
    
    <!--Import javascrip.js-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('../resources/js/materialize.min.js') }}"></script>

    <!--Grafica de lineas-->
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="{{ asset('../resources/js/grafica1.js') }}"></script>

        <!--Editor de texto-->
    <script type="text/javascript" src="{{ asset('../resources/js/froala_editor.pkgd.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('../resources/css/froala_editor.pkgd.min.css') }}">

    <title>Blog</title>
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
                                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                                        <li><a href="{{ asset('../public/register') }}">Register</a></li>
                                    </ul>
                                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                                        <a class="waves-effect blue white-text btn" href="{{ asset('../public/home') }}">Log In</a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
            <!-- LEFT SIDEBAR	 -->
    <!--
        <ul id="sidenav" class="sidenav">    
            <li>
                <div class="user-view center">
                    <div class="background">
                        <img src="{{ asset('../storage/image/resort1.jpg') }}">
                    </div>
                    <div style="display: flex; justify-content: center; align-items: center;">
                        <a href="#user"><img class="circle"src="{{ asset('../storage/image/log_in.png') }}"></a>
                    </div>
                    <div style="display: flex; justify-content: center; align-items: center;">
                        <a href="#name"><span class="white-text name"><h5>Log In</h5></span></a>
                    </div>
                </div>
            </li>
            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="username" type="text" class="validate">
                            <label for="username">User Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate">
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 center">
                            <a class="waves-effect blue white-text btn" href="{{ asset('../public/home') }}">Log In</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 center">
                            <p>Don´t have an account? <a class="waves-effect modal-trigger" href="#modal1">Sign up</a></p>
                        </div>
                    </div>
                </form>
            </div>     
        </ul>
        <div class="registro">
            <div class="col s12 center">
                <div id="modal1" class="modal" style="height: 500px;">
                    <div class="modal-content">
                        <h4>Sign Up</h4>
                        <div class="row">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="first_name" type="text" class="validate">
                                        <label for="first_name">First Name</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="last_name" type="text" class="validate">
                                        <label for="last_name">Last Name</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="email" type="email" class="validate">
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="password" type="password" class="validate">
                                        <label for="password">Password</label>
                                    </div>
                                    <div class="input-field col s6">
                                            <input id="password" type="password" class="validate">
                                        <label for="password">Confirm Password</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 center">
                                        <a class="waves-effect blue white-text btn">Sign Up</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    -->
    </section>
    <br>
    <section class="seccion-contenido">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <div class="post_popular">
                        <div class="titulo white-text" style="background-color: black; height: 50px; display: flex; justify-content: center; align-items: center;">
                            <h5>POPULAR POSTS</h5>
                        </div>
                        <div class="col s6">
                            <div id="boquecard" class="card">
                                <div class="card-image">
                                    <img src="{{ asset('../storage/image/resort2.jpg')}}">
                                </div>
                                <div class="nav-wrapper">
                                    <ul class="right hide-on-med-and-down">
                                        <div class="col">
                                                <!-- Modal Trigger -->
                                            <li class="right"><a class="waves-effect black-text modal-trigger" href="#modal"><i class="material-icons black-text">info_outline</i></a></li>
                                                <!-- Modal Structure -->
                                            <div id="modal" class="modal">
                                                <div class="modal-content center" style="height: 350px;">
                                                    <h4>Info Post</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, suscipit illo recusandae labore repellendus omnis molestiae nulla ipsam consequatur veritatis 
                                                        praesentium molestias ducimus nisi quos libero, culpa hic placeat officia?
                                                    </p>
                                                    <div class="">
                                                        <img src="{{ asset('../storage/image/users/images (2).jpg')}}">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="#!" class="modal-close waves-effect blue white-text btn-flat center" style="margin: 10px; width: 80px;">Exit</a>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                                <br>
                                <div class="card-content center">
                                    <h4>WORLD’S MOST BEAUTIFUL
                                            <p style="font-size: 10px;">September 04, 2015</p>
                                    </h4>
                                    <p>Mauris sem sem, maximus ac sem auctor, cursus congue massa. Aliquam erat volutpat. 
                                        Donec maximus libero turpis, sed ...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s6">
                            <div id="boquecard" class="card">
                                <div class="card-image">
                                    <img src="{{ asset('../storage/image/resort1.jpg')}}">
                                </div>
                                <div class="nav-wrapper">
                                    <ul class="right hide-on-med-and-down">
                                        <div class="col">
                                            <li class="right"><a class="black-text" href=""><i class="material-icons black-text">info_outline</i></a></li>
                                        </div>
                                    </ul>
                                </div>
                                <br>
                                <div class="card-content center">
                                    <h4>KEEP IT SIMPLE YET BEAUTIFUL
                                        <p style="font-size: 10px;">September 04, 2015</p>
                                    </h4>
                                    <p>Mauris sem sem, maximus ac sem auctor, cursus congue massa. Aliquam erat volutpat. 
                                        Donec maximus libero turpis, sed ...</p>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="post">
                <div class="titulo white-text" style="background-color: black; height: 50px; display: flex; justify-content: center; align-items: center;">
                    <h5>RECENT POSTS</h5>
                </div>
                <div class="card horizontal">
                    <div class="card-image">
                        <img src="{{ asset('../storage/image/resort1.jpg')}}" style="height: 175px; width: 200px;">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <p>World’s Most Beautiful
                                <p style="font-size: 10px;">04 SEP 2019</p>
                                <p>Ut wisi enim ad minim veniam, quis nostrud 
                                    exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo 
                                    consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit 
                                    esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at 
                                    vero eros et accumsan et iusto odio dignissim qui blandit praesent...</p>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card horizontal">
                    <div class="card-image">
                        <img src="{{ asset('../storage/image/resort2.jpg')}}" style="height: 175px; width: 200px;">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <p>World’s Most Beautiful
                                <p style="font-size: 10px;">04 SEP 2019</p>
                                <p>Ut wisi enim ad minim veniam, quis nostrud 
                                    exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo 
                                    consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit 
                                    esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at 
                                    vero eros et accumsan et iusto odio dignissim qui blandit praesent...</p>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card horizontal">
                    <div class="card-image">
                        <img src="{{ asset('../storage/image/resort3.jpg')}}" style="height: 175px; width: 200px;">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <p>World’s Most Beautiful
                                <p style="font-size: 10px;">04 SEP 2019</p>
                                <p>Ut wisi enim ad minim veniam, quis nostrud 
                                    exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo 
                                    consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit 
                                    esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at 
                                    vero eros et accumsan et iusto odio dignissim qui blandit praesent...</p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12 center">
                <a class="waves-effect transparent black-text btn">MORE POSTS</a>
            </div>
        </div>
        <br>
    </section>
    <section class="section-footer">
        <footer class="page-footer black white-text center">
            <h4>MY BLOG © 2019</h4>
            <br>
        </footer>
    </section>
</body>
</html>

<script>
    $(document).ready(function(){

        $('.sidenav').sidenav({ edge: 'right' });

        $(".dropdown-trigger").dropdown();

        $('.modal').modal();
    });
</script>
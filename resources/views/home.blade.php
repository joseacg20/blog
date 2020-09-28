@extends('layouts.appuser')

@section('content')

    <div class="container">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

        <br>
        <section class="seccion-slider">
            <div class="row">
                <div class="col s12">
                    <div class="slider">
                        <ul class="slides">
                            <li>
                                <img src="{{ asset('../storage/image/photo 5.jpg') }}"> <!-- random image -->
                                <div class="caption center-align">
                                    <h3>MY VINTAGE INSPIRED PHOTOGRAPHY</h3>
                                    <hr><br>
                                    <a class="waves-effect grey lighten-2 btn black-text">More</a>
                                </div>
                            </li>
                            <li>
                                <img src="{{ asset('../storage/image/photo 1.jpg') }}"> <!-- random image -->
                                <div class="caption center-align">
                                    <h3>WORD'S MOST BEAUTIFUL</h3>
                                    <hr><br>
                                    <a class="waves-effect grey lighten-2 btn black-text">More</a>
                                </div>
                            </li>
                            <li>
                                <img src="{{ asset('../storage/image/photo 2.jpg') }}"> <!-- random image -->
                                <div class="caption center-align">
                                    <h3>KEEP IT SIMPLE YET BEAUTIFUL</h3>
                                    <hr><br>
                                    <a class="waves-effect grey lighten-2 btn black-text">More</a>
                                </div>
                            </li>
                            <li>
                                <img src="{{ asset('../storage/image/photo 3.jpg') }}"> <!-- random image -->
                                <div class="caption center-align">
                                    <h3>COFFEE TIME WITH FRIENDS</h3>
                                    <hr><br>
                                    <a class="waves-effect grey lighten-2 btn black-text">More</a>
                                </div>
                            </li>
                            <li>
                                <img src="{{ asset('../storage/image/photo 4.jpg') }}"> <!-- random image -->
                                <div class="caption center-align">
                                    <h3>WAYS TO REMEMBER</h3>
                                    <hr><br>
                                    <a class="waves-effect grey lighten-2 btn black-text">More</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="seccion-contenido">
            <div class="row">
                <div class="col s8">
                    <div class="carousel carousel-slider center " data-indicators="true">
                        <div class="carousel-fixed-item center middle-indicator">
                            <div class="left">
                                <a href="Previo" class="movePrevCarousel middle-indicator-text waves-effect waves-light content-indicator"><i class="material-icons left  middle-indicator-text">chevron_left</i></a>
                            </div>
                            <div class="right">
                                <a href="Siguiente" class=" moveNextCarousel middle-indicator-text waves-effect waves-light content-indicator"><i class="material-icons right middle-indicator-text">chevron_right</i></a>
                            </div>
                        </div>
                        <div class="carousel-item white-text" href="#one!">
                            <img src="{{ asset('../storage/image/photo 7.jpg') }}" alt="">
                        </div>
                        <div class="carousel-item white-text" href="#two!">
                            <img src="{{ asset('../storage/image/photo 8.jpg') }}" alt="">
                        </div>
                        <div class="carousel-item white-text" href="#three!">
                            <img src="{{ asset('../storage/image/photo 1.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="collap">
                        <ul class="collapsible">
                            <li>
                                <div class="collapsible-header center">
                                    <h3>MY VINTAGE INSPIRED PHOTOGRAPHY
                                        <p style="font-size: 15px;">September 04, 2015</p>
                                    </h3>
                                </div>
                                <div class="collapsible-header">
                                    <p>Ut wisi enim ad minim veniam, quis nostrud 
                                    exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo 
                                    consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit 
                                    esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at 
                                    vero eros et accumsan et iusto odio dignissim qui blandit praesent...</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="image">
                        <div class="col s6">
                            <div class="card">
                                <div class="card-image">
                                    <img src="{{ asset('../storage/image/photo 1.jpg') }}">
                                </div>
                                <div class="card-content center">
                                    <h4>WORLD’S MOST BEAUTIFUL
                                            <p style="font-size: 10px;">September 04, 2015</p>
                                    </h4>
                                    <p>Mauris sem sem, maximus ac sem auctor, cursus congue massa. Aliquam erat volutpat. 
                                        Donec maximus libero turpis, sed ...</p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-image">
                                    <img src="{{ asset('../storage/image/photo 3.jpg') }}">
                                </div>
                                <div class="card-content center">
                                    <h4>COFFEE TIME WITH FRIENDS
                                            <p style="font-size: 10px;">September 04, 2015</p>
                                    </h4>
                                    <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
                                        lobortis nisl ut aliquip ex ea commodo ...</p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-image">
                                    <img src="{{ asset('../storage/image/photo 5.jpg') }}">
                                </div>
                                <div class="card-content center">
                                    <h4>AMAZING VIDEO QUALITY
                                        <p style="font-size: 10px;">July 04, 2018</p>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla elementum viverra pharetra. 
                                        Nulla facilisis, sapien non ...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s6">
                            <div class="card">
                                <div class="card-image">
                                    <img src="{{ asset('../storage/image/photo 2.jpg') }}">
                                </div>
                                <div class="card-content center">
                                    <h4>KEEP IT SIMPLE YET BEAUTIFUL
                                        <p style="font-size: 10px;">September 04, 2015</p>
                                    </h4>
                                    <p>Mauris sem sem, maximus ac sem auctor, cursus congue massa. Aliquam erat volutpat. 
                                        Donec maximus libero turpis, sed ...</p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-image">
                                    <img src="{{ asset('../storage/image/photo 4.jpg') }}">
                                </div>
                                <div class="card-content center">
                                    <h4>WAYS TO REMEMBER
                                            <p style="font-size: 10px;">September 04, 2015</p>
                                    </h4>
                                    <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
                                        lobortis nisl ut aliquip ex ea commodo ...</p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-image center">
                                    <img src="{{ asset('../storage/image/photo 6.jpg') }}">
                                </div>
                                <div class="card-content center">
                                    <h4>SIMPLE VIMEO POST
                                        <p style="font-size: 10px;">July 04, 2018</p>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla elementum viverra pharetra. 
                                        Nulla facilisis, sapien non ...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s4">
                    <div class="about">
                        <div class="titulo white-text" style="background-color: black; height: 35px; display: flex; justify-content: center; align-items: center;">
                            <h6>ABOUT ME</h6>
                        </div>
                        <div class="card">
                            <div class="card-image">
                                <img src="{{ asset('../storage/image/author.jpg') }}">
                            </div>
                            <div class="card-content">
                                <p>Susan Gates
                                    <br>
                                    Hi! I am Susan Gates— Writer & a photographer. Join me as I share great stories, 
                                    amazing photos, incredible travel life and awesome tips for people who love to travel 
                                    the world!.</p>
                            </div>
                        </div>
                    </div>
                    <div class="follow">
                            <div class="titulo white-text" style="background-color: black; height: 35px; display: flex; justify-content: center; align-items: center;">
                                <h6>FOLLOW US</h6>
                        </div>
                        <div class="icon center-align">
                            <div class="row">
                                <div class="col s4">
                                    <div class="card-panel">
                                        <a href="http://www.facebook.com"><i class="fab fa-facebook-f fa-3x black-text"></i></a>
                                    </div>
                                    <div class="card-panel">
                                        <a href="http://www.plus.google.com"><i class="fab fa-google-plus-g fa-3x black-text"></i></a>
                                    </div>
                                </div>
                                <div class="col s4">
                                    <div class="card-panel">
                                        <a href="http://www.twitter.com"><i class="fab fa-twitter fa-3x black-text"></i></a>
                                    </div>
                                    <div class="card-panel">
                                        <a href="http://www.instragram.com"><i class="fab fa-instagram fa-3x black-text"></i></a>
                                    </div>
                                </div>
                                <div class="col s4">
                                    <div class="card-panel">
                                        <a href="http://www.pinterest.com"><i class="fab fa-pinterest-p fa-3x black-text"></i></a>
                                    </div>
                                    <div class="card-panel">
                                        <a href="http://www.youtube.com"><i class="fab fa-youtube fa-3x black-text"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="labels">
                        <div class="titulo white-text" style="background-color: black; height: 35px; display: flex; justify-content: center; align-items: center;">
                            <h6>LABELS</h6>
                        </div>
                        <div class="collap">
                            <ul class="collapsible">
                                <li>
                                    <div class="collapsible-header center">BEAUTY</div>
                                </li>
                                <li>
                                    <div class="collapsible-header center">FASHION</div>
                                </li>
                                <li>
                                    <div class="collapsible-header center">FOOD</div>
                                </li>
                                <li>
                                    <div class="collapsible-header center">LIFESTYLE</div>
                                </li>
                                <li>
                                    <div class="collapsible-header center">NATURE</div>
                                </li>
                            </ul>
                        </div>
                    </div>  
                    <div class="post">
                        <div class="titulo white-text" style="background-color: black; height: 35px; display: flex; justify-content: center; align-items: center;">
                            <h6>RECENT POSTS</h6>
                        </div>
                        <div class="card horizontal">
                            <div class="card-image">
                                <img src="{{ asset('../storage/image/photo 7.jpg') }}" style="height: 110px; width: 120px;">
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <p>World’s Most Beautiful
                                        <p style="font-size: 10px;">04 SEP 2019</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card horizontal">
                            <div class="card-image">
                                <img src="{{ asset('../storage/image/photo 1.jpg') }}" style="height: 110px; width: 120px;">
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <p>World’s Most Beautiful
                                        <p style="font-size: 10px;">04 SEP 2019</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card horizontal">
                            <div class="card-image">
                                <img src="{{ asset('../storage/image/photo 2.jpg') }}" style="height: 110px; width: 120px;">
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <p>World’s Most Beautiful
                                        <p style="font-size: 10px;">04 SEP 2019</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="sponsor">
                        <div class="titulo white-text" style="background-color: black; height: 35px; display: flex; justify-content: center; align-items: center;">
                            <h6>SPONSOR</h6>
                        </div>
                        <hr style="opacity: 0.0;">
                        <div class="row">
                            <div class="col s12">
                                <div class="card-image">
                                    <img src="{{ asset('../storage/image/resort2.jpg') }}" style="width: 100%; height: 220px;">
                                </div>
                            </div>
                        </div>   
                    </div>
                    <div class="archive">
                        <div class="titulo white-text" style="background-color: black; height: 35px; display: flex; justify-content: center; align-items: center;">
                            <h6>BLOG ARCHIVE</h6>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <div class="collap">
                                    <ul class="collapsible">
                                        <li>
                                            <div class="collapsible-header center">March 2019 (5)</div>
                                        </li>
                                        <li>
                                            <div class="collapsible-header center">July 2017 (3)</div>
                                        </li>
                                        <li>
                                            <div class="collapsible-header center">February 2015 (2)</div>
                                        </li>
                                        <li>
                                            <div class="collapsible-header center">August 2013 (1)</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>   
                    </div>   
                </div>
            </div>
            <div class="col s12 center">
                <a class="waves-effect transparent black-text btn">OLDER POSTS</a>
            </div>
            <br>
        </section>
        
    </div>

    <script>
        $(document).ready(function(){

            $('.sidenav').sidenav({ edge: 'right' });

            $('.modal').modal();

            $(".dropdown-trigger").dropdown();

            $('.slider').slider({
                indicators: false,
                interval: 6000,
                height: 540
            });

            // start carrousel
            $('.carousel.carousel-slider').carousel({
                fullWidth: true,
                indicators: false
            });

            // move next carousel
            $('.moveNextCarousel').click(function(e){
                e.preventDefault();
                e.stopPropagation();
                $('.carousel').carousel('next');
            });

            // move prev carousel
            $('.movePrevCarousel').click(function(e){
                e.preventDefault();
                e.stopPropagation();
                $('.carousel').carousel('prev');
            });

            $('.collapsible').collapsible();
        });
    </script>
    
@endsection

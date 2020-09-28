@extends('layouts.appuser')

@section('content')

    <div class="container">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
    
        <br>
        <section class="seccion-amigos">
            <div class="nav-wrapper">
                <div class="row">
                    <div class="col s12">
                        <ul class="collapsible">
                            <li>
                                <div class="collapsible-header">
                                    <div style="display: flex; justify-content: center; align-items: center;">
                                        <img class="circle" src="{{ asset('../storage/image/users/images (2).jpg') }}" style="height: 100px; width: 150px; border-radius: 50px;">
                                    </div>
                                    <div class="container">
                                        <h5>Jose Cortes</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores expedita distinctio esse veniam 
                                            repellendus saepe culpa inventore, minima, itaque sequi quod fugit a beatae ducimus in eaque 
                                            consequatur aliquid! Labore.</p>
                                    </div>
                                    <div style="display: block; justify-content: center; align-items: center;">
                                        <div>
                                            <a class="waves-effect grey lighten-2 btn black-text" href="frends/friend.html" style="margin: 10px; width: 80px;">Perfil</a>
                                        </div>
                                        <div>
                                                <!-- Modal Trigger -->
                                            <a class="waves-effect red lighten btn white-text modal-trigger" href="#modal" style="margin: 10px; width: 80px;">Delete</a>
                                                <!-- Modal Structure -->
                                            <div id="modal" class="modal">
                                                <div class="modal-content center" style="height: 175px;">
                                                    <h4>Delete Friend </h4>
                                                    <p>Sure you want to delete this friend?</p>
                                                    <div class="col s12 center">
                                                        <a class="waves-effect green lighten white-text btn">Confirm</a>
                                                        <a class="waves-effect red lighten white-text btn">Cancel</a>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="#!" class="modal-close waves-effect blue white-text btn-flat center" style="margin: 10px; width: 80px;">Exit</a> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header">
                                    <div style="display: flex; justify-content: center; align-items: center;">
                                        <img class="circle" src="{{ asset('../storage/image/users/images (1).jpg') }}" style="height: 100px; width: 150px; border-radius: 50px;">
                                    </div>
                                    <div class="container">
                                        <h5>Valeria Carranza</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores expedita distinctio esse veniam 
                                            repellendus saepe culpa inventore, minima, itaque sequi quod fugit a beatae ducimus in eaque 
                                            consequatur aliquid! Labore.</p>
                                    </div>
                                    <div style="display: block; justify-content: center; align-items: center;">
                                        <div>
                                            <a class="waves-effect grey lighten-2 btn black-text" style="margin: 10px; width: 80px;">Perfil</a>
                                        </div>
                                        <div>
                                                <!-- Modal Trigger -->
                                            <a class="waves-effect red lighten btn white-text modal-trigger" href="#modal" style="margin: 10px; width: 80px;">Delete</a>
                                                <!-- Modal Structure -->
                                            <div id="modal" class="modal">
                                                <div class="modal-content center" style="height: 175px;">
                                                    <h4>Delete Friend </h4>
                                                    <p>Sure you want to delete this friend?</p>
                                                    <div class="col s12 center">
                                                        <a class="waves-effect green lighten white-text btn">Confirm</a>
                                                        <a class="waves-effect red lighten white-text btn">Cancel</a>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="#!" class="modal-close waves-effect blue white-text btn-flat center" style="margin: 10px; width: 80px;">Exit</a> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header">
                                    <div style="display: flex; justify-content: center; align-items: center;">
                                        <img class="circle" src="{{ asset('../storage/image/users/images (3).jpg') }}" style="height: 100px; width: 150px; border-radius: 50px;">
                                    </div>
                                    <div class="container">
                                        <h5>Sergei Guzman</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores expedita distinctio esse veniam 
                                            repellendus saepe culpa inventore, minima, itaque sequi quod fugit a beatae ducimus in eaque 
                                            consequatur aliquid! Labore.</p>
                                    </div>
                                    <div style="display: block; justify-content: center; align-items: center;">
                                        <div>
                                            <a class="waves-effect grey lighten-2 btn black-text" style="margin: 10px; width: 80px;">Perfil</a>
                                        </div>
                                        <div>
                                                <!-- Modal Trigger -->
                                            <a class="waves-effect red lighten btn white-text modal-trigger" href="#modal" style="margin: 10px; width: 80px;">Delete</a>
                                                <!-- Modal Structure -->
                                            <div id="modal" class="modal">
                                                <div class="modal-content center" style="height: 175px;">
                                                    <h4>Delete Friend </h4>
                                                    <p>Sure you want to delete this friend?</p>
                                                    <div class="col s12 center">
                                                        <a class="waves-effect green lighten white-text btn">Confirm</a>
                                                        <a class="waves-effect red lighten white-text btn">Cancel</a>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="#!" class="modal-close waves-effect blue white-text btn-flat center" style="margin: 10px; width: 80px;">Exit</a> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header">
                                    <div style="display: flex; justify-content: center; align-items: center;">
                                        <img class="circle" src="{{ asset('../storage/image/users/images (5).jpg') }}" style="height: 100px; width: 150px; border-radius: 50px;">
                                    </div>
                                    <div class="container">
                                        <h5>Fernando Villaseñor</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores expedita distinctio esse veniam 
                                            repellendus saepe culpa inventore, minima, itaque sequi quod fugit a beatae ducimus in eaque 
                                            consequatur aliquid! Labore.</p>
                                    </div>
                                    <div style="display: block; justify-content: center; align-items: center;">
                                        <div>
                                            <a class="waves-effect grey lighten-2 btn black-text" style="margin: 10px; width: 80px;">Perfil</a>
                                        </div>
                                        <div>
                                                <!-- Modal Trigger -->
                                            <a class="waves-effect red lighten btn white-text modal-trigger" href="#modal" style="margin: 10px; width: 80px;">Delete</a>
                                                <!-- Modal Structure -->
                                            <div id="modal" class="modal">
                                                <div class="modal-content center" style="height: 175px;">
                                                    <h4>Delete Friend </h4>
                                                    <p>Sure you want to delete this friend?</p>
                                                    <div class="col s12 center">
                                                        <a class="waves-effect green lighten white-text btn">Confirm</a>
                                                        <a class="waves-effect red lighten white-text btn">Cancel</a>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="#!" class="modal-close waves-effect blue white-text btn-flat center" style="margin: 10px; width: 80px;">Exit</a> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header">
                                    <div style="display: flex; justify-content: center; align-items: center;">
                                        <img class="circle" src="{{ asset('../storage/image/users/images (6).jpg') }}" style="height: 100px; width: 150px; border-radius: 50px;">
                                    </div>
                                    <div class="container">
                                        <h5>Julia Huerta</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores expedita distinctio esse veniam 
                                            repellendus saepe culpa inventore, minima, itaque sequi quod fugit a beatae ducimus in eaque 
                                            consequatur aliquid! Labore.</p>
                                    </div>
                                    <div style="display: block; justify-content: center; align-items: center;">
                                        <div>
                                            <a class="waves-effect grey lighten-2 btn black-text" style="margin: 10px; width: 80px;">Perfil</a>
                                        </div>
                                        <div>
                                                <!-- Modal Trigger -->
                                            <a class="waves-effect red lighten btn white-text modal-trigger" href="#modal" style="margin: 10px; width: 80px;">Delete</a>
                                                <!-- Modal Structure -->
                                            <div id="modal" class="modal">
                                                <div class="modal-content center" style="height: 175px;">
                                                    <h4>Delete Friend </h4>
                                                    <p>Sure you want to delete this friend?</p>
                                                    <div class="col s12 center">
                                                        <a class="waves-effect green lighten white-text btn">Confirm</a>
                                                        <a class="waves-effect red lighten white-text btn">Cancel</a>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="#!" class="modal-close waves-effect blue white-text btn-flat center" style="margin: 10px; width: 80px;">Exit</a> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header">
                                    <div style="display: flex; justify-content: center; align-items: center;">
                                        <img class="circle " src="{{ asset('../storage/image/users/images (7).jpg') }}" style="width: 150px; border-radius: 50px;">
                                    </div>
                                    <div class="container">
                                        <h5>Antonio Emiko</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores expedita distinctio esse veniam 
                                            repellendus saepe culpa inventore, minima, itaque sequi quod fugit a beatae ducimus in eaque 
                                            consequatur aliquid! Labore.</p>
                                    </div>
                                    <div style="display: block; justify-content: center; align-items: center;">
                                        <div>
                                            <a class="waves-effect grey lighten-2 btn black-text" style="margin: 10px; width: 80px;">Perfil</a>
                                        </div>
                                        <div>
                                                <!-- Modal Trigger -->
                                            <a class="waves-effect red lighten btn white-text modal-trigger" href="#modal" style="margin: 10px; width: 80px;">Delete</a>
                                                <!-- Modal Structure -->
                                            <div id="modal" class="modal">
                                                <div class="modal-content center" style="height: 175px;">
                                                    <h4>Delete Friend </h4>
                                                    <p>Sure you want to delete this friend?</p>
                                                    <div class="col s12 center">
                                                        <a class="waves-effect green lighten white-text btn">Confirm</a>
                                                        <a class="waves-effect red lighten white-text btn">Cancel</a>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="#!" class="modal-close waves-effect blue white-text btn-flat center" style="margin: 10px; width: 80px;">Exit</a> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
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
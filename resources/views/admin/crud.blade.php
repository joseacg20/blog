@extends('layouts.admin')

@section('content')

    <section class="seccion-usuarios">
        <div class="container">
            <div class="nav-wrapper">
                <div class="row">
                    <div class="col s12">
                        <ul class="collapsible">
                            <li>
                                <div class="collapsible-header">
                                    <div style="display: flex; justify-content: center; align-items: center;">
                                        <img class="circle" src="{{ asset('../storage/image/author.jpg') }}" style="height: 100px; width: 150px; border-radius: 50px;">
                                    </div>
                                    <div class="container">
                                        <h5>Susan Gates</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores expedita distinctio esse veniam 
                                            repellendus saepe culpa inventore, minima, itaque sequi quod fugit a beatae ducimus in eaque 
                                            consequatur aliquid! Labore.</p>
                                    </div>
                                    <div style="display: block; justify-content: center; align-items: center;">
                                        <div>
                                                <!-- Modal Trigger -->
                                            <a class="waves-effect grey lighten-2 btn black-text modal-trigger" href="#modal" style="margin: 10px; width: 80px;">Update</a>
                                                <!-- Modal Structure -->
                                            <div id="modal" class="modal">
                                                <div class="modal-content center" style="height: 275px;">
                                                    <h4>Update User </h4>
                                                    <div class="row">
                                                        <form class="col s12">
                                                            <div class="row">
                                                                <div class="input-field col s6">
                                                                    <input id="first_name" type="text" class="validate">
                                                                    <label for="first_name">First Name</label>
                                                                </div>
                                                                <div class="input-field col s6">
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
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                        <!-- Modal Trigger -->
                                                    <a class="waves-effect green lighten btn white-text modal-trigger" href="#modal2" style="margin: 10px;">Confirm</a>
                                                        <!-- Modal Structure -->
                                                    <div id="modal2" class="modal">
                                                        <div class="modal-content center" style="height: 120px;">
                                                            <p>Sure you want to update this user?</p>
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
                                        <div>
                                                <!-- Modal Trigger -->
                                            <a class="waves-effect red lighten btn white-text modal-trigger" href="#modal3" style="margin: 10px; width: 80px;">Delete</a>
                                                <!-- Modal Structure -->
                                            <div id="modal3" class="modal">
                                                <div class="modal-content center" style="height: 175px;">
                                                    <h4>Delete User </h4>
                                                    <p>Sure you want to delete this user?</p>
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
        </div>
    </section>

    <section class="seccion-agregar-user">
        <div class="fixed-action-btn">
            <a class="waves-effect btn-floating btn-large red modal-trigger" href="#modal4"><i class="material-icons red">add</i></a>
            <div class="col s12 center">
                    <!-- Modal Structure -->
                <div id="modal4" class="modal">
                    <div class="container">
                        <br>
                        <h4>Sign Up</h4>
                        <div class="row">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="first_name" type="text" class="validate">
                                        <label for="first_name">First Name</label>
                                    </div>
                                    <div class="input-field col s6">
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
                    <div class="modal-footer">
                        <a href="#!" class="modal-close waves-effect blue white-text btn-flat center" style="margin: 10px; width: 80px;">Exit</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function(){
            $('.sidenav').sidenav({ edge: 'right' });
    
            $(".dropdown-trigger").dropdown();
    
            new FroalaEditor('textarea#froala-editor');
    
            $('.modal').modal();
            $('#modal2').modal();
            $('#modal3').modal();
            $('#modal4').modal();
        });
    </script>

@endsection
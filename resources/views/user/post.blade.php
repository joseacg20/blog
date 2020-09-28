@extends('layouts.appuser')

@section('content')

    <div class="container">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        @foreach ($users->posts as $user)

            <section class="seccion-contenido">
                <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <input type="hidden" name="id" value="{{$user->id}}">

                            <div class="card-image">
                                <img src="{{$user->imagen}}">
                            </div>
                            <div class="nav-wrapper">
                                <ul class="right hide-on-med-and-down">
                                    <div class="col">
                                        <li class="right"><a class="waves-effect black-text modal-trigger" href="{{ route('post.edit', $user->id)}} "><i class="material-icons black-text">tune</i></a></li>
                                    </div>
                                    <div class="col">
                                            <!-- Modal Trigger -->
                                        <li class="right"><a class="waves-effect black-text modal-trigger" href="#modal2"><i class="material-icons black-text">info_outline</i></a></li>
                                            <!-- Modal Structure -->
                                        <div id="modal2" class="modal">
                                            <div class="modal-content center" style="height: 525px;">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                            <!-- Modal Trigger -->
                                    <li class="right"><a class="waves-effect black-text modal-trigger" href="#modal3"><i class="material-icons black-text">delete</i></a></li>
                                            <!-- Modal Structure -->
                                        <div id="modal3" class="modal">
                                            <div class="modal-content center" style="height: 175px;">
                                                <h4>Delete Post </h4>
                                                <p>Sure you want to delete this post?</p>
                                                <div class="col s12 center">
                                                    <a class="waves-effect green lighten white-text btn" href="{{route('post.delete', $user->id) }}">Confirm</a>
                                                    <a class="modal-close waves-effect blue lighten white-text btn" href="{{ ('post') }}">Cancel</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </ul>
                            </div>
                            <br>
                            <div class="card-content center">
                                <h4>{{$user->titulo}}
                                    <p style="font-size: 12px;">{{$user->created_at}}
                                        <p style="font-size: 15px;">Categoria: 
                                        @foreach ($categories as $item)

                                            @if($user->categories_id == $item->id)
                                                {{ $item->categories }}
                                            @endif

                                        @endforeach 
                                        </p>
                                    </p>
                                </h4>
                                <p>{{$user->descripcion}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        @endforeach
        
        <section class="seccion-agregar-post">
            <div class="fixed-action-btn">
                <a class="btn-floating btn-large waves-effect red btn modal-trigger" href="#modal4"><i class="material-icons">add</i></a>
            </div>
            <div class="col">
                    <!-- Modal Structure -->
                <div id="modal4" class="modal">
                    <br>
                    <h4 class="center">New Post</h4>
                    <div class="modal-content center">
                        <form method="POST" action="http://localhost/blogger/public/storage/create" accept-charset="UTF-8" enctype="multipart/form-data">
                            @csrf
            
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="text" name="titulo" placeholder="Escribe el Titulo de tu post">
                            <div class="form-group">
                                <select name="categoria" id="categoria">
                                    <option value="" selected="selected">Selecciona una Categoria</option>
                                        @foreach ($categories as $item)
                                            <option value="{{ $item->id }}"> {{ $item->categories }} </option>
                                        @endforeach 
                                </select>
                            </div>
                            <br>
                            <div class="form-group">
                                <p>Adjuntar imagen</p>
                                <div class="col-md-6">
                                    <input type="file" class="form-control" name="file" >
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <textarea type="text" name="descripcion" placeholder="Escribe tu post" id="froala-editor"> <p> </p></textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a class="modal-close waves-effect blue lighten white-text btn" href="{{ ('post') }}">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('select');
        });

        $(document).ready(function(){

            $('.sidenav').sidenav({ edge: 'right' });

            $(".dropdown-trigger").dropdown();

            new FroalaEditor('textarea#froala-editor');

            $('.modal').modal();
            $('#modal2').modal();
            $('#modal3').modal();
            $('#modal4').modal();

            $('select').formSelect();
        });
    </script>

@endsection
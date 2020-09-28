@extends('layouts.appuser')

@section('content')

    <br><br>
    <div class="container">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="card-image">
                    <img src="{{'../../'.$posts->imagen}}">
                    </div>
                    <br>
                    <div class="card-content center">
                        <h4>{{$posts->titulo}}
                            <p style="font-size: 10px;">{{$posts->created_at}}
                                <p style="font-size: 15px;">Categoria: 
                                    @foreach ($categories as $item)

                                        @if($posts->categories_id == $item->id)
                                            {{ $item->categories }}
                                        @endif

                                    @endforeach 
                                </p>
                            </p>
                        </h4>
                        <p>{{$posts->descripcion}}</p>
                    </div>
                </div>
            </div>
        </div>

        <form method="HEAD" action="{{'update', $posts->id}}" accept-charset="UTF-8" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="text" name="titulo" placeholder="Escribe el Titulo de tu post" value="{{$posts->titulo}}">
            <div class="form-group">
                <select name="categoria" id="categoria">
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
                <textarea type="text" name="descripcion" placeholder="Escribe tu post" id="froala-editor">{{$posts->descripcion}}"</textarea>
            </div>
            <br>
            <div class="row">
                <div class="input-field col s6">
                    <button type="submit" class="btn btn-primary green right">Update</button>
                </div>
                <div class="input-field col s6">
                    <a class="blue white-text btn left" href="{{ asset('post') }}">Cancel</a>
                </div>
            </div>
        </form>
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
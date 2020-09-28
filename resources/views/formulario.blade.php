@extends('layouts.applogin')

@section('content')

    <br>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-body">
                <form method="POST" action="http://localhost/blogger/public/storage/create" accept-charset="UTF-8" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <input type="text" name="titulo" placeholder="Escribe el Titulo de tu post">

                    <div class="input-field col s12">
                        <select name="categoria" id="categoria">
                            <option value="" selected="selected">Selecciona una Categoria</option>
                            @foreach ($categories as $item)
                                <option value="{{ $item->id }}"> {{ $item->categories }} </option>
                            @endforeach 
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Subir Imagen</label>
                        <div class="col-md-6">
                            <input type="file" class="form-control" name="file" >
                        </div>
                    </div>


                    <input type="text" name="descripcion" placeholder="Escribe tu post">
        
                    <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>


    <div class="fixed-action-btn">
        <a class="btn-floating btn-large waves-effect red btn modal-trigger" href="#modal1"><i class="material-icons">add</i></a>
    </div>
    <!-- Modal Structure -->
    <div id="modal1" class="modal modal-fixed-footer">
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
                    <textarea type="text" name="descripcion" placeholder="Escribe tu post" id="froala-editor"></textarea>
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

    

    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');

        var elems = document.querySelectorAll('.fixed-action-btn');
        var instances = M.FloatingActionButton.init(elems, options);
        });

        // Or with jQuery
        $(document).ready(function(){

            $('.sidenav').sidenav({ edge: 'right' });

            $(".dropdown-trigger").dropdown();

            new FroalaEditor('textarea#froala-editor');

            $('.modal').modal();
            $('#modal2').modal();
            $('#modal3').modal();
            $('#modal4').modal();

            $('select').formSelect();

            $('.fixed-action-btn').floatingActionButton();

        });
    </script>

@endsection
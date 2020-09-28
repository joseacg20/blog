<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Post;
use App\User;
use App\Category;

class StorageController extends Controller
{
    //

    public function index()
    {
        $categories = Category :: all(); 
        
        return view('formulario', compact('categories'));
    }

    public function save(Request $request)
    {   
        $post = new Post;
        $post -> user_id = Auth :: user()->id;
        $post -> categories_id = $request -> categoria;
        $post -> titulo = $request -> titulo;

        //obtenemos el campo file definido en el formulario
        $file = $request->file('file');
 
        //obtenemos el nombre del archivo
        $nombre = $file->getClientOriginalName();

        //indicamos que queremos guardar un nuevo archivo en el disco local
        \Storage::disk('local')->put($nombre,  \File::get($file));

        //Obtener la ruta donde se guardo el archivo
        $public_path = public_path();
        $url = '../storage/storage/'.$nombre;

        $post -> imagen = $url;
        $post -> descripcion = $request -> descripcion;
        $post -> save();
    
        return redirect('post');
    }
}

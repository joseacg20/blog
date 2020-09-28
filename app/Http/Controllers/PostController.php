<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Post;
use App\User;
use App\Category;

class PostController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category :: all(); 
        $userid = Auth :: user()->id;
        $users = User :: find($userid);
        $users -> posts;
        
        return view('user.post', compact('users', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $posts = Post :: findOrFail($id);

        $categories = Category :: all(); 

        return view('user.postedit', compact('posts', 'categories'));
    }

    public function update(Request $request, $id)
    {
        //
        $userid = Auth :: user()->id;
        $users = User :: find($userid);
        $post = Post :: findOrFail($id);

        $post -> categories_id = $request -> get('categoria');
        $post -> titulo = $request -> get('titulo');
        $update_at = $post -> updated_at;
        $post -> created_at = $update_at;
        $post -> descripcion = $request -> get('descripcion');
        $post -> save();

        return redirect('/post');
    }

    public function delete($id)
    {
        //
        $posts = Post :: find($id);
        $posts -> delete();

        return redirect('/post');
    }

}

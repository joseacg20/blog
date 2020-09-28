<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

///////////////////////////////////////////////////////////////////////

Route::post('storage/create', 'StorageController@save');

Route::get('storage/{archivo}', function ($archivo) {
    
    $public_path = public_path();
    $url = $public_path.'/storage/'.$archivo;
    
    //verificamos si el archivo existe y lo retornamos
    if (Storage::exists($archivo))
    {
      return response()->download($url);
    }

    //si no se encuentra lanzamos un error 404.
    abort(404);

});

Route::get('formulario', 'StorageController@index');

//////////////////////////////////////////////////////////////////////

Route::get('post/{post}/update', 'PostController@update');

Route::get('post/{post}/delete', 'PostController@delete')->name('post.delete');

Route :: resource('post','PostController'); 

Route :: resource('friends','FriendsController');

///////////////////////////////////////////////////////////////////////

Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

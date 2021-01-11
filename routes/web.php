<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InspiringController;
use App\Http\Controllers\PostController;
use App\Models\Subject;
// use Auth;

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
    return view('window');
});

// Route::get('/hello-world', function () {
//     return view('hello_world');
// });
Route::get('/show', function () {
    return view('show');
});

Route::get('/speak', function () {
    return view('speak');
});
Route::get('/right', function () {
    return view('right');
});
Route::get('/showinit', function () {
    return view('showinit');
});

Route::get('/speak1', function () {
    return view('speak1');
});


Route::get('/window', function () {
    return view('window');
});

Route::get('/inspire', 'App\Http\Controllers\InspiringController@inspire');

// Route::get('/test', function(){
//     return App\Models\Post::all();
// });

// Route::get('/edit', function(){
//     $post = App\Models\Post::find(1);
//     $post->content = 'Laravel demo';
//     $post->save();
//     return $post;
// });

// Route::get('/add1', function(){
//     $post = new App\Models\Post;
//      $post->content = 'fffffF';
//      $post->subject_id = 1;
//      $post->user_id = 1;
//      $post->save();
//      return $post;
//  });

//  Route::get('/add2', function(){
//     $post = new App\Models\Post;
//      $post->content = 'SSSSSSS';
//      $post->subject_id = 2;
//      $post->user_id = 1;
//      $post->save();
//      return $post;
//  });

//  Route::get('/sub1', function(){
//     $post = new App\Models\Subject;
//      $post->name = 'computer';
//      $post->save();
//      return $post;
//  });
//  Route::get('/sub2', function(){
//     $post = new App\Models\Subject;
//      $post->name = 'network';
//      $post->save();
//      return $post;
//  });
//  Route::get('/get1', function(){
//     $subject = Subject::find(1);
//     $posts = $subject->posts;
//     return $posts;
// });
// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('posts', 'App\Http\Controllers\PostController');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

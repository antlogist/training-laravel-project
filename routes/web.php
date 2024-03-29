<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PostsController;

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

// Route::get('/', function () {
//     return view('home.index', []);
// })->name('home.index');

// Route::get('/contact', function () {
//     return view('home.contact', []);
// })->name('home.contact');

// Route::view('/', 'home.index')->name('home.index');
// Route::view('/contact', 'home.contact')->name('home.contact');

Route::get('/', [HomeController::class, 'home'])
    ->name('home.index');

Route::get('/test', function() {
	return '<h1>Test route!</h1>';
})->name('test');

Route::get('/contact', [HomeController::class, 'contact'])
    ->name('home.contact');

Route::get('/single', AboutController::class)
    ->name('home.single');

Route::resource('/posts', PostsController::class);
// ->only(['index', 'show', 'create', 'store', 'edit', 'update']);
// Route::resource('posts', PostsController::class)->except('index', 'show');

// Route::get('/posts', function() use($posts) {
//     // dd(request()->all());
//     // dd((int)request()->input('page', 1));
//     dd((int)request()->query('page', 1));

//     return view('posts.index', compact('posts'));
//     // return view('posts.index', ['posts' => $posts]);
// })->name('posts.index');

// Route::get('/post/{id}', function ($id) use($posts) {
//     abort_if(!isset($posts[$id]), 404);
//     return view('posts.show', ['post' => $posts[$id]]);
// })->where([
//     'id' => '[0-9]+'
// ])->name('posts.show');

// Route::get('/recent-posts/{days_ago?}', function ($daysAgo = 20) {
//     return 'Posts from ' . $daysAgo . ' days ago';
// })->name('post.recent.index')->middleware('auth');

// Route::prefix('/fun')->name('fun.')->group(function() use($posts) {
//     Route::get('/responses', function() use($posts) {
//         return response($posts, 201)
//             ->header('Content-Type', 'application/json')
//             ->cookie('MY_COOKIE', 'Ant', 3600);
//     })->name('response');

//     Route::get('/redirect', function() {
//         return redirect('/contact');
//     })->name('response');

//     Route::get('/back', function() {
//         return back();
//     })->name('response');

//     Route::get('/named-route', function() {
//         return redirect()->route('posts.show', ['id' => 1]);
//     })->name('response');

//     Route::get('/away', function() {
//         return redirect()->away('https://www.google.com/');
//     })->name('away');

//     Route::get('/json', function() use($posts) {
//         return response()->json($posts);
//     })->name('json');

//     Route::get('/download', function() use($posts) {
//         return response()->download(public_path('test.jpg'), 'railroad.jpg');
//     })->name('download');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

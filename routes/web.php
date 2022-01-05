<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/', 'home.index')->name('home.index');
Route::view('/contact', 'home.contact')->name('home.contact');

Route::get('/post/{id}', function ($id) {
    $posts = [
        1 => [
            'title' => 'Post Title One',
            'content' => 'Test content',
            'is_new' => true
        ],
        2 => [
            'title' => 'Post Title Two',
            'content' => 'Test content Two',
            'is_new' => false
        ]
    ];
    abort_if(!isset($posts[$id]), 404);
    return view('posts.show', ['post' => $posts[$id]]);
})->where([
    'id' => '[0-9]+'
])->name('post.show');

Route::get('/recent-posts/{days_ago?}', function ($daysAgo = 20) {
    return 'Posts from ' . $daysAgo . ' days ago';
})->name('post.recent.index');
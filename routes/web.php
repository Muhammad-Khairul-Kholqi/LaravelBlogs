<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {
    return view ('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function() {
    return view ('about', [
        "nama" => "Khairul Kholqi",
        "title" => "About"
    ]);
});

Route::get('/blog', function() {
    return view ('blog', [
        "title" => "Blog",
        "posts" => Post::all()
    ]);
});

Route::get('/post/{slug}', function($slug) {    
    return view('post', [
        "title" => "Single Post",
        "post" => Post::find($slug)
    ]);
});

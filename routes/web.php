<?php

use Illuminate\Support\Facades\Route;

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
    $blog_posts = [
        [
            "title" => "Judul Post 1",
            "slug" => "judul-post-pertama",
            "author" => "Khairul",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident voluptas ratione sed, labore quo, sequi quas veritatis facilis reiciendis voluptates quis et repudiandae adipisci recusandae, fugiat amet odio placeat. Minus nulla autem explicabo consequatur earum nisi optio necessitatibus, illo fugit cupiditate expedita ipsum voluptates impedit inventore ad, deserunt cumque quam voluptatum vero quo dolor suscipit quae assumenda. Animi excepturi, ducimus officia perferendis odio praesentium dolores pariatur laborum ea a iure corrupti eveniet cum reiciendis architecto! Voluptas unde sunt ipsam iste esse, placeat obcaecati alias id soluta quas voluptatum, molestias hic iusto praesentium fugiat porro suscipit saepe autem quis adipisci. Distinctio?"
        ],
        [
            "title" => "Judul Post 2",
            "slug" => "judul-post-kedua",
            "author" => "Kholqi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident voluptas ratione sed, labore quo, sequi quas veritatis facilis reiciendis voluptates quis et repudiandae adipisci recusandae, fugiat amet odio placeat. Minus nulla autem explicabo consequatur earum nisi optio necessitatibus, illo fugit cupiditate expedita ipsum voluptates impedit inventore ad, deserunt cumque quam voluptatum vero quo dolor suscipit quae assumenda. Animi excepturi, ducimus officia perferendis odio praesentium dolores pariatur laborum ea a iure corrupti eveniet cum reiciendis architecto! Voluptas unde sunt ipsam iste esse, placeat obcaecati alias id soluta quas voluptatum, molestias hic iusto praesentium fugiat porro suscipit saepe autem quis adipisci. Distinctio?"
        ],
    ];

    return view ('blog', [
        "title" => "Blog",
        "posts" => $blog_posts
    ]);
});

Route::get('/post/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post 1",
            "slug" => "judul-post-pertama",
            "author" => "Khairul",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident voluptas ratione sed, labore quo, sequi quas veritatis facilis reiciendis voluptates quis et repudiandae adipisci recusandae, fugiat amet odio placeat. Minus nulla autem explicabo consequatur earum nisi optio necessitatibus, illo fugit cupiditate expedita ipsum voluptates impedit inventore ad, deserunt cumque quam voluptatum vero quo dolor suscipit quae assumenda. Animi excepturi, ducimus officia perferendis odio praesentium dolores pariatur laborum ea a iure corrupti eveniet cum reiciendis architecto! Voluptas unde sunt ipsam iste esse, placeat obcaecati alias id soluta quas voluptatum, molestias hic iusto praesentium fugiat porro suscipit saepe autem quis adipisci. Distinctio?"
        ],
        [
            "title" => "Judul Post 2",
            "slug" => "judul-post-kedua",
            "author" => "Kholqi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident voluptas ratione sed, labore quo, sequi quas veritatis facilis reiciendis voluptates quis et repudiandae adipisci recusandae, fugiat amet odio placeat. Minus nulla autem explicabo consequatur earum nisi optio necessitatibus, illo fugit cupiditate expedita ipsum voluptates impedit inventore ad, deserunt cumque quam voluptatum vero quo dolor suscipit quae assumenda. Animi excepturi, ducimus officia perferendis odio praesentium dolores pariatur laborum ea a iure corrupti eveniet cum reiciendis architecto! Voluptas unde sunt ipsam iste esse, placeat obcaecati alias id soluta quas voluptatum, molestias hic iusto praesentium fugiat porro suscipit saepe autem quis adipisci. Distinctio?"
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] ===  $slug) {
            $new_post = $post;
        }
    }
    
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});

<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
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

    public static function all() {
        return self::$blog_posts;
    }

    public static function find($slug) {
        $posts = self::$blog_posts;
        $post = [];
        foreach($posts as $p) {
            if($p["slug"] ===  $slug) {
                $post = $p;
            }
        }
        return $post;
    }
}


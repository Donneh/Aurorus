<?php

namespace App\Repositories;

use App\Post;
use Illuminate\Support\Facades\DB;

class Posts {

    public function all()
    {
        return Post::all();
    }

    public function popular()
    {
        $posts = Post::popular()->get();
        foreach($posts as $post) {
            echo $post->views;
            echo "<hr>";
        }
        die();
        # Popularity = (views / mostViewsInCollection) * 5.0
    }

}
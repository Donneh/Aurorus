<?php

namespace App\Repositories;

use App\Post;

class Posts {

    public function all()
    {
        return Post::all();
    }

    public function popular()
    {
        # Popularity = (views / mostViewsInCollection) * 5.0
    }

}
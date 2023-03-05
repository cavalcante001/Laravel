<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(Request $request)
    {
        $new_post = [
            'title' => 'Lorem Ipsum Title',
            'content' => 'Lorem Ipsum',
            'author' => 'Paulo Gomes'
        ];

        // Forma mais convencial de criar um registro no banco.
        // $posts = new Post($new_post);
        // $posts->save();

        $post = new Post();
        $post->title = 'Segundo Post';
        $post->content = 'Lorem Ipsum 2';
        $post->author = 'Paulo Gomes';


        $post->save();
        dd($post);
    }
}

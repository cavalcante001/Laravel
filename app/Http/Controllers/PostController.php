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

    public function read(Request $r)
    {
        $post = new Post();
        // $posts = $post->all();

        // o find sempre irá pegar a chave primária
        $post = $post->find(1);

        return $post;
    }

    public function all(Request $r)
    {
        $posts = Post::all();

        return $posts;
    }
}

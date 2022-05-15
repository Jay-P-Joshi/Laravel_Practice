<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function addPost($id)
    {
        $author = Author::find($id);
        $post = new Post();
        $post->title = 'This is Title 3';
        $post->category = 'This is Category 3';
        
        $author->post()->save($post);
    }

    //Get post based on Author ID
    public function showPost($id)
    {
        $post = Author::find($id)->post;
        return $post;
    }
}

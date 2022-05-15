<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Post;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function addAuthor()
    {
        $author = new Author();
        $author->username = 'daku';
        $author->password = 'daku12345';
        $author->save();
    }

    public function showAuthor($id)
    {
        $author = Post::find($id)->author;
        return $author;
    }
}

<?php

use App\Models\Author;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('blogs', [
        'blogs' => Blog::all()
    ]);
});

Route::get('/blog{id}', function ($id) {
    $blog = Blog::find($id);

    return view('blog', ['blog' => $blog]);
});

Route::get('/author', function () {
    return view('authors', [
        'authors' => author::all()
    ]);
});

Route::get('/author{id}', function ($id) {
    $author = author::find($id);

    return view('author', ['author' => $author]);
});

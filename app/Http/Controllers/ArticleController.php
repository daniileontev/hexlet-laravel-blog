<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = \App\Models\Article::paginate();
        return view('article.index', compact('articles'));
    }
}

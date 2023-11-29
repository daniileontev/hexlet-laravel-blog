<?php

namespace App\Http\Controllers;

use App\Models\Article;

// Должен наследоваться от Controller
class PageController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function about()
    {
        $team = [
            ['name' => 'Hodor', 'position' => 'programmer'],
            ['name' => 'Joker', 'position' => 'CEO'],
            ['name' => 'Elvis', 'position' => 'CTO'],
        ];
        // Точка используется вместо /.
        // То есть шаблон находится по пути resources/views/page/about.blade.php
        return view('page.about', ['team' => $team]);
    }

    public function team()
    {
        return view('page.team');
    }

    public function articles()
    {
        $articles = \App\Models\Article::all();
        return view('page.articles', ['articles' => $articles]);
    }
}

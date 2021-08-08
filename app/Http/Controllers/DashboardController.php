<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Episode;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $articles = Article::orderBy('created_at', 'DESC')->get();
        $episodes = Episode::orderBy('created_at', 'DESC')->get();
        return view('dashboard', [
            'articles' => $articles,
            'episodes' => $episodes
        ]);
    }
}
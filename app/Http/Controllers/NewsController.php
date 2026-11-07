<?php

namespace App\Http\Controllers;

use App\Models\NewsArticle;
use Illuminate\Support\Facades\Cache;

class NewsController extends Controller
{
    public function index()
    {
        // Single unified feed, sorted by latest published, tagged by category
        $articles = Cache::remember('news:published', now()->addMinutes(15), function () {
            return NewsArticle::published()
                ->orderByDesc('published_at')
                ->get();
        });

        $featured = $articles->first();
        $rest = $articles->skip(1);

        return view('pages.blog', compact('articles', 'featured', 'rest'));
    }
}

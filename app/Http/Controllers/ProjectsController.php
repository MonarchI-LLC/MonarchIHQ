<?php

namespace App\Http\Controllers;

use App\Models\PortfolioProject;
use Illuminate\Support\Facades\Cache;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Cache::remember('portfolio:published', now()->addMinutes(30), function () {
            return PortfolioProject::published()
                ->latest()
                ->get();
        });

        return view('pages.projects', compact('projects'));
    }
}

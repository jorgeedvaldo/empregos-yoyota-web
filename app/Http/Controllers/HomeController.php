<?php

namespace App\Http\Controllers;

use App\Services\ArticleService;
use App\Services\JobService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(protected JobService $jobService, protected ArticleService $articleService)
    {
    }

    public function index()
    {
        $jobs = $this->jobService->getPaginate(15);
        $articles = $this->articleService->getPaginate(8);
        return view('jobs', compact('jobs', 'articles'));
    }
}

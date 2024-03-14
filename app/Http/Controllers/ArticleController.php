<?php

namespace App\Http\Controllers;


use App\Services\ArticleService;
use App\Services\JobService;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __construct(protected JobService $jobService, protected ArticleService $articleService)
    {
    }

    public function index()
    {
        $articles = $this->articleService->getAll();
        return view('articles', compact('article'));
    }

    public function getBySlug(string $slug)
    {
        $article = $this->articleService->getBySlug($slug);

        if ($article === null) {
            abort(404);
        }

        $lastJobs = $this->jobService->getPaginate(10);
        $lastArticles = $this->articleService->getWithout($slug);

        return  view("article-detail", compact('article', 'lastJobs', 'lastArticles'));
    }
}

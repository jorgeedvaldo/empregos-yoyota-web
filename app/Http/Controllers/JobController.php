<?php

namespace App\Http\Controllers;

use App\Services\ArticleService;
use App\Services\CategoryService;
use App\Services\JobService;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function __construct(protected JobService $jobService, protected CategoryService  $categoryService, protected ArticleService $articleService)
    {
    }

    public function index()
    {
        $jobs = $this->jobService->getAll();
        $categories = $this->categoryService->getAll();
        return view('jobs', compact('jobs', 'categories'));
    }

    public function getBySlug(string $slug)
    {
        $job = $this->jobService->getBySlug($slug);

        if ($job === null) {
            abort(404);
        }

        $lastJobs = $this->jobService->getWithout($slug);
        $lastArticles = $this->articleService->getPaginate(10);

        return  view("job-detail", compact('job', 'lastJobs', 'lastArticles'));
    }
}

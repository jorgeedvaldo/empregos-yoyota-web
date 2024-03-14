<?php

namespace App\Services;

use App\Repositories\ArticleRepository;

class ArticleService {

    public function __construct(protected ArticleRepository $repository)
    {
    }

    public function getAll()
    {
        return $this->repository->getAll();
    }

    public function getBySlug(string $slug)
    {
        return $this->repository->getBySlug($slug);
    }

    public function getPaginate(int $pages = 10)
    {
        return $this->repository->getPaginate($pages);
    }

    public function getWithout(string $slug, int $pages = 5)
    {
        return $this->repository->getWithout($slug, $pages);
    }
}

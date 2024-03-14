<?php

namespace App\Services;

use App\Repositories\JobRepository;

class JobService {

    public function __construct(protected JobRepository $repository)
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

<?php

namespace App\Services;

use App\Repositories\CategoryRepository;

class CategoryService {

    public function __construct(protected CategoryRepository $repository)
    {
    }

    public function getAll()
    {
        return $this->repository->getAll();
    }
}

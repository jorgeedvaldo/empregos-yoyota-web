<?php

namespace App\Repositories;

use App\Models\Category;

class CategoryRepository {

    public function __construct(protected Category $model)
    {
    }

    public function getAll()
    {
        return $this->model->get();
    }
}

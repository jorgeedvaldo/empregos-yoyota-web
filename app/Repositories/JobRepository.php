<?php

namespace App\Repositories;

use App\Models\Job;

class JobRepository {

    public function __construct(protected Job $model)
    {
    }

    public function getAll()
    {
        return $this->model->orderByRaw('id DESC');
    }

    public function getBySlug($slug)
    {
        return $this->model->where('slug', $slug)->get()[0];
    }

    public function getPaginate(int $pages = 10)
    {
        return $this->model->orderByRaw('id DESC')->paginate($pages);
    }

    public function getWithout(string $slug, int $pages = 5)
    {
        return $this->model->where('slug', '<>', $slug)->orderByRaw('id DESC')->paginate($pages);
    }
}

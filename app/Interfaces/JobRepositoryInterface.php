<?php

namespace App\Repositories;

interface JobRepositoryInterface
{
    /**
     * Retrieve all jobs ordered by ID in descending order.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function getAll();

    /**
     * Retrieve a job by its slug.
     *
     * @param string $slug
     * @return \App\Models\Job
     */
    public function getBySlug(string $slug);

    /**
     * Retrieve paginated jobs ordered by ID in descending order.
     *
     * @param int $pages
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getPaginate(int $pages = 10);

    /**
     * Retrieve paginated jobs excluding the one with the given slug, ordered by ID in descending order.
     *
     * @param string $slug
     * @param int $pages
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getWithout(string $slug, int $pages = 5);
}

<?php

namespace App\Repositories;

interface ArticleRepositoryInterface
{
    /**
     * Retrieve all articles ordered by ID in descending order.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAll();

    /**
     * Retrieve an article by its slug.
     *
     * @param string $slug
     * @return \App\Models\Article
     */
    public function getBySlug(string $slug);

    /**
     * Retrieve paginated articles ordered by ID in descending order.
     *
     * @param int $pages
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getPaginate(int $pages = 10);

    /**
     * Retrieve paginated articles excluding the one with the given slug, ordered by ID in descending order.
     *
     * @param string $slug
     * @param int $pages
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getWithout(string $slug, int $pages = 5);
}

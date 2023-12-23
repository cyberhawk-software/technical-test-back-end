<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface BaseRepositoryInterface
{
    /**
     * Get all the models
     *
     * @param array $relations
     * @return Collection
     */
    public function all(array $relations = []): Collection;

    /**
     * Get model by ID
     *
     * @param int $id
     * @param array $relations
     * @param array $appends
     * @return Model|null
     */
    public function getById(
        int $id,
        array $relations = [],
        array $appends = []
    ): ?Model;
}
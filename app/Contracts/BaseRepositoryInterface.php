<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface BaseRepositoryInterface
{
    /**
     * Returns all results for a given Eloquent Model
     *
     * @param Model $model
     * @return Collection
     */
    public function all(Model $model): Collection;
}
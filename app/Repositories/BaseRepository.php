<?php

namespace App\Repositories;

use App\Contracts\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BaseRepositoryInterface
{

    /**
     * Returns all results for a given Eloquent Model
     *
     * @param Model $model
     * @return Collection
     */
    public function all(Model $model): Collection
    {
        return $model->all();
    }
}
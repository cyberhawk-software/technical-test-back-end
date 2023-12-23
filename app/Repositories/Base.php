<?php

namespace App\Repositories;

use App\Contracts\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Base implements BaseRepositoryInterface
{

    protected Model $model;

    /**
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * Get all the models
     *
     * @param array $filters
     * @param array $relations
     * @return Collection
     */
    public function all(array $filters = [], array $relations = []): Collection
    {
        $query = $this->model->with($relations);

        foreach ($filters as $key => $value){
            $query->where($key, $value);
        }

        return $query->get();
    }

    /**
     * Find a model by ID
     *
     * @param int $id
     * @param array $relations
     * @param array $appends
     * @return Model|null
     */
    public function getById(int $id, array $relations = [], array $appends = []): ?Model
    {
        return $this->model->with($relations)->findOrFail($id);
    }
}
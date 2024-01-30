<?php

namespace App\Services;

use App\Contracts\BaseServiceInterface;
use Illuminate\Support\Collection;

class Base implements BaseServiceInterface
{
    private $repository;

    /**
     * @param $repository
     */
    public function __construct($repository)
    {
        $this->repository = $repository;
    }

    public function all(): Collection
    {
        return $this->repository->all();
    }
}
<?php

namespace App\Contracts;


use Illuminate\Support\Collection;

interface BaseServiceInterface
{
    /**
     * Return all for a given Eloquent model
     * @return Collection
     */
    public function all(): Collection;
}
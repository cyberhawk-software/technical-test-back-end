<?php

namespace App\Contracts;

use Ramsey\Collection\Collection;

interface BaseServiceInterface
{
    /**
     * Return all for a given Eloquent model
     * @return Collection
     */
    public function all(): Collection;
}
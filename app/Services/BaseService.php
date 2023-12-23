<?php

namespace App\Services;

use App\Contracts\BaseServiceInterface;
use Ramsey\Collection\Collection;

class BaseService implements BaseServiceInterface
{
    public function all(): Collection
    {
    }
}
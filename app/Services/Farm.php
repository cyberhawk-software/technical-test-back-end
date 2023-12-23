<?php

namespace App\Services;

class Farm extends Base
{
    public function __construct(\App\Repositories\Farm $farmRepository)
    {
        parent::__construct($farmRepository);
    }
}
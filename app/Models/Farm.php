<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Farm extends Model
{
    use HasFactory;

    /**
     * Turbines relationship
     * @return HasMany
     */
    public function turbines() : HasMany
    {
        return $this->hasMany(Turbine::class);
    }
}
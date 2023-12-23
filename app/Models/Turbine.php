<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Turbine extends Model
{
    use HasFactory;

    /**
     * Farm relationship
     * @return BelongsTo
     */
    public function farm(): BelongsTo
    {
        return $this->belongsTo(Turbine::class);
    }

    /**
     * Components relationship
     * @return HasMany
     */
    public function components(): HasMany
    {
        return $this->hasMany(Turbine::class);
    }

    /**
     * Inspections relationship
     * @return HasMany
     */
    public function inspections(): HasMany
    {
        return $this->hasMany(Inspection::class);
    }
}

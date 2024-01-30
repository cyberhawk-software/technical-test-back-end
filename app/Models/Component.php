<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Component extends Model
{
    use HasFactory;

    /**
     * ComponentType relationship
     * @return BelongsTo
     */
    public function componentType(): BelongsTo
    {
        return $this->belongsTo(ComponentType::class);
    }

    /**
     * Turbine relationship
     * @return BelongsTo
     */
    public function turbine(): BelongsTo
    {
        return $this->belongsTo(Turbine::class);
    }

    /**
     * Grades relationship
     * @return HasMany
     */
    public function grades(): HasMany
    {
        return $this->hasMany(Grade::class);
    }
}

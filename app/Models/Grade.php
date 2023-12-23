<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Grade extends Model
{
    use HasFactory;

    /**
     * Inspection relationship
     * @return BelongsTo
     */
    public function inspection(): BelongsTo
    {
        return $this->belongsTo(Inspection::class);
    }

    /**
     * Component relationship
     * @return BelongsTo
     */
    public function component(): BelongsTo
    {
        return $this->belongsTo(Component::class);
    }

    /**
     * GradeType Relationship
     * @return BelongsTo
     */
    public function gradeType(): BelongsTo
    {
        return $this->belongsTo(GradeType::class);
    }
}

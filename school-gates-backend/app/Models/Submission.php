<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 *
 */
class Submission extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'student_id',
        'type',
        'path',
        'assignment_id',
    ];


    /**
     * @return BelongsTo
     */
    public function assignment(): BelongsTo
    {
        return $this->belongsTo( Assignment::class );
    }

    /**
     * @return BelongsTo
     */
    public function student(): BelongsTo
    {
        return $this->belongsTo( Student::class );
    }
}

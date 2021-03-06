<?php

namespace App\Models;

use App\Traits\HasInquiryType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 *
 */
class Course extends Model
{
    use HasFactory, HasInquiryType;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'grade_id',
    ];


    /**
     * @return HasMany
     */
    public function assignments(): HasMany
    {
        return $this->hasMany( Assignment::class );
    }

    /**
     * @return BelongsToMany
     */
    public function teachers(): BelongsToMany
    {
        return $this->belongsToMany( Teacher::class );
    }

    /**
     * @return BelongsTo
     */
    public function grade(): BelongsTo
    {
        return $this->belongsTo( Grade::class );
    }
}

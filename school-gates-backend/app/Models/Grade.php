<?php

namespace App\Models;

use App\Traits\HasInquiryType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 *
 */
class Grade extends Model
{
    use HasFactory, HasInquiryType;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'center_id',
        'gender',
    ];


    /**
     * @return HasMany
     */
    public function courses(): HasMany
    {
        return $this->hasMany( Course::class );
    }

    /**
     * @return HasMany
     */
    public function students(): HasMany
    {
        return $this->hasMany( Student::class );
    }

    /**
     * @return BelongsTo
     */
    public function center(): BelongsTo
    {
        return $this->belongsTo( Center::class );
    }
}

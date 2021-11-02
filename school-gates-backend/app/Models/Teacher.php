<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

/**
 *
 */
class Teacher extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'gender',
    ];


    /**
     * @return BelongsToMany
     */
    public function courses(): BelongsToMany
    {
        return $this->belongsToMany( Course::class );
    }

    /**
     * @return BelongsToMany
     */
    public function centers(): BelongsToMany
    {
        return $this->belongsToMany( Center::class );
    }

    /**
     * @return HasMany
     */
    public function announcements(): HasMany
    {
        return $this->hasMany( Announcement::class );
    }

    /**
     * @return MorphMany
     */
    public function reports(): MorphMany
    {
        return $this->morphMany( Report::class, 'reportable' );
    }

    /**
     * @return MorphMany
     */
    public function inquiries(): MorphMany
    {
        return $this->morphMany( Inquiry::class, 'doable' );
    }
}

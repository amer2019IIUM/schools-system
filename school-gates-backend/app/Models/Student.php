<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

/**
 *
 */
class Student extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'passport',
        'teams_email',
        'gender',
        'password',
        'grade_id',
        'city',
        'phone_number_1',
        'phone_number_2',
        'platform_report',
        'personal_email',
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];


    /**
     * @return HasMany
     */
    public function submissions(): HasMany
    {
        return $this->hasMany( Submission::class );
    }

    /**
     * @return BelongsTo
     */
    public function grade(): BelongsTo
    {
        return $this->belongsTo( Grade::class );
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

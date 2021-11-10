<?php

namespace App\Models;

use App\Traits\HasInquiryCreator;
use App\Traits\HasReport;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 *
 */
class Teacher extends Model
{
    use HasFactory, HasInquiryCreator, HasReport;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'passport',
        'email',
        'gender',
        'password'
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
}

<?php

namespace App\Models;

use App\Traits\HasInquiryCreator;
use App\Traits\HasReport;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 *
 */
class Student extends Model
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
}

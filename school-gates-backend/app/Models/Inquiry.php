<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 *
 */
class Inquiry extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'body',
        'inquiryable_id',
        'inquiryable_type',
        'administrator_id',
        'doable_id',
        'doable_type',
    ];


    /**
     * @return BelongsTo
     */
    public function administrator(): BelongsTo
    {
        return $this->belongsTo( Administrator::class );
    }

    /**
     * @return MorphTo
     */
    public function inquiryable(): MorphTo
    {
        return $this->morphTo();
    }

    /**
     * @return MorphTo
     */
    public function doable(): MorphTo
    {
        return $this->morphTo();
    }
}

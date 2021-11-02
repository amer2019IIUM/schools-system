<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 *
 */
class Administrator extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'department_id',
        'email',
        'role',
    ];


    /**
     * @return BelongsTo
     */
    public function department(): BelongsTo
    {
        return $this->belongsTo( Department::class );
    }

    /**
     * @return HasMany
     */
    public function inquiries(): HasMany
    {
        return $this->hasMany( Inquiry::class );
    }
}

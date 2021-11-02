<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 *
 */
class School extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];


    /**
     * @return HasMany
     */
    public function departments(): HasMany
    {
        return $this->hasMany( Department::class );
    }

    /**
     * @return HasMany
     */
    public function centers(): HasMany
    {
        return $this->hasMany( Center::class );
    }
}

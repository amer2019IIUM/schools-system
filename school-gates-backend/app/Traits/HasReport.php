<?php

namespace App\Traits;

use App\Models\Inquiry;
use App\Models\Report;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait HasReport
{
    /**
     * @return MorphMany
     */
    public function reports(): MorphMany
    {
        return $this->morphMany( Report::class, 'reportable' );
    }
}

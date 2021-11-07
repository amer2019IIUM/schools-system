<?php

namespace App\Traits;

use App\Models\Inquiry;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait HasInquiryType
{
    /**
     * @return MorphMany
     */
    public function inquiries(): MorphMany
    {
        return $this->morphMany( Inquiry::class, 'inquiryable' );
    }
}

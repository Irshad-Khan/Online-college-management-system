<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChallanForm extends Model
{
    protected $fillable = [
        'description',
        'fee','processing_fee',
        'bus_rent',
        'library_fee',
        'security_fee',
        'one_time_scholarship',
        'student_id',
        'challan_number',
        'is_challan_paid'
    ];

        /**
         * Get the student that owns the ChallanForm
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        public function user()
        {
            return $this->belongsTo(User::class, 'student_id', 'id');
        }
}

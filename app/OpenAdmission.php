<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OpenAdmission extends Model
{
    protected $fillable = ['program_id', 'announce_date', 'last_date'];

    /**
     * Get the program associated with the OpenAdmission
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function program()
    {
        return $this->hasOne(Programs::class, 'id', 'program_id');
    }
}

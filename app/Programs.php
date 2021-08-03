<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programs extends Model
{
    protected $fillable = ['title', 'description', 'image', 'duration', 'requirements', 'program_type', 'fee_per_semester'];
}

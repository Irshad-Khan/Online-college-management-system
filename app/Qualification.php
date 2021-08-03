<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    protected $fillable = ['degree_title','board','start_date','end_date','marks','student_id'];
}

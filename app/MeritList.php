<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MeritList extends Model
{
    protected $fillable = ['student_id', 'course_id'];

    /**
     * Get the student that owns the MeritList
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }
}

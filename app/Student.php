<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'user_id',
        'parent_id',
        'class_id',
        'roll_number',
        'gender',
        'phone',
        'dateofbirth',
        'current_address',
        'permanent_address',
    ];

    public function user() 
    {
        return $this->belongsTo(User::class);
    }

    public function parent() 
    {
        return $this->belongsTo(Parents::class);
    }

    public function class() 
    {
        return $this->belongsTo(Grade::class, 'class_id');
    }

    public function attendances() 
    {
        return $this->hasMany(Attendance::class);
    }
    
    /**
     * Get the qualification associated with the Student
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function qualification()
    {
        return $this->hasOne(Qualification::class, 'student_id', 'user_id');
    }
}

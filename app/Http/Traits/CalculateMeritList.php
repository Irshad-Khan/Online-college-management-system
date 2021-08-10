<?php

namespace App\Http\Traits;

use App\MeritList;
use App\Qualification;
use App\Student;
use Illuminate\Support\Facades\Auth;

trait CalculateMeritList
{
    public function getMeritLis($request)
    {
        $list = MeritList::where('course_id',$request->course_id)->get();

        if(count($list) > 0){
            return $list;
        }

        $topStudentIds = Qualification::orderBy('marks', 'DESC')->limit(50)->pluck('student_id');

        $students = Student::whereIn('user_id', $topStudentIds)->where('course_id', $request->course_id)
                            ->where('is_admitted', 1)
                            ->get();
        foreach($students as $student)
        {
            MeritList::create([
                'student_id' => $student->id,
                'course_id' => (int)$request->course_id
            ]);
        }
        return MeritList::whereIn('student_id',$students)->get();

    }
}

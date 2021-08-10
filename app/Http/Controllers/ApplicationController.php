<?php

namespace App\Http\Controllers;

use App\Http\Traits\CalculateMeritList;
use App\MeritList;
use App\OpenAdmission;
use App\Programs;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    use CalculateMeritList;

    public function applyForCourse()
    {
        $admissionIds = OpenAdmission::pluck('program_id');
        $programs = Programs::whereIn('id',$admissionIds)->get();
        return view('applications.apply', compact('programs'));
    }

    public function applicationStatus()
    {
        return view('applications.status', ['student' => Auth::user()->student]);
    }

    public function viewCourseDetail($courseId)
    {
        $program = Programs::findOrFail($courseId);
        return view('applications.program_detail', compact('program'));
    }

    public function apply($programId)
    {
        $user = Auth::user();
        $student = $user->student;
        $student->is_admitted = 1;
        $student->course_id = $programId;
        $student->save();
        session()->flash('success', 'We have received your application. You can inform through merit list.');
        return redirect()->route('application.status');
    }

    public function viewMeritList()
    {
        return view('applications.merit_list',
            ['meritLists' => MeritList::where('student_id', optional(Auth::user()->student)->id)->get()]);
    }
}

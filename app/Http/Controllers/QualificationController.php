<?php

namespace App\Http\Controllers;

use App\Qualification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QualificationController extends Controller
{
    public function create()
    {
        if(Auth::user()->student->qualification){
            session()->flash('success', 'You have already added qualification.');
            return redirect()->route('home');
        }
        return view('backend.qualifications.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'degree_title'  => 'required|string|max:255',
            'board' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'date|after:start_date',
            'marks' => 'required|numeric',
        ],[
            'end_date.after' => 'End Date must be after start date'
        ]);

        $request->request->add(['student_id' => Auth::id()]);
        Qualification::create($request->all());
        session()->flash('success', 'Qualification added successfully.');
        return redirect()->route('profile');
    }

    public function destroy($id)
    {
        Qualification::findOrFail($id)->delete();
        session()->flash('success', 'Your Qualification deleted successfully.');
        return redirect()->route('home');
    }
}

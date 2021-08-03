<?php

namespace App\Http\Controllers;

use App\OpenAdmission;
use App\Programs;
use Illuminate\Http\Request;

class OpenAdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $openAdmissions = OpenAdmission::with('program')->paginate(25);
        return view('backend.open_admission.index', compact('openAdmissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programs = Programs::all();
        return view('backend.open_admission.create', compact('programs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'program_id' => 'required|numeric',
            'announce_date' => 'required|date',
            'last_date' => ['required', 'date']
        ],[
            'program_id.required' => 'Please select Program'
        ]);
        
        OpenAdmission::create($request->all());
        session()->flash('success', 'Admission created successfully');
        return redirect()->route('admissions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OpenAdmission  $openAdmission
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admission = OpenAdmission::findOrFail($id);
        return view('backend.open_admission.show', compact('admission'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OpenAdmission  $openAdmission
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $programs = Programs::all();
        $admission = OpenAdmission::findOrFail($id);
        return view('backend.open_admission.edit', compact('programs','admission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OpenAdmission  $openAdmission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'program_id' => 'required|numeric',
            'announce_date' => 'required|date',
            'last_date' => ['required', 'date']
        ],[
            'program_id.required' => 'Please select Program'
        ]);
        
        OpenAdmission::findOrFail($id)->update($request->all());
        session()->flash('success', 'Admission updated successfully');
        return redirect()->route('admissions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OpenAdmission  $openAdmission
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admission = OpenAdmission::findOrFail($id);
        $admission->delete();
        session()->flash('success', 'Admission deleted successfully.');
        return redirect()->back();
    }
}

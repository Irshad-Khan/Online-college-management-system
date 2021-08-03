<?php

namespace App\Http\Controllers;

use App\Programs;
use Illuminate\Http\Request;

class ProgramsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.programs.index', ['programs' => Programs::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.programs.create');
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
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => ['required','mimes:png,jpg,jpeg'],
            'duration' => ['required', 'string', 'max:255'],
            'requirements' => ['required', 'string'],
            'program_type' => ['required', 'string', 'max:255'],
            'fee_per_semester' => ['required', 'numeric']
        ]);
       
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('programsImages'), $imageName);
        $request = $request->except('image');
        $request['image'] = $imageName;
        Programs::create($request);
        session()->flash('success', 'Program Created Successfully.');
        return redirect()->route('programs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Programs  $programs
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backend.programs.show', ['program' => Programs::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Programs  $programs
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backend.programs.edit', ['program' => Programs::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Programs  $programs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'duration' => ['required', 'string', 'max:255'],
            'requirements' => ['required', 'string'],
            'program_type' => ['required', 'string', 'max:255'],
            'fee_per_semester' => ['required', 'numeric']
        ]);
        if($request->has('image')){
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('programsImages'), $imageName);
            $request = $request->except('image');
            $request['image'] = $imageName;
            Programs::findOrFail($id)->update($request);

        }else{
            Programs::findOrFail($id)->update($request->all());
        }
        session()->flash('success', 'Program updated successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Programs  $programs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $program = Programs::findOrFail($id);
        $program->delete();
        session()->flash('success', 'Program deleted successfully.');
        return redirect()->back();
    }
}

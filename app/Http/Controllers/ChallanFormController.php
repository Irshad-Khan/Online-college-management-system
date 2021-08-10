<?php

namespace App\Http\Controllers;

use App\ChallanForm;
use App\MeritList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChallanFormController extends Controller
{
    public function viewChallanForms()
    {
        $challanForms = ChallanForm::all();
        return view('backend.challan_forms.index', compact('challanForms'));
    }

    public function viewChallanFormGenerator()
    {
        $meritStudents = MeritList::with(['student'])->get();
        return view('backend.challan_forms.view_challan_form_generator', compact('meritStudents'));
    }

    public function storeChallanForm(Request $request)
    {
        $request->validate([
            'student_id' => 'required|numeric',
            'fee' => 'required|numeric',
            'processing_fee' => ['required', 'numeric'],
            'bus_rent' => ['required', 'numeric'],
            'library_fee' => ['required', 'numeric'],
            'security_fee' => ['required', 'numeric'],
            'one_time_scholarship' => ['numeric'],
            'description' => ['required','string'],
        ]);
        $request->request->add(['challan_number' => (string)random_int(100000, 999999)]);
        session()->flash('success', 'Challan form generated successfully');
        ChallanForm::updateOrCreate(['student_id' => $request->student_id],$request->all());
        return redirect()->route('view.challan.forms');
    }

    public function delete($id)
    {
        session()->flash('success', 'Challan form deleted successfully');
        ChallanForm::findOrFail($id)->delete();
        return redirect()->back();
    }


    public function addFee(Request $request)
    {
        $challan = ChallanForm::findOrFail($request->challanid);
        $challan->is_challan_paid = 1;
        $challan->update();

        $student = $challan->user->student;
        $student->is_admitted = 2;
        $student->roll_number = rand(1,50);
        $student->update();

        return response()->json([
            'status' => true,
            'message' => 'Fee added successfully'
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Traits\CalculateMeritList;
use App\OpenAdmission;
use Illuminate\Http\Request;

class MeritListController extends Controller
{
    use CalculateMeritList;

    public function index()
    {
        $admissions  = OpenAdmission::all();
        return view('backend.meritLists.index', compact('admissions'));
    }

    public function generateMeritList(Request $request)
    {
        $admissions  = OpenAdmission::all();
        $meritLists = $this->getMeritLis($request);
        return view('backend.meritLists.index', compact('admissions','meritLists'));
    }
}

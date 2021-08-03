<?php

namespace App\Http\Controllers;

use App\OpenAdmission;
use App\Programs;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $programs = Programs::all();
        $admissions = OpenAdmission::with('program')->get();
        return view('landing.index', compact('programs', 'admissions'));
    }
}

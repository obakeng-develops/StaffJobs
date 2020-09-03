<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs;
use App\Department;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function openings()
    {
        $jobs = Jobs::latest()->paginate(12);
        $departments = Department::latest()->get();

        return view('pages.openings')->with([
            'jobs' => $jobs,
            'departments' => $departments,
        ]);
    }

    public function opening(Request $request, $id)
    {
        $job = Jobs::where('id', $id)->firstOrFail();
        $department = $request['department'];

        return view('pages.opening')->with([
            'job' => $job,
            'department' => $department,
        ]);
    }
}

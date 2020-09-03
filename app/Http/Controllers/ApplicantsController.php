<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Applicants;
use App\Department;
use App\Jobs;

class ApplicantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $firstname = $request['firstname'];
        $lastname = $request['lastname'];
        $email = $request['email'];
        $phone = $request['phone'];
        $cv = $request->file('cv')->store('documents/cv', 'public');
        $coverletter = $request->file('cover')->store('documents/coverletter', 'public');
        $linkedin_profile = $request['linkedin'];
        $how_did_you_hear_about_us = $request['how'];

        $applicant = Applicants::create([
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email,
            'phone' => $phone,
            'cv' => $cv,
            'coverletter' => $coverletter,
            'linkedin_profile' => $linkedin_profile,
            'how_did_you_hear_about_us' => $how_did_you_hear_about_us,
            'department_id' => $id,
        ]);
        
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $app = Applicants::where('id', $id)->first();

        return view('pages.appview')->with('app', $app);
    }

    public function cv($id)
    {
        $cv = Applicants::where('id', $id)->first();

        return response()->download('storage/'.$cv->cv);
    }

    public function cover($id)
    {
        $cover = Applicants::where('id', $id)->first();

        return response()->download('storage/'.$cover->coverletter);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

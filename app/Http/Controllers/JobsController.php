<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs;
use App\User;
use App\Department;
use Auth;

class JobsController extends Controller
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
    public function store(Request $request)
    {
        $job = new Jobs();
        $job->job_name = $request['jobname'];
        $job->description = $request['description'];
        $job->location = $request['location'];
        $job->closes_on = $request['closes'];
        $job->is_closed = 0;
        $job->department_id = $request['department'];
        $request->user()->jobPosts()->save($job);

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function closeJob($id)
    {
        $close = Jobs::find($id)->first();
        $close->is_closed = 1;
        $close->update();

        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editjob = Jobs::where('id', $id)->firstOrFail();
        $departments = Department::get();

        return view('pages.edit')->with([
            'editjob' => $editjob,
            'departments' => $departments,
        ]);
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
        $job = Jobs::where('id', $id)->first();
        $job->job_name = $request['jobname'];
        $job->description = $request['description'];
        $job->location = $request['location'];
        $job->closes_on = $request['closes'];
        $job->department_id = $request['department'];
        $job->is_closed = 0;
        $job->update();

        return redirect()->route('home');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletepost = Jobs::where('id', $id)->first();
        $deletepost->delete();

        return back();
    }
}

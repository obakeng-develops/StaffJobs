<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Jobs;
use App\Applicants;
use App\User;
use App\Department;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jobs = Jobs::latest()->take(10)->paginate(10);
        $applicants = Applicants::latest()->paginate(6);
        $departments = Department::get();

        return view('home')->with([
            'jobs' => $jobs,
            'applicants' => $applicants,
            'departments' => $departments,
        ]);
    }

    /**
     * Show the user's profile
     */
    public function profile($name)
    {
        $user = User::where('firstname', $name)->firstOrFail();

        return view('pages.profile')->with('user', $user);
    }

    public function updateProfile(Request $request, $id)
    {

        $user = User::where('id', $id)->first();
        $user->firstname = $request['firstname'];
        $user->lastname = $request['lastname'];
        $user->profilephoto = $request->file('profilephoto')->store('avatars', 'public');
        $user->email = $request['email'];

        $user->update();

        return back();
    }

    public function getAvatar(Request $request)
    {
        $avatar = $request->profilephoto;

        return $avatar;
    }

}

<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\Student;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function profile()
    {
        if(Auth::user()->user_type === 'student')
        {
            $student = Student::where('student_id',Auth::user()->username)->first();
            return view('profiles.student-profile',compact('student'));
        }
         else if(Auth::user()->user_type === 'supervisor')
        {
            return view('profiles.supervisor-profile');
        }
         else if(Auth::user()->user_type === 'provost')
        {
            return view('profiles.provost-profile');
        }
        else
        {
            return redirect()->back();
        }
    }
    public function editProfile()
    {
        if(Auth::user()->user_type === 'student')
        {
            $student = Student::where('student_id',Auth::user()->username)->first();
            return view('profiles.profile-edit-student',compact('student'));
        }
         else if(Auth::user()->user_type === 'supervisor')
        {
            return view('profiles.supervisor-profile');
        }
         else if(Auth::user()->user_type === 'provost')
        {
            return view('profiles.provost-profile');
        }
        else
        {
            return redirect()->back();
        }
    }

}

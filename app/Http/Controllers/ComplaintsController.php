<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Complaint;
use Auth;
class ComplaintsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        if(Auth::user()->user_type === 'supervisor' || Auth::user()->user_type === 'provost' )
        {
           $complaints = Complaint::all();
            return view('complaints.showAllComplaints',compact('complaints')); 
        }
         else if(Auth::user()->user_type === 'student')
        {
            $matches = ['student_id' => Auth::user()->username,'status' => 'not done'];
           $complaints = Complaint::where($matches)->get();
           //var_dump($complaints);
            return view('complaints.showPrevComplaints',compact('complaints')); 
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('complaints.complaint-student');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if(Auth::user()->user_type === 'student')
        {
            $complaint = new Complaint;
             $complaint->student_id = Auth::user()->username;
            $complaint->title = $request->input('subject');
            $complaint->description = $request->input('details');
            $complaint->status = 'not done';
            $complaint->comment = 'No feedback';
    
        
            $complaint->save();

       // dd($complaint);
        
            return redirect()->route('complaints.create');
        }
        
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

        $complaint = Complaint::where('complaint_id',$id)->first();
        if(Auth::user()->user_type == 'student' && $complaint->student_id == Auth::user()->username)
        {
            return view('complaints.showSingleComplaintStudent',compact('complaint'));
        }
        else
        {
           return view('complaints.showSingleComplaint',compact('complaint')); 
        }
        
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
        if(Auth::user()->user_type==='student')
        {
             $complaint = Complaint::where('complaint_id',$id)->first();
             $complaint->comment = $request->input('comment');
             $complaint->status = 'done';
           
            $complaint->save();
            return redirect()->route('complaints.index');
        }
        else
        {
            return redirect()->back();
        }

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

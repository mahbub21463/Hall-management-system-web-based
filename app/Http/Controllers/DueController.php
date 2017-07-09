<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Due;
use App\Student;
use Datatables;
use Auth;

class DueController extends Controller
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

        if(Auth::user()->user_type==='supervisor' || Auth::user()->user_type==='provost')
        {

            $dues = Due::all();
        return view('dues.showAllDues',compact('dues'));
   
            // $students = Student::where('hall','=',Auth::user()->hall)->get();
     
            // return view('students.showall',compact('students'));
        }
        elseif(Auth::user()->user_type=='student')
        {
            $id=Auth::user()->username;
            $dues = Due::where('student_id',$id)->get();
            return view('dues.due-status',compact('dues'));
          // return redirect()->route('dues.show',$id);
            // $dues = Due::where('student_id',Auth::user()->username());
        //return view('dues.showAllDues',compact('dues'));
        }
        else
        {
            return redirect()->back();
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
        //return "Entered in Due create function";
        return view('dues.addDueSupervisor');
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
        //return "pressed submit button ";

      
       $student_type=$request->input('select_student_type');
       if ($student_type=='Specific Student')
       {
        $due = new due;
        $due->student_id=$request->input('student_id');
        $due->fee_type=$request->input('fee_type');
        $due->amount=$request->input('amount');
        $due->last_payment_date=$request->input('last_payment_date');
        $due->fine_per_day=$request->input('fine_per_day');
        $due->save();

        return redirect()->route('dues.index');

        }

        elseif ($student_type=='All Residents') {
             # code...
        $students=Student::where('resident_status','Resident')->get();

        }
        elseif ($student_type=='All Attached') {
             # code...
        $students=Student::where('resident_status','Attached')->get();

        }
        elseif ($student_type=='Level/Term WIse') {
             # code...
        $level=$request->input('level');
        $term=$request->input('term');
        $students=Student::where('level',$level)->where('term',$term)->get();

        }
        elseif ($student_type=='All Students') {
        
        $students=Student::all();

        }

        


        foreach ($students as $student) {
            # code...
            $due = new due;
            $due->student_id=$student->student_id;
            $due->fee_type=$request->input('fee_type');
            $due->amount=$request->input('amount');
            $due->last_payment_date=$request->input('last_payment_date');
            $due->fine_per_day=$request->input('fine_per_day');
            $due->save();
        }


        //return redirect()->route('dues.create');
    return redirect()->route('dues.index');
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
        
        $dues= Due::where('student_id',$id)->get();
        return view('dues.showOneStudentDues',compact('dues'));
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

    
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Student;
use App\TempStudent;
use App\User;
use Datatables;
use Auth;
use App;
use PDF;
class StudentController extends Controller
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
    public function downloadStudentList()
    {
        $students = Student::where('hall','=',Auth::user()->hall)->get();
        $hallname = Auth::user()->hall;
        $pdf = PDF::loadView('students.downloadStudentList',compact('students','hallname'));
       return $pdf->download('studentsmahbub.pdf');
    }
    public function index()
    {

        if(Auth::user()->user_type==='supervisor' || Auth::user()->user_type==='provost')
        {
   
            $students = Student::where('hall','=',Auth::user()->hall)->get();
     
            return view('students.showall',compact('students'));
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
        if(Auth::user()->user_type==='supervisor' || Auth::user()->user_type==='provost')
        {
           return view('students.add-students');
        }
        else
        {
            return redirect()->back();
        }
        
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
         // $students = Student::all();
         // return view('students.showall',compact('students'));
        if(Auth::user()->user_type==='supervisor')
        {
            
         
         if($request->input('student_id1'))
         {
            $tstudent= new TempStudent;
         $tstudent->student_id = $request->input('student_id1');
         $tstudent->name = $request->input('name1');
         $tstudent->dept = $request->input('dept1');
         $tstudent->level = $request->input('level1');
         $tstudent->term = $request->input('term1');
         $tstudent->resident_status = $request->input('resident_status1');
          if($tstudent->resident_status == "Resident")
         {
            $tstudent->room_no = $request->input('room_no1');
         }
         else
         {
            $tstudent->room_no =null;
         }
 $tstudent->hall = Auth::user()->hall;
         $tstudent->save();
         }
        
          if($request->input('student_id2'))
         {
         $tstudent= new TempStudent;
         $tstudent->student_id = $request->input('student_id2');
         $tstudent->name = $request->input('name2');
         $tstudent->dept = $request->input('dept2');
         $tstudent->level = $request->input('level2');
         $tstudent->term = $request->input('term2');
         $tstudent->resident_status = $request->input('resident_status2');
          if($tstudent->resident_status == "Resident")
         {
            $tstudent->room_no = $request->input('room_no2');
         }
         else
         {
            $tstudent->room_no =null;
         }
            $tstudent->hall = Auth::user()->hall;
         $tstudent->save();

        }
          if($request->input('student_id3'))
         {
         $tstudent= new TempStudent;
         $tstudent->student_id = $request->input('student_id3');
         $tstudent->name = $request->input('name3');
         $tstudent->dept = $request->input('dept3');
         $tstudent->level = $request->input('level3');
         $tstudent->term = $request->input('term3');
         $tstudent->resident_status = $request->input('resident_status3');
          if($tstudent->resident_status == "Resident")
         {
            $tstudent->room_no = $request->input('room_no3');
         }
         else
         {
            $tstudent->room_no =null;
         };
        $tstudent->hall = Auth::user()->hall;
         $tstudent->save();
        }

         if($request->input('student_id4'))
         {
         $tstudent= new TempStudent;
         $tstudent->student_id = $request->input('student_id4');
         $tstudent->name = $request->input('name4');
         $tstudent->dept = $request->input('dept4');
         $tstudent->level = $request->input('level4');
         $tstudent->term = $request->input('term4');
         $tstudent->resident_status = $request->input('resident_status4');
          if($tstudent->resident_status == "Resident")
         {
            $tstudent->room_no = $request->input('room_no4');
         }
         else
         {
            $tstudent->room_no =null;
         }
         $tstudent->hall = Auth::user()->hall;
         $tstudent->save();
        }

         if($request->input('student_id5'))
         {
         $tstudent= new TempStudent;
         $tstudent->student_id = $request->input('student_id5');
         $tstudent->name = $request->input('name5');
         $tstudent->dept = $request->input('dept5');
         $tstudent->level = $request->input('level5');
         $tstudent->term = $request->input('term5');
         $tstudent->resident_status = $request->input('resident_status5');
         if($tstudent->resident_status == "Resident")
         {
            $tstudent->room_no = $request->input('room_no5');
         }
         else
         {
            $tstudent->room_no =null;
         }
         $tstudent->hall = Auth::user()->hall;
         $tstudent->save();
        }
         return redirect()->route('students.create');
      }
      
        
    }
    public function showTempStudents()
    {
        if(Auth::user()->user_type==='provost')
        {
            $students = TempStudent::all();
            return view('students.temp-students',compact('students'));
        }
    }

    public function approve()
    {
        if(Auth::user()->user_type==='provost')
        {
            $tstudents = TempStudent::all();
            foreach( $tstudents as $tstudent)
            {
                $student = new Student;
                $student->student_id = $tstudent->student_id;
                $student->name = $tstudent->name;
                $student->dept = $tstudent->dept;
                $student->hall= $tstudent->hall;
                $student->level = $tstudent->level;
                $student->term= $tstudent->term;
                $student->resident_status = $tstudent->resident_status;
                $student->room_no = $tstudent->room_no;
                $student->save();
                $user = new User;
                $user->username = $student->student_id;
                $user->user_type = 'student';
                $user->hall = $student->hall;
                $user->password = bcrypt($student->student_id);
                $user->save();
            }
            TempStudent::truncate();
            return redirect()->route('temp-students.show');
            //return view('students.temp-students',compact('students'));
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
        $student = Student::where('student_id',$id)->first();
        return view('students.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::user()->user_type==='supervisor' || Auth::user()->user_type==='provost')
        {
            $student = Student::where('student_id',$id)->first();
            return view('students.edit',['student' => $student]);
        }
        else
        {
            return redirect()->back();
        }
      

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
        if(Auth::user()->user_type==='supervisor' || Auth::user()->user_type==='provost')
        {
             //
        // $this->validate($request,[
        //     'student_id' => 'required|integer',
        //     'name' => 'required|max:50',
        //     'amount' => 'required|numeric',
        //     'dept' => 'required',
        //     'level' => 'required|integer',
        //      'term' => 'required|integer',
        //      'room_no' => 'required|integer',
        //      'mess_card_no' => 'required|integer',
        //      'library' => 'required|integer',
        //      'resident_status' => 'required|max:10',
        //      'phone_no' => 'required|max:15',
        //      'blood_group' => 'required|max:5',

        //     ]);

            $student = Student::where('student_id',$id)->first();
            $student->student_id = $request->input('student_id');
            $student->name = $request->input('name');
            $student->dept = $request->input('dept');
            $student->level = $request->input('level');
            $student->term = $request->input('term');
            $student->room_no = $request->input('room_no');
            $student->phone_no = $request->input('phone_no');
            $student->blood_group = $request->input('blood_group');
            $student->mess_card_no = $request->input('mess_card_no');
            $student->library_card_no = $request->input('library_card_no');
            $student->resident_status = $request->input('resident_status');
            $student->permanent_address = $request->input('permanent_address');
            $student->save();

            return redirect()->route('students.show',$student->student_id);
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
       // return "sfljka;dja;kjd";
    }
    

}

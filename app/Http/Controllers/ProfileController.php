<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\Student;
use App\Employee;
class ProfileController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        if(Auth::user()->user_type === 'student')
        {
            $student = Student::where('student_id',Auth::user()->username)->first();
            return view('profiles.student-profile',compact('student'));
        }
         else if(Auth::user()->user_type === 'supervisor')
        {
            $employee = Employee::where('employee_id',Auth::user()->username)->first();
            return view('profiles.supervisor-profile',compact('employee'));
        }
         else if(Auth::user()->user_type === 'provost')
        {
            $employee = Employee::where('employee_id',Auth::user()->username)->first();
            return view('profiles.provost-profile',compact('employee'));
        }
        else
        {
            return redirect()->back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
        if(Auth::user()->user_type === 'student')
        {
            $student = Student::where('student_id',Auth::user()->username)->first();
            return view('profiles.profile-edit-student',compact('student'));
        }
         else if(Auth::user()->user_type === 'supervisor')
        {
            $employee = Employee::where('employee_id',Auth::user()->username)->first();
            return view('profiles.profile-edit-supervisor',compact('employee'));
        }
         else if(Auth::user()->user_type === 'provost')
        {
            $employee = Employee::where('employee_id',Auth::user()->username)->first();
            return view('profiles.profile-edit-provost',compact('employee'));
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

            $employee = Employee::where('employee_id',$id)->first();
            
            $employee->name = $request->input('name');
            //$student->dept = $request->input('dept');
            //$student->level = $request->input('level');
            //$student->term = $request->input('term');
            //$student->room_no = $request->input('room_no');
            $employee->phone_no = $request->input('phone_no');
            $employee->blood_group = $request->input('blood_group');
            //$student->mess_card_no = $request->input('mess_card_no');
            //$student->library_card_no = $request->input('library_card_no');
            //$student->resident_status = $request->input('resident_status');
            $employee->permanent_address = $request->input('permanent_address');
            if ($request->hasFile('profilepic')) {
                    $request->file('profilepic')->move("/home/mahbub/testproject/public/profilepics", $employee->employee_id);
            }
            $employee->save();

            return redirect()->route('profile.show');
        }
        else if(Auth::user()->user_type==='student')
        {
            $student = Student::where('student_id',$id)->first();
            $student->phone_no = $request->input('phone_no');
            $student->blood_group = $request->input('blood_group');
            $student->permanent_address = $request->input('permanent_address');
            //$student->profile_pic = $request->input('profilepic');
            //var_dump($request->input('profilepic'));
            if ($request->hasFile('profilepic')) {
                    $request->file('profilepic')->move("/home/mahbub/testproject/public/profilepics", $student->student_id);
            }
            
            $student->save();
            return redirect()->route('profile.show');
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

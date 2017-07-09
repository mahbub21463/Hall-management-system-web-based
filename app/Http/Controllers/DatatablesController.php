<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Datatables;
use App\Student;
class DatatablesController extends Controller
{
    //
    public function getIndex()
 {
//       $students = Student::all();
//        return view('students.showall',['students' => $students]);
	return view('students.showall');
}

/**
 * Process datatables ajax request.
 *
 * @return \Illuminate\Http\JsonResponse
 */
public function anyData()
{
    return Datatables::of(Student::query())->make(true);
}
}

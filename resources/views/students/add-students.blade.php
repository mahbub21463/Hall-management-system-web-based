 @extends('layouts.master-supervisor-side')

 @section('stylesheets')



 @endsection

 @section('content')




 <div class="row" style="text-align:center">
 <h1> <span class="label label-default">Add Students</span></h1>
 </div>
 <hr>
 {!!Form::open(['route' => 'students.store']) !!}
 <div class="row">
  <div class='col-md-12'>
  
    <table id="add-students-table" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead class="thead-inverse">
        <tr>
            <tr>
           <th>Student ID</th>
            <th>Name</th>
            <th>Department</th>
            <th>Level</th>
            <th>Term</th>
            <th>Resident Status</th>
            <th>Room No</th>
        </tr>
       
        </tr>
    </thead>
 
    <tfoot class="thead-inverse">
        <tr>
           <th>Student ID</th>
            <th>Name</th>
            <th>Department</th>
            <th>Level</th>
            <th>Term</th>
            <th>Resident Status</th>
            <th>Room No</th>
        </tr>
    </tfoot>
 
    <tbody>
        <tr>
            <td><input type="text" name="student_id1"/></td>
            
            <td><input type="text" name="name1"/></td>

            <td>
                <select name="dept1" style="border:0;
                    width:100%">
                    <option value="ARCH">ARCH</option>
                    <option value="CIVIL">CIVIL</option>
                    <option value="CSE">CSE</option>
                    <option value="EEE">EEE</option>
                    <option value="IPE">IPE</option>
                    <option value="ME">ME</option>
                    <option value="MME">MME</option>
                    <option value="NAME">NAME</option>
                    <option value="URP">URP</option>

                    <option value="WRE">WRE</option>

                </select> 
       
            </td>
            <td>
                <select name="level1" style="border:0;
                    width:100%">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    

                </select> 
       
            </td>
            <td>
                <select name="term1" style="border:0;
                    width:100%">
                    <option value="1">1</option>
                    <option value="2">2</option>
                   
                    

                </select> 
       
            </td>
            <td>
                <select name="resident_status1" style="border:0;
                    width:100%">
                    <option value="Attached">Attached</option>
                    <option value="Resident">Resident</option>
                   
                    

                </select> 
       
            </td>

            <td><input type="text" name="room_no1"/></td>
            
            
        </tr>
         <tr>
            <td><input type="text" name="student_id2"/></td>
            
            <td><input type="text" name="name2"/></td>

            <td>
                <select name="dept2" style="border:0;
                    width:100%">
                    <option value="ARCJ">ARCH</option>
                    <option value="CIVIL">CIVIL</option>
                    <option value="CSE">CSE</option>
                    <option value="EEE">EEE</option>
                    <option value="IPE">IPE</option>
                    <option value="ME">ME</option>
                    <option value="MME">MME</option>
                    <option value="NAME">NAME</option>
                    <option value="URP">URP</option>

                    <option value="WRE">WRE</option>

                </select> 
       
            </td>
            <td>
                <select name="level2" style="border:0;
                    width:100%">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    

                </select> 
       
            </td>
            <td>
                <select name="term2" style="border:0;
                    width:100%">
                    <option value="1">1</option>
                    <option value="2">2</option>
                   
                    

                </select> 
       
            </td>
            <td>
                <select name="resident_status2" style="border:0;
                    width:100%">
                    <option value="Attached">Attached</option>
                    <option value="Resident">Resident</option>
                   
                    

                </select> 
       
            </td>

            <td><input type="text" name="room_no2"/></td>
            
            
        </tr>
         <tr>
            <td><input type="text" name="student_id3"/></td>
            
            <td><input type="text" name="name3"/></td>

            <td>
                <select name="dept3" style="border:0;
                    width:100%">
                    <option value="ARCJ">ARCH</option>
                    <option value="CIVIL">CIVIL</option>
                    <option value="CSE">CSE</option>
                    <option value="EEE">EEE</option>
                    <option value="IPE">IPE</option>
                    <option value="ME">ME</option>
                    <option value="MME">MME</option>
                    <option value="NAME">NAME</option>
                    <option value="URP">URP</option>

                    <option value="WRE">WRE</option>

                </select> 
       
            </td>
            <td>
                <select name="level3" style="border:0;
                    width:100%">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    

                </select> 
       
            </td>
            <td>
                <select name="term3" style="border:0;
                    width:100%">
                    <option value="1">1</option>
                    <option value="2">2</option>
                   
                    

                </select> 
       
            </td>
            <td>
                <select name="resident_status3" style="border:0;
                    width:100%">
                    <option value="Attached">Attached</option>
                    <option value="Resident">Resident</option>
                   
                    

                </select> 
       
            </td>

            <td><input type="text" name="room_no3"/></td>
            
            
        </tr>
         <tr>
            <td><input type="text" name="student_id4"/></td>
            
            <td><input type="text" name="name4"/></td>

            <td>
                <select name="dept4" style="border:0;
                    width:100%">
                    <option value="ARCJ">ARCH</option>
                    <option value="CIVIL">CIVIL</option>
                    <option value="CSE">CSE</option>
                    <option value="EEE">EEE</option>
                    <option value="IPE">IPE</option>
                    <option value="ME">ME</option>
                    <option value="MME">MME</option>
                    <option value="NAME">NAME</option>
                    <option value="URP">URP</option>

                    <option value="WRE">WRE</option>

                </select> 
       
            </td>
            <td>
                <select name="level4" style="border:0;
                    width:100%">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    

                </select> 
       
            </td>
            <td>
                <select name="term4" style="border:0;
                    width:100%">
                    <option value="1">1</option>
                    <option value="2">2</option>
                   
                    

                </select> 
       
            </td>
            <td>
                <select name="resident_status4" style="border:0;
                    width:100%">
                    <option value="Attached">Attached</option>
                    <option value="Resident">Resident</option>
                   
                    

                </select> 
       
            </td>

            <td><input type="text" name="room_no4"/></td>
            
            
        </tr>
         <tr>
            <td><input type="text" name="student_id5"/></td>
            
            <td><input type="text" name="name5"/></td>

            <td>
                <select name="dept5" style="border:0;
                    width:100%">
                    <option value="ARCJ">ARCH</option>
                    <option value="CIVIL">CIVIL</option>
                    <option value="CSE">CSE</option>
                    <option value="EEE">EEE</option>
                    <option value="IPE">IPE</option>
                    <option value="ME">ME</option>
                    <option value="MME">MME</option>
                    <option value="NAME">NAME</option>
                    <option value="URP">URP</option>

                    <option value="WRE">WRE</option>

                </select> 
       
            </td>
            <td>
                <select name="level5" style="border:0;
                    width:100%">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    

                </select> 
       
            </td>
            <td>
                <select name="term5" style="border:0;
                    width:100%">
                    <option value="1">1</option>
                    <option value="2">2</option>
                   
                    

                </select> 
       
            </td>
            <td>
                <select name="resident_status5" style="border:0;
                    width:100%">
                    <option value="Attached">Attached</option>
                    <option value="Resident">Resident</option>
                   
                    

                </select> 
       
            </td>

            <td><input type="text" name="room_no5"/></td>
            
            
        </tr>
        
       
    </tbody>
</table>
   
  
  </div>  
</div>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
         {{Form::submit('Forward to Provost',['class' => 'btn btn-success btn-lg btn-block'])}}
   
    </div>
</div>
{!!Form::close()!!}
@endsection

@section('scripts')

@endsection
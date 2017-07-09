 @extends('layouts.master-student-side')

 @section('stylesheets')




 @endsection

 @section('content')



<div class="row" style="text-align:center">
 <h1> <span class="label label-default">My Profile</span></h1>
 </div> 

<div class="row">
    <div class="col-md-1">
      
    </div>
    <div class="col-md-10">

        
     
       
        <div class="row form-group">
          <div class="col-md-2" style="height:70px">
              {{ Form::label('student_id', 'Student ID:',['class' => 'control-label']) }}
          </div>
            <div class="col-md-2" style="height:70px">
                <h4><span class="label label-success">{{$student->student_id}}</span></h4>
           
            </div>
            
            <div class="col-md-5" style="height:70px">
              
            </div>
            <div class="col-md-3" style="float:right;height:140px">
            <?php
                $username = Auth::user()->username;
                echo "<img src='/profilepics/".$username."'"." height='140px' width='200px'>"

            ?>
            </div>

            <div class="col-md-2" style="height:70px">
                {{ Form::label('name', 'Student Name:',['class' => 'control-label']) }}
            </div>
            
            <div class="col-md-3" style="height:70px">
                <!-- {{ Form::text('name',$student->name,   ['class' => 'form-control']) }} -->
                <h4><span class="label label-success">{{$student->name}}</span></h4>
            </div>
            <div class="col-md-2" style="height:70px">
                {{ Form::label('Hall', 'Hall Name:',['class' => 'control-label']) }}
            </div>
            <div class="col-md-2" style="height:70px">
               
                <h4><span class="label label-success">{{$student->hall}}</span></h4>
            </div>
        </div>
        <!-- <hr>  

        
        <div class="row form-group">
            <div class="col-md-2">
                {{ Form::label('name', 'Student Name:',['class' => 'control-label']) }}
            </div>
            
            <div class="col-md-3">
               
                <h4><span class="label label-success">{{$student->name}}</span></h4>
            </div>
            <div class="col-md-2">
                {{ Form::label('Hall', 'Hall Name:',['class' => 'control-label']) }}
            </div>
            <div class="col-md-3">
               
                <h4><span class="label label-success">{{$student->hall}}</span></h4>
            </div>
        </div> -->
        <hr> 
        <div class="row form-group">
            <div class="col-md-2">
               {{ Form::label('dept', 'Department:',['class' => 'control-label']) }}
            </div>
            
            
              <div class="col-md-2">
                  <!-- {{Form::select('dept', ['CSE' => 'CSE', 'EEE' => 'EEE','ME' => 'ME', 'MME' => 'MME','IPE' => 'IPE', 'CIVIL' => 'CIVIL','NAME' => 'NAME', 'WRE' => 'WRE','URP' => 'URP', 'ARCH' => 'ARCH',], $student->dept,['class'=>'form-control'])}} -->
                  <h4><span class="label label-success">{{$student->dept}}</span></h4>
           
              </div>  
              <div class="col-md-1">
                
              </div>
             <div class="col-md-2">
                 {{ Form::label('level', 'Level:',['class' => 'control-label']) }}
             </div>
             

            <div class="col-md-1">
                 <!--  {{Form::select('level', ['1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5'], $student->level,['class'=>'form-control'])}} -->
                 <h4><span class="label label-success">{{$student->level}}</span></h4>
           
              </div>  
       
              <div class="col-md-1">

             </div>
              <div class="col-md-2">
                 {{ Form::label('term', 'Term:',['class' => 'control-label']) }}
              </div>
              

       
               <div class="col-md-1">
                 <!--  {{Form::select('term', ['1'=>'1','2'=>'2'], $student->term,['class'=>'form-control'])}} -->
                 <h4><span class="label label-success">{{$student->term}}</span></h4>
           
              </div> 

    </div>
    <hr> 
    <div class="row form-group">
        <div class="col-md-2">
            {{ Form::label('resident_status', 'Resident Status:',['class' => 'control-label']) }}
        </div>
       

        <div class="col-md-2">
                  <!-- {{Form::select('resident_status', ['Resident'=>'Resident','Attached'=>'Attached'], $student->resident_status,['class'=>'form-control'])}} -->
                <h4><span class="label label-success">{{$student->resident_status}}</span></h4>
         </div>
         <div class="col-md-1">

        </div>
         <div class="col-md-2">
           {{ Form::label('phone_no', 'Phone No:',['class' => 'control-label']) }}
         </div>
        
         <div class="col-md-2">
           <!-- ? {{ Form::text('phone_no',$student->phone_no,   ['class' => 'form-control']) }} -->
           <h4><span class="label label-success">{{$student->phone_no}}</span></h4>
         </div>
       
        
        <div class="col-md-2">
           {{ Form::label('blood_group', 'Blood Group:',['class' => 'control-label']) }}
        </div>
       
        <div class="col-md-1">
                 <!--  {{Form::select('blood_group', ['A+'=>'A+','A-'=>'A-','B+'=>'B+','B-'=>'B-','AB+'=>'AB+','AB-'=>'AB-','O+'=>'O+','O-'=>'O-'], $student->blood_group,['class'=>'form-control'])}} -->
                 <h4><span class="label label-success">{{$student->blood_group}}</span></h4>
           
        </div>

    </div>
    <hr> 

    <div class="row form-group">
      <div class="col-md-2">
         {{ Form::label('room_no', 'Room No:',['class' => 'control-label']) }}
      </div>
        
      <div class="col-md-1">
         <h4><span class="label label-success">{{$student->room_no}}</span></h4>
       <!-- {{ Form::text('room_no',$student->room_no,   ['class' => 'form-control']) }} -->
      </div>
        <div class="col-md-2">

        </div>
         <div class="col-md-2">
                 {{ Form::label('mess_card_no', 'Mess Card No:',['class' => 'control-label']) }}
        </div> 
       
        <div class="col-md-1">
            <!-- {{ Form::text('mess_card_no',$student->mess_card_no,   ['class' => 'form-control']) }} -->
        <h4><span class="label label-success">{{$student->mess_card_no}}</span></h4>
        </div>
        
         <div class="col-md-1">

        </div>
        <div class="col-md-2">
           {{ Form::label('library_card_no', 'Library Card No:',['class' => 'control-label']) }}
        </div>
        
        <div class="col-md-1">
            <!-- {{ Form::text('library_card_no',$student->library_card_no,   ['class' => 'form-control']) }} -->
        <h4><span class="label label-success">{{$student->library_card_no}}</span></h4>
        </div>
        
    </div>
    <!-- <hr>  -->
    <div class="row form-group">
        <div class="col-md-2">
           {{ Form::label('permanent_address', 'Permanent Address:',['class' => 'control-label']) }}
        </div>
       
        <div class="col-md-1">

        </div>
        <div class="col-md-7">
          {{ Form::textarea('permanent_address', $student->permanent_address,['readonly','class' => 'form-control','rows' => 4]) }}
        </div>
        


    </div>


    <!-- <hr> -->
    <div class="row form-group">
      <div class="col-md-5">

      </div>
      <div class="col-md-2">
  <a type="button" href="/profile-edit" class='btn btn-primary btn-block'>Edit</a>
     </div>
      
      
    
      
     <div class="col-md-5">

     </div>





    </div>

   
    
   </div>
</div>




@endsection

@section('scripts')


@endsection
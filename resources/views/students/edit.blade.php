 @extends('layouts.master-supervisor-side')

 @section('stylesheets')




 @endsection

 @section('content')



     
   

<div class="row">
  
    <div class="col-md-12">

        {!! Form::model($student, ['route' => ['students.update',$student->student_id] ,'method' => 'put']) !!}
    
       
        <div class="row form-group">
          <div class="col-md-2">
              {{ Form::label('student_id', 'Student ID:',['class' => 'control-label']) }}
          </div>
            <div class="col-md-2">
                {{ Form::text('student_id',$student->student_id,   ['class' => 'form-control']) }}
            </div>
            
            
        </div>
        <hr>  

        
        <div class="row form-group">
            <div class="col-md-2">
                {{ Form::label('name', 'Student Name:',['class' => 'control-label']) }}
            </div>
            
            <div class="col-md-3">
                {{ Form::text('name',$student->name,   ['class' => 'form-control']) }}
            </div>
            
        </div>
        <hr> 
        <div class="row form-group">
            <div class="col-md-2">
               {{ Form::label('dept', 'Department:',['class' => 'control-label']) }}
            </div>
            
            
              <div class="col-md-2">
                  {{Form::select('dept', ['ARCH' => 'ARCH', 'CIVIL' => 'CIVIL', 'CSE' => 'CSE', 'EEE' => 'EEE','IPE' => 'IPE','ME' => 'ME', 'MME' => 'MME','NAME' => 'NAME','URP' => 'URP', 'WRE' => 'WRE'], $student->dept,['class'=>'form-control'])}}
           
              </div>  
              <div class="col-md-1">
                
              </div>
             <div class="col-md-2">
                 {{ Form::label('level', 'Level:',['class' => 'control-label']) }}
             </div>
             

            <div class="col-md-1">
                  {{Form::select('level', ['1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5'], $student->level,['class'=>'form-control'])}}
           
              </div>  
       
              <div class="col-md-1">

             </div>
              <div class="col-md-2">
                 {{ Form::label('term', 'Term:',['class' => 'control-label']) }}
              </div>
              

       
               <div class="col-md-1">
                  {{Form::select('term', ['1'=>'1','2'=>'2'], $student->term,['class'=>'form-control'])}}
           
              </div> 

    </div>
    <hr> 
    <div class="row form-group">
        <div class="col-md-2">
            {{ Form::label('resident_status', 'Resident Status:',['class' => 'control-label']) }}
        </div>
       

        <div class="col-md-2">
                  {{Form::select('resident_status', ['Resident'=>'Resident','Attached'=>'Attached'], $student->resident_status,['class'=>'form-control'])}}
           
         </div>
         <div class="col-md-1">

        </div>
         <div class="col-md-1">
           {{ Form::label('phone_no', 'Phone:',['class' => 'control-label']) }}
         </div>
        
         <div class="col-md-2">
            {{ Form::text('phone_no',$student->phone_no,   ['class' => 'form-control']) }}
         </div>
       
        
        <div class="col-md-2">
           {{ Form::label('blood_group', 'Blood Group:',['class' => 'control-label']) }}
        </div>
       
        <div class="col-md-2">
                  {{Form::select('blood_group', ['A+'=>'A+','A-'=>'A-','B+'=>'B+','B-'=>'B-','AB+'=>'AB+','AB-'=>'AB-','O+'=>'O+','O-'=>'O-'], $student->blood_group,['class'=>'form-control'])}}
           
        </div>

    </div>
    <hr> 

    <div class="row form-group">
      <div class="col-md-2">
         {{ Form::label('room_no', 'Room No:',['class' => 'control-label']) }}
      </div>
        
      <div class="col-md-1">
        {{ Form::text('room_no',$student->room_no,   ['class' => 'form-control']) }}
      </div>
        <div class="col-md-2">

        </div>
         <div class="col-md-2">
                 {{ Form::label('mess_card_no', 'Mess Card No:',['class' => 'control-label']) }}
        </div> 
       
        <div class="col-md-1">
           {{ Form::text('mess_card_no',$student->mess_card_no,   ['class' => 'form-control']) }}
        </div>
        
         <div class="col-md-1">

        </div>
        <div class="col-md-2">
           {{ Form::label('library_card_no', 'Library Card No:',['class' => 'control-label']) }}
        </div>
        
        <div class="col-md-1">
           {{ Form::text('library_card_no',$student->library_card_no,   ['class' => 'form-control']) }}
        </div>
        
    </div>
    <hr> 
    <div class="row form-group">
        <div class="col-md-2">
           {{ Form::label('permanent_address', 'Permanent Address:',['class' => 'control-label']) }}
        </div>
       
        <div class="col-md-1">

        </div>
        <div class="col-md-7">
          {{ Form::textarea('permanent_address', $student->permanent_address,['class' => 'form-control','rows' => 4]) }}
        </div>
        


    </div>


    <!-- <hr> -->
    <div class="row form-group">
      <div class="col-md-5">

      </div>
      <div class="col-md-2">
          {{ Form::submit('Save Changes',['class' => 'btn btn-success btn-block form-control']) }}
      </div>
      
      
    
      
     <div class="col-md-5">

     </div>





    </div>

   {!!Form::close() !!}
    
   </div>
</div>




@endsection

@section('scripts')


@endsection
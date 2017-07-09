 @extends('layouts.master-student-side')

 @section('stylesheets')




 @endsection

 @section('content')



     
  <div class="row" style="text-align:center">
 <h1> <span class="label label-default">Edit Profile</span></h1>
 </div> 

<div class="row">
  
    <div class="col-md-12">

        
    
    {!! Form::model($student, ['route' => ['profile.update',$student->student_id] ,'method' => 'put','files'=>true]) !!}
 

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
                echo "<img id='profile-pic' src='/profilepics/".$username."'"." height='80px' width='140px'>"

            ?>
               <!-- <img  id='profile-pic' src='/pro' height="100"> -->
               <h5><span class="label label-default">upload new photo</span></h5>
            

             <!-- {{ Form::file('profilepic','',array('id'=>'imgInput')) }}  -->
          
               <input type='file' accept=".jpg,.png, .jpeg" name='profilepic' id="imgInput" />
               
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
        <!-- <hr>   -->

        
        <!-- <div class="row form-group">
            <div class="col-md-2">
                {{ Form::label('name', 'Student Name:',['class' => 'control-label']) }}
            </div>
            
            <div class="col-md-3">
               
                <h4><span class="label label-success">{{$student->name}}</span></h4>
            </div>
            <div class="col-md-2">
                {{ Form::label('Hall', 'Hall Name:',['class' => 'control-label']) }}
            </div>
            <div class="col-md-2">
               
                <h4><span class="label label-success">{{$student->hall}}</span></h4>
            </div>
        </div> -->
        <hr> 
        <div class="row form-group">
            <div class="col-md-2">
               {{ Form::label('dept', 'Department:',['class' => 'control-label']) }}
            </div>
            
            
              <div class="col-md-2">
                  
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
         <div class="col-md-1">
           {{ Form::label('phone_no', 'Phone:',['class' => 'control-label']) }}
         </div>
        
         <div class="col-md-2">
           {{ Form::text('phone_no',$student->phone_no,   ['class' => 'form-control']) }} 
           <!-- <h4><span class="label label-success">{{$student->phone_no}}</span></h4> -->
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
<script type="text/javascript">
function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#profile-pic').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#imgInput").change(function(){

    readURL(this);
});
</script>
@endsection
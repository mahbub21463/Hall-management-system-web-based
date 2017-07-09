 @extends('layouts.master-provost-side')

 @section('stylesheets')




 @endsection

 @section('content')



<div class="row" style="text-align:center">
 <h1> <span class="label label-default">Edit Profile</span></h1>
 </div> 
<hr>
<div class="row">
    <!-- <div class="col-md-1">
        
    </div> -->
    <div class="col-md-12">

        
    
        {!! Form::model($employee, ['route' => ['profile.update',$employee->employee_id] ,'method' => 'put','files'=>true]) !!}
        <div class="row form-group">
          <div class="col-md-2" style="height:70px">
              {{ Form::label('employee_id', 'Employee ID:',['class' => 'control-label']) }}
          </div>


            <div class="col-md-2" style="height:70px">
                <h4><span class="label label-success">{{$employee->employee_id}}</span></h4>
           
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
            

            
          
               <input type='file' accept=".jpg,.png, .jpeg" name='profilepic' id="imgInput"/>
               
            </div>
            <div class="col-md-2" style="height:70px">
                {{ Form::label('name', 'Employee Name:',['class' => 'control-label']) }}
            </div>
            
            <div class="col-md-3" style="height:70px">
              {{ Form::text('name',$employee->name,   ['class' => 'form-control']) }} 
                <!-- <h4><span class="label label-success">{{$employee->name}}</span></h4>
 -->            
            </div>
            <div class="col-md-2" style="height:70px">
                {{ Form::label('Hall', 'Hall Name:',['class' => 'control-label']) }}
            </div>
            <div class="col-md-2" style="height:70px">
               
                <h4><span class="label label-success">{{$employee->hall}}</span></h4>
            </div>
            
        </div>
        <hr>  

        
        
        
    
    <div class="row form-group">
        <div class="col-md-2">
            {{ Form::label('designation', 'Designation:',['class' => 'control-label']) }}
        </div>
       

        <div class="col-md-2">
               
                <h4><span class="label label-success">{{$employee->designation}}</span></h4>
         </div>
         <div class="col-md-1">

        </div>
         <div class="col-md-1">
           {{ Form::label('phone_no', 'Phone:',['class' => 'control-label']) }}
         </div>
        
         <div class="col-md-2">
           {{ Form::text('phone_no',$employee->phone_no,   ['class' => 'form-control']) }} 
           <!-- <h4><span class="label label-success">{{$employee->phone_no}}</span></h4> -->
         </div>
       
        
        <div class="col-md-2">
           {{ Form::label('blood_group', 'Blood Group:',['class' => 'control-label']) }}
        </div>
       
        <div class="col-md-2">
                  {{Form::select('blood_group', ['A+'=>'A+','A-'=>'A-','B+'=>'B+','B-'=>'B-','AB+'=>'AB+','AB-'=>'AB-','O+'=>'O+','O-'=>'O-'], $employee->blood_group,['class'=>'form-control'])}}
                 <!-- <h4><span class="label label-success">{{$employee->blood_group}}</span></h4> -->
           
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
          {{ Form::textarea('permanent_address', $employee->permanent_address,['class' => 'form-control','rows' => 4]) }}
        </div>
        


    </div>


    <hr>
    




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
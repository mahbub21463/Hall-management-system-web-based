 @extends('layouts.master-provost-side')

 @section('stylesheets')




 @endsection

 @section('content')

 

<div class="row" style="text-align:center">
 <h1> <span class="label label-default">My Profile</span></h1>
 </div> 
<hr>
<div class="row">
    <div class="col-md-1">
        
    </div>
    <div class="col-md-10">

        
    
        
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
                echo "<img src='/profilepics/".$username."'"." height='140px' width='200px'>"

            ?>
            </div>
            <div class="col-md-2" style="height:70px">
                {{ Form::label('name', 'Employee Name:',['class' => 'control-label']) }}
            </div>
            
            <div class="col-md-3" style="height:70px">
                <!-- {{ Form::text('name',$employee->name,   ['class' => 'form-control']) }} -->
                <h4><span class="label label-success">{{$employee->name}}</span></h4>
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
         <div class="col-md-2">
           {{ Form::label('phone_no', 'Phone No:',['class' => 'control-label']) }}
         </div>
        
         <div class="col-md-2">
           
           <h4><span class="label label-success">{{$employee->phone_no}}</span></h4>
         </div>
       
        
        <div class="col-md-2">
           {{ Form::label('blood_group', 'Blood Group:',['class' => 'control-label']) }}
        </div>
       
        <div class="col-md-1">
                 <!--  {{Form::select('blood_group', ['A+'=>'A+','A-'=>'A-','B+'=>'B+','B-'=>'B-','AB+'=>'AB+','AB-'=>'AB-','O+'=>'O+','O-'=>'O-'], $employee->blood_group,['class'=>'form-control'])}} -->
                 <h4><span class="label label-success">{{$employee->blood_group}}</span></h4>
           
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
          {{ Form::textarea('permanent_address', $employee->permanent_address,['readonly','class' => 'form-control','rows' => 4]) }}
        </div>
        


    </div>


    <hr>
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
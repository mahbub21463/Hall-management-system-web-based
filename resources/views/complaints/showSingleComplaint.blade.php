 @extends('layouts.master-supervisor-side')

 @section('stylesheets')




 @endsection

 @section('content')



<div class="row" style="text-align:center">
 <h1> <span class="label label-default">Complaints</span></h1>
 </div>
     
 
    <div class="row form-group">
        <div class="col-md-2">
            {{ Form::label('complaint_title', 'Complaint Title:',['class' => 'control-label']) }}
        </div>
        
        <div class="col-md-2">
          <h4><span class="label label-success">{{$complaint->title}}</span></h4>
            
        </div>
       
    </div>
    <!-- <hr>   -->
     <?php $temp_student = App\Student::where('student_id',$complaint->student_id)->first() ?>

    <div class="row form-group">
        <div class="col-md-2">
            {{ Form::label('student_id', 'Student ID:',['class' => 'control-label']) }}
        </div>
        
        <div class="col-md-2">
            <h4><span class="label label-success">{{$complaint->student_id}}</span></h4>
            
        </div>
    
        <div class="col-md-2">
            {{ Form::label('name', 'Student Name:',['class' => 'control-label']) }}
        </div>
        <div class="col-md-2">
           <h4><span class="label label-success">{{$temp_student->name}}</span></h4>
            
        </div>

        <div class="col-md-2">
            {{ Form::label('room_no', 'Room No:',['class' => 'control-label']) }}
        </div>
        
        <div class="col-md-2">
            <h4><span class="label label-success">{{$temp_student->room_no}}</span></h4>
       </div>
    </div>
    <!-- <hr>   -->



    <div class="row form-group">
        <div class="col-md-3">
               {{ Form::label('complaint_description', 'Complaint Description:',['class' => 'control-label']) }}
        </div>
       
    </div>
    
    <div class="row form-group">
        
        
        <div class="col-md-10 col-md-offset-1">
                  {{ Form::textarea('complaint_description', $complaint->description,['readonly','class' => 'form-control','rows' => 6]) }}
        </div>
  


    </div>
    <!-- <hr> -->
    <div class="row form-group">
        <div class="col-md-3">
               {{ Form::label('feedback', 'Feedback:',['class' => 'control-label']) }}
        </div>
       
    </div>
    
    <div class="row form-group">
        
        
        <div class="col-md-10 col-md-offset-1">
                  {{ Form::textarea('feedback', $complaint->comment,['readonly','class' => 'form-control','rows' => 3]) }}
        </div>
  


    </div>
    <div class="row">
        <div class="col-md-2">
            {{ Form::label('status', 'Status:',['class' => 'control-label']) }}
        </div>
       
        <div class="col-md-2">
          <h4><span class="label label-success">{{$complaint->status}}</span></h4>
            
        </div>
        
    </div>
    <hr>









@endsection

@section('scripts')


@endsection